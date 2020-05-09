<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Traits\CommonTrait;

class AboutController extends Controller
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
        $abouts = About::orderBy('id','DESC')->paginate(100);
        return view('admin.about.index',compact('abouts','obj'))
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
      
        return view('admin.about.create',compact('obj'));
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
            'title'         	=> 'required',
            'featured_image' 	=> 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
            'editor1'    		=> 'required'
        ]);

        $input = $request->all();
        $file = null;
        if ($request->has('featured_image')) {
            $folder      = 'uploads/about_images';
            $image       = $request->file('featured_image');
            $file        = $this->uploadImage($image,$folder, '');
        }
       
        $input['featured_image']   = $file;
        $input['content'] = $request->editor1;

        
        About::create($input);
        return redirect()->route('about.index')
                        ->with('success',__('Record has been added successfully!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $About = About::find($id);
        return view('admin.about.show',compact('About'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about      = About::find($id);
        return view('admin.about.edit',compact('about'));
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
            'title'         	=> 'required',
            'editor1'    		=> 'required'
        ]);



        $input = $request->all();
        $file = null;
        $about = About::find($id);

        if ($request->has('featured_image')) {
            $folder      = 'uploads/about_images';
            $image = $request->file('featured_image');
            $file = $this->uploadImage($image,$folder, $about->featured_image);
            $input['featured_image']   = $file;

        }

        $input['content'] = $request->editor1;
        $about->update($input);
        return redirect()->route('about.index')
                        ->with('success',__('Record has been updated successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        $folder      = 'uploads/about_images';
        if (!empty($about->featured_image)) {
            $this->deleteImage($folder, $about->featured_image);
        }
        
        About::find($id)->delete();
        return redirect()->route('about.index')
                        ->with('success',__('Record has been  deleted successfully!'));
    }
}
