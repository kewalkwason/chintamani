<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\Auth;

class ContactEnquiryController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:city-read', ['only' => ['index', 'store']]);
    //     $this->middleware('permission:city-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:city-update', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:city-delete', ['only' => ['destroy']]);
    // }
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
                1 => 'name',
                2 => 'email',
                3 => 'mobile',
            ];
            $totalData = ContactInquiry::where('tags','contactEnq')->count();
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            // DB::enableQueryLog();
            if (empty($request->input('search.value'))) {
                $tabData = ContactInquiry::where('tags','contactEnq')
                ->offset($start)
                    ->limit($limit)
                    ->orderBy('id', 'DESC')
                    ->get();
            } else {
                $search = $request->input('search.value');
                $tabData = ContactInquiry::where('tags','contactEnq')->where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy('id', 'DESC')
                    ->get();
                $totalFiltered = ContactInquiry::where('tags','contactEnq')->where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                })
                    ->count();
            }

            // print_r(DB::getQueryLog());die();
            $data = [];
            if (!empty($tabData)) {
                $count = 0;
                foreach ($tabData as $key => $v) {
                    $date1 = new DateTime($v->updated_at);
                    $date2 = new DateTime('NOW');
                    $interval = $date1->diff($date2);

                    $nestedData['id'] = $count + $start + 1;
                    $nestedData['name'] = $v->name;
                    $nestedData['email'] = $v->email;
                    $nestedData['mobile'] = $v->mobile;
                    $nestedData['subject'] = $v->subject;
                    $nestedData['area'] = $v->area;
                    $nestedData['content'] = $v->content;
                    $nestedData['created_at'] = $v->created_at;                    
                    $nestedData['tags'] = $v->tags;
                    $nestedData['status'] = $v->status;
                    $nestedData['action'] = '<a class="btn btn-danger" onclick="deleteThisLoan(this)" data_id="'.$v->id.'">Delete</a>';
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
        return view('admin.contact-enquiry.contact_enquiry');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.city.add');
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
            'name'   => 'required',

        ]);
        $input = $request->all();
        $user = ContactInquiry::create($input);
        if ($input) {
            return redirect()->route('city')->with('success', 'city Created Successfully');
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
        $data  = ContactInquiry::where('id', $id)->first();
        return view('admin.city.edit', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'   => 'required',

        ]);
        $data = ContactInquiry::find($id);
        $data->name = $request->name;
        $data->slug_url_name = $request->slug_url_name;
        $data->save();
        if ($data) {
            return redirect()->route('city')->with('success', 'city us Updated Successfully');
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
        $Slidar = ContactInquiry::find($id)->delete();

        return redirect()->back()->with('success', 'Slidar Deleted Successfully');
    }
}
