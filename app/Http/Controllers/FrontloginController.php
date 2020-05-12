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
use Intervention\Image\ImageManagerStatic as Image;


class FrontloginController extends Controller
{
    use GuestRole;
    use CommonTrait;
   

    public function sign_up(){
    	return view('frontend.pages.register');
    }

    public function upload(Request $request)
    {

        $folderPath = public_path('uploads/profile_images/');
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $imageName = uniqid() . '.png';
        $file = $folderPath . $imageName;
        file_put_contents($file, $image_base64);
        $this->profileImage = $imageName;
        \Session::put('profile_image', $imageName);
         Image::make($folderPath.$imageName)->resize(70, 70)->save($folderPath.'thumbs/'.$imageName);
        return response()->json(['success'=>'success']);
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

    public function changePassword($token)
    {
      
      $verifyUser = VerifyUser::where('token', $token)->first();
     
      if(isset($verifyUser) ){

        $user = $verifyUser->user;
        return view('frontend.pages.change_password',compact('user'));

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

    function my_events(Request $request){

        // \DB::enableQueryLog();

        $country  = Country::all();
        $data     = Event::with('countries','states','cities')->orderBy('id','DESC')->get();
        
        
       // $query = \DB::getQueryLog();
       // print_r(end($query));

        echo  view('frontend.pages.my_events',compact('data','country'))->render();
    }

    function userslist(Request $request){



       $users = DB::connection('mysql2')->select('select * from users');
        echo  view('frontend.pages.userslist',compact('users'))->render();
    }

    function fitler_events(Request $request){

         \DB::enableQueryLog();
      
        $fcountry = $request->country;
        $fstate   = $request->state;
        $fcity    = $request->city;
        $price    = $request->price;
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $clauses = ['country_id' => $fcountry];
        if(isset($fstate)) {
            $clauses = array_merge($clauses,['state_id' => $fstate]);
        }
        if(isset($fcity)) {
            $clauses = array_merge($clauses,['city_id' => $fcity]);
        }

        if(isset($price)) {
            $clauses = array_merge($clauses,['price' => $price]);
        }

      

        $country  = Country::all();
        $data     = Event::with('countries','states','cities')->where($clauses)->orderBy('id','DESC')->get();
        if(isset($start_date)) {
             $data = $data->where('start_date' ,'>=', $start_date);
        }

        if(isset($end_date)) {
             $data = $data->where('end_date' ,'<=', $end_date);
        }

        
        echo  view('frontend.pages.events.eventsTable',compact('data','country','fcountry','fstate','fcity'))->render();
    }


    public function get_states(Request $request){
        $countryid  = $request->countryid;
        $stateid    = $request->stateid;
        $states     = State::where('country_id',$countryid)->get();
        echo view("frontend.pages.events.getState",compact('states','stateid'))->render();


    }

    public function get_cities(Request $request){ 
        $stateid    = $request->stateid;
        $cityid    = $request->cityid;
        $cities     = City::where('state_id',$stateid)->get();
        echo view("frontend.pages.events.getCity",compact('cities','cityid'))->render();
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
            //->where('verified', '=', 1)
            $user = User::where('email', '=', $request->email)->first();
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

        $users = DB::connection('mysql2')->select('select * from users');
        if(\Session::get('isLoggedIn')){
          $uesrInfo = \Session::get('userinfo');
          $id = $uesrInfo->id;
          $user = User::find($id);
          return view('fronthome',compact('user','users'));
        }else{
            return redirect('/')->with('warning', __("You can't access here!"));
        }
         
    }

    public function change_user_password(Request $request){
        
        $this->validate($request, [
            'email'                   => 'required',
            'password'                => 'required|confirmed|min:6',
            'password_confirmation'   => 'required'
        ]);
        $input = $request->all();

        $user = User::where('email', $request->email)->first();
        if(isset($user) ){
            $input['password'] = Hash::make($input['password']);
            $user = User::find($user->id);
            $user->update($input);
            \Session::put('status', __("Your Password has been changed successfully!"));
            return redirect('/')->with('status', __("Your Password has been changed successfully!"));

        }
    }
  
     public function register(RegisterRequest $request)
        {

        $input = $request->all();
        /*$folder      = 'uploads/profile_images';
        $file = null;
        if ($request->has('user_image')) {
            $image = $request->file('user_image');
            $file = $this->uploadImage($image,$folder, '');
        }
        $input['user_image']   = $file;*/
        $input['password'] = Hash::make($input['password']);
    	  $user = User::create($input);
     
        // Store or dump the log data...
        
        $role = $this->getRole($roleName='Guest');
        $user->assignRole([$role->id]);

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);

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

        $user = User::where('email', '=', $request->email)->first();
         \Session::put('isLoggedIn', 1); 
                    \Session::put('userinfo', $user); 
         

        return redirect('/');

        /*return redirect()->back()
                        ->with('success',__('Verification email has been sent to you please verify!'));*/
    }

    function reset_password(Request $request){
        $email = $request->email_forgot;
        $userInfo  = User::where('email',$email)->first();
        $id = $userInfo->id;

        $verifyUser = VerifyUser::where('user_id',$id)->first();
        if(isset($verifyUser) ){
            VerifyUser::where('user_id',$id)->delete();
        }

        
        $token = sha1(time());
        $verifyUser = VerifyUser::create([
            'user_id' => $id,
            'token' => $token
        ]);


        $to_name  = $userInfo->name;
        //$to_email = 'motivatepakistan@gmail.com';
        $to_email = $userInfo->email;

        $data = array('name'=>$request->name, "body" => __('Change Password'),"token"=>$token);
        \Mail::send('emails.forgetEmail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject(__('Change Password'));
        $message->from('no-reply@foodnas.com',__('Change Password'));
        });

        \Session::put('status', __('Forget Passwrod link has been sent to you please verify!'));
         return redirect('/')->with('status', __('Forget Passwrod link has been sent to you please verify!'));
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
        if(\Session::get('profile_image') !=''){
            $input['user_image']   = \Session::get('profile_image');
        }
        
        
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }


        $user = User::find($id);
        $user->update($input);
        \Session::put('userinfo', $user); 
                
        return redirect()->route('front_home')
                        ->with('success',__('User updated successfully'));
    }


}
