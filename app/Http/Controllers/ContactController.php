<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;

class ContactController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:contact-read', ['only' => ['index','store']]);
         $this->middleware('permission:contact-create', ['only' => ['create','store']]);
         $this->middleware('permission:contact-update', ['only' => ['edit','update']]);
         $this->middleware('permission:contact-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complete = ContactUs::get();
        return view('admin.contact.index', compact('complete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.contact.add');
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
            'phone'   => 'required',

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
        $user = ContactUs::create($input);
        if ($input) {
            return redirect()->route('contact')->with('success', 'contact Created Successfully');
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
        $data  = ContactUs::where('id', $id)->first();
        return view('admin.contact.edit', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'phone'   => 'required',

        ]);
        $data = ContactUs::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public/uploads/article', $imageName);
            $data['image'] = $imageName;
        }
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->tags = $request->tags;
        $data->our_opening_hours = $request->our_opening_hours;
        $data->save();
        if ($data) {
            return redirect()->route('contact')->with('success', 'contact us Updated Successfully');
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
        $Slidar = ContactUs::find($id)->delete();

        return redirect()->back()->with('success', 'Slidar Deleted Successfully');
    }
}
