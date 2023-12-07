<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:category-read', ['only' => ['index','store']]);
         $this->middleware('permission:category-create', ['only' => ['create','store']]);
         $this->middleware('permission:category-update', ['only' => ['edit','update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complete = Category::get();
        return view('admin.category.index', compact('complete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.category.add');
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
            'category_name'   => 'required',

        ]);
        $input = $request->all();
        $user = Category::create($input);
        if ($input) {
            return redirect()->route('category')->with('success', 'category Created Successfully');
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
        $data  = Category::where('id', $id)->first();
        return view('admin.category.edit', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category_name'   => 'required',

        ]);
        $data = Category::find($id);
        $data->category_name = $request->category_name;
        $data->slug_name = $request->slug_name;
        $data->category_code = $request->category_code;
        $data->tags = $request->tags;
        $data->save();
        if ($data) {
            return redirect()->route('category')->with('success', 'category us Updated Successfully');
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
        $Slidar = Category::find($id)->delete();

        return redirect()->back()->with('success', 'Slidar Deleted Successfully');
    }
}
