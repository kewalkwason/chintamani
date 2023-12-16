<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplyLoan;
use App\Models\User;
use App\Models\UserPersonalDetails;
use DateTime;
use Illuminate\Support\Facades\Auth;

class AllwebEnquiryController extends Controller
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
                0 => 's_no',
                1 => 'first_name',
                2 => 'last_name',
                3 => 'phone_no',
            ];
            $totalData = UserPersonalDetails::with('appyloan','users')->where('type','web')->count();
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            // $order = $columns[$request->input('order.0.column')];
            // $dir = $request->input('order.0.dir');
            // DB::enableQueryLog();
            if (empty($request->input('search.value'))) {
                $tabData = UserPersonalDetails::with('appyloan','users')->where('type','web');
                if (!empty($request->start_date) && !empty($request->end_date)) {
                    $tabData->whereBetween('updated_at', [date('Y-m-d', strtotime($request->start_date)), date('Y-m-d', strtotime($request->end_date))]);
                } elseif (!empty($request->start_date) && empty($request->end_date)) {
                    $tabData->whereDate('updated_at', date('Y-m-d', strtotime($request->start_date)));
                } elseif (empty($request->start_date) && !empty($request->end_date)) {
                    $tabData->whereDate('updated_at', date('Y-m-d', strtotime($request->end_date)));
                }
               $tabData = $tabData->offset($start)
                    ->limit($limit)
                    ->orderBy('s_no', 'DESC')
                    ->get();
            } else {
                $search = $request->input('search.value');
                $tabData = UserPersonalDetails::with('appyloan','users')->where('type','web')->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
                })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy('s_no', 'DESC')
                    ->get();
                $totalFiltered = UserPersonalDetails::with('appyloan','users')->where('type','web')->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
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
                    $nestedData['name'] = $v->first_name . ' ' . $v->last_name;
                    $nestedData['phone_no'] = $v->phone_no;
                    $nestedData['email'] = $v->email;
                    $nestedData['address_city'] = $v->address_city;                    
                    $nestedData['day_month'] = '<label class="label label-danger">'.$interval->format('%d Days %m Months').'</label>';
                    $nestedData['remarks'] = getRemarks($v->s_no)->remark ?? '';
                    $nestedData['assigned_to'] = @$v->users->first_name . ' ' . @$v->users->last_name;
                    $nestedData['applied_date'] = date('d-m-Y', strtotime($v->date_created));                    
                    $nestedData['action'] = '<a href="" class="btn btn-info">View</a>';
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
        return view('admin.contact-enquiry.all_web_enquiry');
    }


    public function rejection(Request $request)
    {
        if ($request->ajax()) {
            $totalData = UserPersonalDetails::with('appyloan','users')->where('type','web')->count();
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            if (empty($request->input('search.value'))) {
                $tabData = UserPersonalDetails::with('appyloan','users')->where('type','web');
                if (!empty($request->start_date) && !empty($request->end_date)) {
                    $tabData->whereBetween('updated_at', [date('Y-m-d', strtotime($request->start_date)), date('Y-m-d', strtotime($request->end_date))]);
                } elseif (!empty($request->start_date) && empty($request->end_date)) {
                    $tabData->whereDate('updated_at', date('Y-m-d', strtotime($request->start_date)));
                } elseif (empty($request->start_date) && !empty($request->end_date)) {
                    $tabData->whereDate('updated_at', date('Y-m-d', strtotime($request->end_date)));
                }
               $tabData = $tabData->offset($start)
                    ->limit($limit)
                    ->orderBy('s_no', 'DESC')
                    ->get();
            } else {
                $search = $request->input('search.value');
                $tabData = UserPersonalDetails::with('appyloan','users')->where('type','web')->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
                })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy('s_no', 'DESC')
                    ->get();
                $totalFiltered = UserPersonalDetails::with('appyloan','users')->where('type','web')->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
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
                    $nestedData['source'] = $v->type;
                    $nestedData['name'] = $v->first_name . ' ' . $v->last_name;
                    $nestedData['phone_no'] = $v->phone_no;
                    $nestedData['email'] = $v->work_email;
                    $nestedData['applied_date'] = date('d-m-Y', strtotime($v->date_created));  
                    $nestedData['pan_number'] = $v->pan_card_no; 
                    $nestedData['status'] = 'Rejected'; 
                    $nestedData['loan_type'] = $v->house_type;                                       
                    $nestedData['action'] = '<a href="" class="btn btn-info">View</a>';
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
        return view('admin.contact-enquiry.rejectionEnquiry');
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
        $user = ApplyLoan::create($input);
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
        $data  = ApplyLoan::where('id', $id)->first();
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
        $data = ApplyLoan::find($id);
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
        $Slidar = ApplyLoan::find($id)->delete();

        return redirect()->back()->with('success', 'Slidar Deleted Successfully');
    }
}
