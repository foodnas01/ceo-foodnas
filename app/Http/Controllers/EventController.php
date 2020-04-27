<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use App\Traits\GuestRole;

use Spatie\Permission\Models\Permission;
use App\Traits\CommonTrait;
use App\Country;
use App\State;
use App\City;


class EventController extends Controller
{
       use CommonTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $obj = $this;
        $data = Event::orderBy('id','DESC')->paginate(100);
        return view('events.index',compact('data','obj'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obj = $this;
        $countries = Country::all();
        return view('events.create',compact('obj','countries'));
    }

    public function get_states(Request $request){
        
        $countryid  = $request->countryid;
        $states     = State::where('country_id',$countryid)->get();
        echo view("events.getState",compact('states'))->render();


    }

    public function get_cities(Request $request){ 
        $stateid  = $request->stateid;
        $cities     = City::where('state_id',$stateid)->get();
        echo view("events.getCity",compact('cities'))->render();


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
            'title'         => 'required',
            'image'         => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'start_date'    => 'required',
            'end_date'      => 'required',
            'total_seates'  => 'required',
            'rating'        => 'required',
            'host_name'     => 'required',
            'country'       => 'required',
            'state'         => 'required',
            'city'          => 'required'
        ]);



        $input = $request->all();

        $file = null;
        if ($request->has('image')) {
            $folder      = 'uploads/events_images';
            $image       = $request->file('image');
            $file        = $this->uploadImage($image,$folder, '');
        }
        $input['image']   = $file;
        Event::create($input);
        return redirect()->route('events.index')
                        ->with('success',__('Event created successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit',compact('event'));
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
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'start_date' => 'required',
            'end_date' => 'required',
            'total_seates' => 'required',
            'rating' => 'required',
            'host_name' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required'
        ]);


        $input = $request->all();

        $folder      = 'uploads/events_images';
        if ($request->has('image')) {
            $event = Event::find($id);
            $image = $request->file('image');
            $file = $this->uploadImage($image,$folder, $event->image);
            $input['image']   = $file;
        }

        $event = Event::find($id);
        $event->update($input);
        return redirect()->route('events.index')
                        ->with('success',__('Event updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $folder      = 'uploads/events_images';
        if (!empty($event->image)) {
            $this->deleteImage($folder, $event->image);
        }

        Event::find($id)->delete();
        return redirect()->route('events.index')
                        ->with('success',__('Event deleted successfully'));
    }
}
