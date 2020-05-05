<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Input;
use Response;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::connection('mysql2')->select('select * from users');
        echo  view('admin.guests.index',compact('users'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obj = $this;
        return view('admin.guests.create',compact('obj'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $terms = 0;
        if (isset($request->terms)) {
            $terms = 1;
        }

        DB::connection('mysql2')->insert('insert into users (first_name, email, phone, terms_conditions, country, city, skills, level,gender) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$request->firstName, $request->email, $request->phoneNumber, $terms, $request->country, $request->city, $request->skills, $request->level,1]);

         return redirect()->route('guests.index')
                        ->with('success',__('Guest user created successfully'));

    }

    public function validateForm(Request $request){
        $rules = array('firstName' => 'required', 'city' => 'required', 'email'=> 'required','skills'=>'required','level'=>'required','phoneNumber'=>'required');
        $validator = Validator::make($request->all(), $rules);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guest = DB::connection('mysql2')->select('select * from users where id = '.$id.'');
        $guest = $guest[0];
        $obj        = $this;
        return view('admin.guests.edit',compact('guest','obj'));
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


        $terms = 0;
        if (isset($request->terms)) {
            $terms = 1;
        }


        $affected = DB::connection('mysql2')->update('update users set first_name = "'.$request->firstName.'", email = "'.$request->email.'", phone = "'.$request->phoneNumber.'", terms_conditions = "'.$terms.'", country = "'.$request->country.'", city = "'.$request->city.'", skills = "'.$request->skills.'", level = "'.$request->level.'", gender = 1  where id = ?', [$id]);

        return redirect()->route('guests.index')
                        ->with('success',__('Guest user updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::connection('mysql2')->delete('delete from users where id = '.$id.'');

        return redirect()->route('guests.index')
                        ->with('success',__('Guest user deleted successfully'));
    }
}
