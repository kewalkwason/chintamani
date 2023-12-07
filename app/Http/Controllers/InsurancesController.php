<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Career;

class InsurancesController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:insurances-read', ['only' => ['index','store']]);
         $this->middleware('permission:insurances-create', ['only' => ['create','store']]);
         $this->middleware('permission:insurances-update', ['only' => ['edit','update']]);
         $this->middleware('permission:insurances-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complete = Career::where('status', 3)->get();
        return view('admin.insurances.index', compact('complete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.insurances.add');
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
            'title'   => 'required',

        ]);
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
        $user = Career::create($input);
        if ($input) {
            return redirect()->route('insurances')->with('success', 'insurances Created Successfully');
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
        $data  = Career::where('id', $id)->first();
        return view('admin.insurances.edit', compact('data'));
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
        $data = Career::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public/uploads/article', $imageName);
            $data['image'] = $imageName;
        }
        $data->slug = $request->slug;
        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->tags = $request->tags;
        $data->title = $request->title;
        $data->content = $request->content;
        $data->status = $request->status;
        $data->meta_description = $request->meta_description;
        $data->save();
        if ($data) {
            return redirect()->route('insurances')->with('success', 'insurances us Updated Successfully');
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
        $Slidar = Career::find($id)->delete();

        return redirect()->back()->with('success', 'insurances Deleted Successfully');
    }
}
