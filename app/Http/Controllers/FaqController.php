<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Yourachievements;
use App\Models\CompleteProfile;

class FaqController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:faq-read', ['only' => ['index', 'store']]);
        $this->middleware('permission:faq-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:faq-update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:faq-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $columns = [
                0 => 'id',
                1 => 'title',
                2 => 'zone_code',
            ];
            $totalData = Yourachievements::count();
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            $order = $columns[$request->input('order.0.column')];
            $dir = $request->input('order.0.dir');
            // DB::enableQueryLog();
            if (empty($request->input('search.value'))) {
                $role = Yourachievements::offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
                $totalFiltered = Yourachievements::count(); // Total count when no search
            } else {
                $search = $request->input('search.value');
                $role = Yourachievements::where('status', '8')
                    ->where('name', 'LIKE', "%{$search}%")
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
                $totalFiltered = Yourachievements::where('status', '8')
                    ->where('name', 'LIKE', "%{$search}%")
                    ->count(); // Total count with search criteria
            }
            // print_r(DB::getQueryLog());die();
            $data = [];
            if (!empty($role)) {
                $count = 0;
                foreach ($role as $key => $rolevalue) {
                    $nestedData = [];
                    $nestedData['id'] = $count + $start + 1;
                    $nestedData['heading'] = $rolevalue->heading;
                    // Assuming $rolevalue->image contains the image filename
                    $imageSrc = asset('uploads/article') . '/' . $rolevalue->image;
                    $nestedData['image'] = '<img src="' . $imageSrc . '" style="width: 250px; height: 100%;" />';
                    $nestedData['content'] = $rolevalue->content;
                    $nestedData['action'] = '<a href="' . route('faq.edit', $rolevalue->id) . '"><span><i class="fa fa-pencil" aria-hidden="true"></i></span></a>
                        <a href="' . route('faq.delete', $rolevalue->id) . '"><span style="color:red;"><i class="fa fa-trash" aria-hidden="true"></i></span></a>';
                    $data[] = $nestedData;
                    $count++;
                }
            }

            $json_data = [
                'draw' => intval($request->input('draw')),
                'recordsTotal' => intval($totalData),
                'recordsFiltered' => intval($totalFiltered),
                'data' => $data,
            ];
            echo json_encode($json_data);
            exit;
        }
        return view('admin.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.faq.add');
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
        $user = Yourachievements::create($input);
        if ($input) {
            return redirect()->route('faq')->with('success', 'faq Created Successfully');
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
        return view('admin.faq.edit', compact('data'));
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
            return redirect()->route('faq')->with('success', 'faq us Updated Successfully');
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
