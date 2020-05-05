<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use App\Traits\GuestRole;

use Spatie\Permission\Models\Permission;
use App\Traits\CommonTrait;
use Response;


class UserController extends Controller
{
    use GuestRole;
    use CommonTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function __construct()
    {
        $this->middleware('guestMiddle');
    }
    public function index(Request $request)
    {
        $obj = $this;
        $data = User::orderBy('id','DESC')->paginate(100);
        return view('users.index',compact('data','obj'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    function checkAdmin($userid){
          $userRec = $this->isAdmin($userid);
          return $userRec;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }

    public function validateForm(Request $request){


        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        if ($validator->fails())
        {
            return Response::json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            ), 400); // 400 being the HTTP code for an invalid request.
        }
        return Response::json(array('success' => true), 200);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);


        $input = $request->all();

        $file = null;
        if ($request->has('user_image')) {
            $folder      = 'uploads/profile_images';
            $image = $request->file('user_image');
            $file = $this->uploadImage($image,$folder, '');
        }
        $input['user_image']   = $file;


        $input['password'] = Hash::make($input['password']);

  /* \DB::enableQueryLog();*/
        $user = User::create($input);


        /*dd(
            DB::getQueryLog()
        );*/


        $user->assignRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success',__('User created successfully'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();


        return view('users.edit',compact('user','roles','userRole'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);


        $input = $request->all();

        $folder      = 'uploads/profile_images';
        if ($request->has('user_image')) {
            $user = User::find($id);
            $image = $request->file('user_image');
            $file = $this->uploadImage($image,$folder, $user->user_image);
            $input['user_image']   = $file;
        }


        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }


        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();


        $user->assignRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success',__('User updated successfully'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $folder      = 'uploads/profile_images';
        if (!empty($user->user_image)) {
            $this->deleteImage($folder, $user->user_image);
        }

        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success',__('User deleted successfully'));
    }
}