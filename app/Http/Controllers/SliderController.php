<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\CompleteProfile;

class SliderController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:slider-read', ['only' => ['index','store']]);
         $this->middleware('permission:slider-create', ['only' => ['create','store']]);
         $this->middleware('permission:slider-update', ['only' => ['edit','update']]);
         $this->middleware('permission:slider-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complete = Slider::get();
        return view('admin.slider.index', compact('complete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.slider.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, []);
        $input = $request->all();
        // dd($input);
        if ($request->hasFile('slider_image')) {
            $slider_image = $request->file('slider_image');
            $fileName = $slider_image->getClientOriginalName();
            $fileExtension = $slider_image->getClientOriginalExtension();
            $imageName = time() . rand() . '.' . $slider_image->getClientOriginalExtension();
            $request->file('slider_image')->move(base_path() . '/public/uploads/article', $imageName);
            $input['slider_image'] = $imageName;
        }
        $user = Slider::create($input);
        if ($input) {
            return redirect()->route('slider')->with('success', 'slider Created Successfully');
        } else {
            return redirect()->route()->with('error', 'Oops..! Something Went Wrong');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data  = Slider::where('id', $id)->first();
        return view('admin.slider.edit', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'   => 'required',

        ]);
        $data = Slider::find($id);
        if ($request->hasFile('slider_image')) {
            $slider_image = $request->file('slider_image');
            $fileName = $slider_image->getClientOriginalName();
            $fileExtension = $slider_image->getClientOriginalExtension();
            $imageName = time() . rand() . '.' . $slider_image->getClientOriginalExtension();
            $request->file('slider_image')->move(base_path() . '/public/uploads/article', $imageName);
            $data['slider_image'] = $imageName;
        }
        $data->slug_url_name = $request->slug_url_name;
        $data->meta_description = $request->meta_description;
        $data->meta_keywords = $request->meta_keywords;
        $data->slider_tags = $request->slider_tags;
        $data->title = $request->title;
        $data->content = $request->content;
        $data->save();
        if ($data) {
            return redirect()->route('slider')->with('success', 'slider us Updated Successfully');
        } else {
            return redirect()->route()->with('error', 'Oops..! Something Went Wrong');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MakeModel  $makeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Slidar = Slider::find($id)->delete();

        return redirect()->back()->with('success', 'Slidar Deleted Successfully');
    }
}
