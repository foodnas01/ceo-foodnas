<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;
class FrontaboutController extends Controller
{
    public function index(){
    	$about = About::all()->first();
    	return view('frontend.pages.aboutus.about',compact('about'));
    }
}
