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
use DB;


class FrontloginController extends Controller
{
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

  
     public function register(RegisterRequest $request)
    {
        DB::enableQueryLog();

    	//pending  task  :remember role & email form repalce
        $data = $request->all();
        //print_r($request->all());die;
        $data['password'] = Hash::make($request->password);
       // print_r($data);die;
    	$user = User::create($data);
        $laQuery = DB::getQueryLog();
        #print_r($laQuery);die;
        #echo $laQuery;die;
        #print_r($user);die;
        User::addBlameableColumns();

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);




        $view = view("emails.verifyUser",compact('verifyUser','user'))->render();
        echo $view;die;

       /*  $to = "zohaibyousuf456@gmail.com";
         $subject = "Verification Email Foodnas";
         
         $header = "From:foodnas@foodnas.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";


         
         $retval = mail ($to,$subject,$view,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
*/
       //echo  view('frontend.pages.register',compact('myArray'),true); die;

   
       // \Mail::to($user->email)->send(new VerifyMail($verifyUser01));


        return redirect()->back()
                        ->with('success','User has been created successfully.');
    }
}
