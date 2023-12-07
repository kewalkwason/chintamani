<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CityPages;
use App\Models\City;
use App\Models\SubCategory;

class CityPagesController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:citypages-read', ['only' => ['index','store']]);
         $this->middleware('permission:citypages-create', ['only' => ['create','store']]);
         $this->middleware('permission:citypages-update', ['only' => ['edit','update']]);
         $this->middleware('permission:citypages-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complete = CityPages::get();
        $categorys = City::get();
        return view('admin.city-pages.index', compact('complete','categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $categorys = City::get();
        return view('admin.city-pages.add',compact('categorys'));
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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public/uploads/article', $imageName);
            $input['image'] = $imageName;
        }
        $user = CityPages::create($input);
        if ($input) {
            return redirect()->route('city-pages')->with('success', 'city-pages Created Successfully');
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
        $data  = CityPages::where('id', $id)->first();
        $categorys = City::get();
        return view('admin.city-pages.edit', compact('data','categorys'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'heading'   => 'required',

        ]);
        $data = CityPages::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public/uploads/article', $imageName);
            $data['image'] = $imageName;
        }
        $data->heading = $request->heading;
        $data->content = $request->content;
        $data->tags = $request->tags;
        $data->city_id = $request->city_id;
        $data->save();
        if ($data) {
            return redirect()->route('city-pages')->with('success', 'city-pages us Updated Successfully');
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
        $Slidar = CityPages::find($id)->delete();

        return redirect()->back()->with('success', 'Slidar Deleted Successfully');
    }
}
