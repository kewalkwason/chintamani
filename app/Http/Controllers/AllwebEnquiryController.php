<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplyLoan;
use App\Models\User;
use App\Models\UserPersonalDetails;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            $totalData = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',0)->count();
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            if (empty($request->input('search.value'))) {
                $tabData = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',0);
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
                $tabData = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',0)->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
                })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy('s_no', 'DESC')
                    ->get();
                $totalFiltered = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',0)->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
                })
                    ->count();
            }

            // print_r(DB::getQueryLog());die();
            $data = [];
            if (!empty($tabData)) {
                $count = 0;
                foreach ($tabData as $key => $v) {
                    $orderId = base64_encode($v->s_no);
                    if($v->status==0){
                        $status = 'Pending';
                    }elseif($v->status==2){
                        $status = 'Follow Up';
                    }elseif($v->status==3){
                        $status = 'Rejected';
                    }

                    $nestedData['id'] = $count + $start + 1;
                    $nestedData['source'] = $v->type;
                    $nestedData['name'] = $v->first_name . ' ' . $v->last_name;
                    $nestedData['phone_no'] = $v->phone_no;
                    $nestedData['email'] = $v->work_email;
                    $nestedData['applied_date'] = date('d-m-Y', strtotime($v->date_created));  
                    $nestedData['pan_number'] = $v->pan_card_no; 
                    $nestedData['status'] = $status; 
                    $nestedData['loan_type'] = $v->house_type;                                       
                    $nestedData['action'] = '<a href=' . route('view.enquiry', $orderId) . ' class="btn btn-info">View</a>';
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
            $totalData = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',3)->count();
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            if (empty($request->input('search.value'))) {
                $tabData = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',3);
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
                $tabData = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',3)->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
                })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy('s_no', 'DESC')
                    ->get();
                $totalFiltered = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',3)->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
                })
                    ->count();
            }

            // print_r(DB::getQueryLog());die();
            $data = [];
            if (!empty($tabData)) {
                $count = 0;
                foreach ($tabData as $key => $v) {
                    $orderId = base64_encode($v->s_no);
                    if($v->status==0){
                        $status = 'Pending';
                    }elseif($v->status==2){
                        $status = 'Follow Up';
                    }elseif($v->status==3){
                        $status = 'Rejected';
                    }

                    $nestedData['id'] = $count + $start + 1;
                    $nestedData['source'] = $v->type;
                    $nestedData['name'] = $v->first_name . ' ' . $v->last_name;
                    $nestedData['phone_no'] = $v->phone_no;
                    $nestedData['email'] = $v->work_email;
                    $nestedData['applied_date'] = date('d-m-Y', strtotime($v->date_created));  
                    $nestedData['pan_number'] = $v->pan_card_no; 
                    $nestedData['status'] = $status; 
                    $nestedData['loan_type'] = $v->house_type;                                       
                    $nestedData['action'] = '<a href=' . route('view.enquiry', $orderId) . ' class="btn btn-info">View</a>';
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


    public function followUp(Request $request)
    {
        if ($request->ajax()) {
            $totalData = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',2)->count();
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            if (empty($request->input('search.value'))) {
                $tabData = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',2);
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
                $tabData = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',2)->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
                })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy('s_no', 'DESC')
                    ->get();
                $totalFiltered = UserPersonalDetails::with('appyloan','users')->where('type','web')->where('status',2)->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
                })
                    ->count();
            }

            // print_r(DB::getQueryLog());die();
            $data = [];
            if (!empty($tabData)) {
                $count = 0;
                foreach ($tabData as $key => $v) {
                    $orderId = base64_encode($v->s_no);
                    if($v->status==0){
                        $status = 'Pending';
                    }elseif($v->status==2){
                        $status = 'Follow Up';
                    }elseif($v->status==3){
                        $status = 'Rejected';
                    }

                    $nestedData['id'] = $count + $start + 1;
                    $nestedData['source'] = $v->type;
                    $nestedData['name'] = $v->first_name . ' ' . $v->last_name;
                    $nestedData['phone_no'] = $v->phone_no;
                    $nestedData['email'] = $v->work_email;
                    $nestedData['applied_date'] = date('d-m-Y', strtotime($v->date_created));  
                    $nestedData['pan_number'] = $v->pan_card_no; 
                    $nestedData['status'] = $status; 
                    $nestedData['loan_type'] = $v->house_type;                                       
                    $nestedData['action'] = '<a href=' . route('view.enquiry', $orderId) . ' class="btn btn-info">View</a>';
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
        return view('admin.contact-enquiry.followUp');
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function viewEnquiry($id)
     {
         try {
             $dcId = base64_decode($id);
             $data = DB::table('user_personal_details')
                 ->select('user_personal_details.*')
                 ->join('apply_loan', 'user_personal_details.s_no', '=', 'apply_loan.user_id')
                 ->leftjoin('users', 'users.id', '=', 'user_personal_details.assigned_to')
                 ->where('user_personal_details.s_no', '=', $dcId)->first();
             // print_r($data);die;
             return view('admin.contact-enquiry.viewEnquiry', compact('data'));
         } catch (Exception $e) {
             Log::error($e->getMessage());
             $msg = $e->getMessage();
             return back()->with('error', $msg);
         }
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
