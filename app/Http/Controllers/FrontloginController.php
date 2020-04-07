<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\RegisterRequest;
use Input;
use Hash;


class FrontloginController extends Controller
{
    public function sign_up(){
    	return view('frontend.pages.register');
    }

  
     public function register(RegisterRequest $request)
    {
    	//pending  task  :remember role & email form repalce
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
    	$user = User::create($data);
        User::addBlameableColumns();
        return redirect()->back()
                        ->with('success','User has been created successfully.');
    }
}
