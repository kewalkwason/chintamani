<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LoantypeServices;
use App\Models\Category;
use App\Models\SubCategory;

class LoantypeServicesController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:loanTypeServices-read', ['only' => ['index','store']]);
         $this->middleware('permission:loanTypeServices-create', ['only' => ['create','store']]);
         $this->middleware('permission:loanTypeServices-update', ['only' => ['edit','update']]);
         $this->middleware('permission:loanTypeServices-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complete = LoantypeServices::get();
        $categorys = Category::get();
        $subcategorys = SubCategory::get();
        return view('admin.loan-type-services.index', compact('complete','categorys','subcategorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $categorys = Category::get();
        $subcategorys = SubCategory::get();
        return view('admin.loan-type-services.add',compact('categorys','subcategorys'));
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
        $user = LoantypeServices::create($input);
        if ($input) {
            return redirect()->route('loan-type-services')->with('success', 'loan-type-services Created Successfully');
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
        $data  = LoantypeServices::where('id', $id)->first();
        $categorys = Category::get();
        $subcategorys = SubCategory::get();
        return view('admin.loan-type-services.edit', compact('data','categorys','subcategorys'));
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
        $data = LoantypeServices::find($id);
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
        $data->category_id = $request->category_id;
        $data->subcategory_id = $request->subcategory_id;
        $data->save();
        if ($data) {
            return redirect()->route('loan-type-services')->with('success', 'loan-type-services us Updated Successfully');
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
        $Slidar = LoantypeServices::find($id)->delete();

        return redirect()->back()->with('success', 'Slidar Deleted Successfully');
    }
}
