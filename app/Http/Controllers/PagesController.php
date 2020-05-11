<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StaticPage;
use App\Traits\CommonTrait;

class PagesController extends Controller
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
        $pages = StaticPage::orderBy('id','DESC')->paginate(100);
        return view('admin.static_pages.index',compact('pages','obj'))
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
        return view('admin.static_pages.create',compact('obj'));
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
            'editor1'    		=> 'required'
        ]);

        $input = $request->all();
        $file = null;
        if ($request->has('featured_image')) {
            $folder      = 'uploads/page_images';
            $image       = $request->file('featured_image');
            $file        = $this->uploadImage($image,$folder, '');
        }
       
        $input['featured_image']   = $file;
        $input['content'] = $request->editor1;

        
        StaticPage::create($input);
        return redirect()->route('pages.index')
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page      = StaticPage::find($id);
        return view('admin.static_pages.edit',compact('page'));
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
        $about = StaticPage::find($id);

        if ($request->has('featured_image')) {
            $folder      = 'uploads/page_images';
            $image = $request->file('featured_image');
            $file = $this->uploadImage($image,$folder, $about->featured_image);
            $input['featured_image']   = $file;

        }

        $input['content'] = $request->editor1;
        $about->update($input);
        return redirect()->route('pages.index')
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
        $page = StaticPage::find($id);
        $folder      = 'uploads/page_images';
        if (!empty($page->featured_image)) {
            $this->deleteImage($folder, $page->featured_image);
        }
        
        StaticPage::find($id)->delete();
        return redirect()->route('pages.index')
                        ->with('success',__('Record has been  deleted successfully!'));
    }
}
