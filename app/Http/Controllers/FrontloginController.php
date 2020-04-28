<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\RegisterRequest;
use Input;
use Hash;
use App\VerifyUser;
use App\Mail\VerifyMail;
use Session;
use Validator;
use DB;
use Auth;
use Redirect;
use Spatie\Permission\Models\Role;
use App\Traits\GuestRole;
use App\Traits\CommonTrait;
use App\Event;
use App\Country;
use App\State;
use App\City;

class FrontloginController extends Controller
{
    use GuestRole;
    use CommonTrait;

    public function sign_up(){
    	return view('frontend.pages.register');
    }

    public function verifyUser($token)
    {
      $verifyUser = VerifyUser::where('token', $token)->first();
      if(isset($verifyUser) ){
        $user = $verifyUser->user;
        if(!$user->verified) {
          $verifyUser->user->verified = 1;
          $verifyUser->user->save();
          $status = __('Your e-mail is verified. You can now login.');
        } else {
          $status = __('Your e-mail is already verified. You can now login.');
        }
      } else {
        \Session::put('warning', __('Sorry your email cannot be identified.'));

        return redirect('/')->with('warning', __('Sorry your email cannot be identified.'));
      }
      \Session::put('status', $status);
      return redirect('/')->with('status', $status);
    }

    function pages($mypage){
        echo view("frontend.pages.allPages",compact('mypage'))->render();
    }

    function my_profile($mypage){

      $uesrInfo = \Session::get('userinfo');
      $id = $uesrInfo->id;
      $user = User::find($id);
      echo  view('frontend.pages.my_profile',compact('user'))->render();
    }

    function my_events(){
      $country = Country::all();
      $data = Event::with('countries','states','cities')->orderBy('id','DESC')->get();
      echo  view('frontend.pages.my_events',compact('data','country'))->render();
    }

    function front_login(Request $request){

        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required' 
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make($request->all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            

            return Redirect::to('/')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $userdata = array(
                'email'     => $request->email,
                'password'  => $request->password,
                'verified'  => 1
            );
            $user = User::where('email', '=', $request->email)
             ->where('verified', '=', 1)->first();
             if (!$user) {

               \Session::put('invalidDetails', __('Sorry! Email or password is not valid.')); 
                return Redirect::back()->withErrors($validator)->withInput($request->all());
             }else{
                 if (Hash::check($request->password, $user->password)) {
                    \Session::put('isLoggedIn', 1); 
                    \Session::put('userinfo', $user); 

                    return Redirect::to('home');   
                 }else{
                     \Session::put('invalidDetails', __('Sorry! Email or password is not valid.')); 
                    return Redirect::back()->withErrors($validator)->withInput($request->all());               
                 }
             }
        }
    }

    public function home(){
        if(\Session::get('isLoggedIn')){
          $uesrInfo = \Session::get('userinfo');
          $id = $uesrInfo->id;
          $user = User::find($id);
          return view('fronthome',compact('user'));
        }else{
            return redirect('/')->with('warning', __("You can't access here!"));
        }
         
    }

  
     public function register(RegisterRequest $request)
        {

        $input = $request->all();
        $folder      = 'uploads/profile_images';
        $file = null;
        if ($request->has('user_image')) {
            $image = $request->file('user_image');
            $file = $this->uploadImage($image,$folder, '');
        }
        $input['user_image']   = $file;
        $input['password'] = Hash::make($input['password']);
    	  $user = User::create($input);
     
        // Store or dump the log data...
        
        $role = $this->getRole($roleName='Guest');
        $user->assignRole([$role->id]);

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);
        //$view = view("emails.verifyUser",compact('verifyUser','user'))->render();
        //echo $view;die;

            $to_name  = $request->name;
            //$to_email = 'motivatepakistan@gmail.com';
            $to_email = $request->email;
            $token    = $user->verifyUser->token;

            $data = array('name'=>$request->name, "body" => __('Verify Signup Email'),"token"=>$token);
            \Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject(__('Verify Signup Email'));
            $message->from('no-reply@foodnas.com',__('Verify Signup Email'));
            });
        return redirect()->back()
                        ->with('success',__('Verification email has been sent to you please verify!'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'user_image' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
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
        return redirect()->route('front_home')
                        ->with('success',__('User updated successfully'));
    }


}
