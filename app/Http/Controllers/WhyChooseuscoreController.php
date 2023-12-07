<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Yourachievements;
use App\Models\CompleteProfile;

class WhyChooseuscoreController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:whychooseus-read', ['only' => ['index','store']]);
         $this->middleware('permission:whychooseus-create', ['only' => ['create','store']]);
         $this->middleware('permission:whychooseus-update', ['only' => ['edit','update']]);
         $this->middleware('permission:whychooseus-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complete = Yourachievements::where('status', 9)->get();
        return view('admin.why-choose-us.index', compact('complete'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.why-choose-us.add');
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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public/uploads/article', $imageName);
            $input['image'] = $imageName;
        }
        $user = Yourachievements::create($input);
        if ($input) {
            return redirect()->route('why-choose-us')->with('success', 'why-choose-us Created Successfully');
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
        $data  = Yourachievements::where('id', $id)->first();
        return view('admin.why-choose-us.edit', compact('data'));
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
        $data = Yourachievements::find($id);
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
        $data->status = $request->status;
        $data->save();
        if ($data) {
            return redirect()->route('why-choose-us')->with('success', 'why-choose-us us Updated Successfully');
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
        $Slidar = Yourachievements::find($id)->delete();

        return redirect()->back()->with('success', 'Slidar Deleted Successfully');
    }
}
