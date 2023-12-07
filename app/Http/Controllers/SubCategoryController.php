<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:subcategory-read', ['only' => ['index','store']]);
         $this->middleware('permission:subcategory-create', ['only' => ['create','store']]);
         $this->middleware('permission:subcategory-update', ['only' => ['edit','update']]);
         $this->middleware('permission:subcategory-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complete = SubCategory::get();
        $categorys = Category::get();
        return view('admin.sub-category.index', compact('complete','categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $categorys = Category::get();
        return view('admin.sub-category.add',compact('categorys'));
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
            'category_id'   => 'required',

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
        $user = SubCategory::create($input);
        if ($input) {
            return redirect()->route('sub-category')->with('success', 'sub-category Created Successfully');
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
        $data  = SubCategory::where('id', $id)->first();
        $categorys = Category::get();
        return view('admin.sub-category.edit', compact('data','categorys'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category_id'   => 'required',

        ]);
        $data = SubCategory::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public/uploads/article', $imageName);
            $data['image'] = $imageName;
        }
        $data->category_id = $request->category_id;
        $data->subcategory_name = $request->subcategory_name;
        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->tags = $request->tags;
        $data->slug_name = $request->slug_name;
        $data->content = $request->content;
        $data->status = $request->status;
        $data->meta_description = $request->meta_description;
        $data->save();
        if ($data) {
            return redirect()->route('sub-category')->with('success', 'sub-category us Updated Successfully');
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
        $Slidar = SubCategory::find($id)->delete();

        return redirect()->back()->with('success', 'sub-category Deleted Successfully');
    }
}
