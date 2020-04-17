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

class FrontloginController extends Controller
{
    use GuestRole;

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
          $status = "Your e-mail is verified. You can now login.";
        } else {
          $status = "Your e-mail is already verified. You can now login.";
        }
      } else {
        \Session::put('warning', "Sorry your email cannot be identified.");

        return redirect('/')->with('warning', "Sorry your email cannot be identified.");
      }
      \Session::put('status', $status);
      return redirect('/')->with('status', $status);
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
                'password'  => $request->password
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {
                return Redirect::to('home');

            } else {  
                \Session::put('invalidDetails', "Sorry! Email or password is not valid."); 
                // validation not successful, send back to form 
               // return Redirect::to('/');
                return Redirect::back()->withErrors($validator)->withInput($request->all());
            }

        }
    }

    public function home(){
        return view('fronthome');
    }

  
     public function register(RegisterRequest $request)
        {

          
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
    	$user = User::create($data);
        
        $role = $this->getRole($roleName='Guest');
        $user->assignRole([$role->id]);
        User::addBlameableColumns();
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);
        $view = view("emails.verifyUser",compact('verifyUser','user'))->render();
        echo $view;die;
        return redirect()->back()
                        ->with('success','User has been created successfully.');
    }
}
