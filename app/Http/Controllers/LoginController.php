<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\RegisterRequest;
use Input;


class LoginController extends Controller
{
    public function sign_up(){
    	return view('frontend.pages.register');
    }

  
     public function register(RegisterRequest $request)
    {
    	//pending  task  :remember role & email form repalce
    	User::create($request->all());
        return redirect()->back()
                        ->with('success','User has been created successfully.');
    }
}
