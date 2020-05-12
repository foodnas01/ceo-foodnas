<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\StaticPage;
use App\Contact;
class FrontpagesController extends Controller
{
    public function index(){
    	$about = StaticPage::where('type','aboutus')->first();
    	return view('frontend.pages.aboutus.about',compact('about'));
    }

    public function privacy(){
    	$privacy = StaticPage::where('type','privacy')->first();
    	return view('frontend.pages.privacy.privacy',compact('privacy'));
    }

    public function join_as_host(){
    	$Joinashost = StaticPage::where('type','Joinashost')->first();
    	return view('frontend.pages.Joinashost.host',compact('Joinashost'));
    }

	public function how_it_works(){
    	$how_it_works = StaticPage::where('type','how_it_works')->first();
    	return view('frontend.pages.how_it_works.howWorks',compact('how_it_works'));
    } 

    public function terms_conditions(){
    	$terms = StaticPage::where('type','terms_conditions')->first();
    	return view('frontend.pages.terms_conditions.terms',compact('terms'));
    }

    public function trust(){
    	$trust = StaticPage::where('type','trust')->first();
    	return view('frontend.pages.trust.trust',compact('trust'));
    }

    public function jobs(){
    	$jobs = StaticPage::where('type','jobs')->first();
    	return view('frontend.pages.jobs.jobs',compact('jobs'));
    }

    public function faqs(){
    	$faqs = StaticPage::where('type','faqs')->first();
    	return view('frontend.pages.faqs.faqs',compact('faqs'));
    }  

    public function contact_us(){
    	return view('frontend.pages.contact_us.contact');
    }   

    public function user_contact(Request $request){

    	$this->validate($request, [
            'first_name'        => 'required',
            'last_name'         => 'required',
            'email'    			=> 'required',
            'message'  			=> 'required'
        ]);

        $input = $request->all();
        Contact::create($input);
        return redirect()->route('contact_us')
                        ->with('success',__('Thank You for contacting Us!'));

    } 
   

}
