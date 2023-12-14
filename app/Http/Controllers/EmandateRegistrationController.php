<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplyLoan;
use App\Models\MandateFailedRegister;
use App\Models\MandateRegister;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmandateRegistrationController extends Controller
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
        $users = User::where('role', 6)->get();
        if ($request->ajax()) {
            $columns = [
                0 => 's_no',
                1 => 'title',
                2 => 'zone_code',
            ];
            $totalData = MandateRegister::count();
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            if (empty($request->input('search.value'))) {
                $tabData = DB::table('mandate_register')
                    ->select('mandate_register.*', 'bank_list.bank_name',)
                    ->leftjoin('bank_list', 'bank_list.bank_code', '=', 'mandate_register.bank_code');
                // if (!empty($request->start_date) && !empty($request->end_date)) {
                //     $tabData = $tabData->where('apply_loan.order_id', '=', $dcId);
                // }
                $tabData = $tabData->offset($start)
                    ->limit($limit)
                    ->orderBy('mandate_register.date_created', 'DESC')
                    ->get();
            } else {
                $search = $request->input('search.value');
                $tabData = MandateRegister::where(function ($query) use ($search) {
                    $query->where('user_name', 'LIKE', "%{$search}%");
                })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy('date_created', 'DESC')
                    ->get();
                $totalFiltered = MandateRegister::where(function ($query) use ($search) {
                    $query->where('user_name', 'LIKE', "%{$search}%");
                })
                    ->count();
            }

            // print_r(DB::getQueryLog());die();
            $data = [];
            if (!empty($tabData)) {
                $count = 0;
                foreach ($tabData as $key => $v) {
                    $sr_no = base64_encode($v->sr_no);

                    if ($v->is_active == '1') {
                        $active = '<span class="badge badge-success">Active</span>';
                    } else {
                        $active = '<span class="badge badge-danger">Deactive</span>';
                    }

                    $arr = array();
                    $response_array = explode('|', $v->mandate_registered_response);
                    if (!empty($response_array[7])) {
                        $arr =  explode("{", $response_array[7]);
                        $arr =  explode("~", $arr[2]);
                        $arr =  explode(":", $arr[0]);
                        $mrs = $arr[1];
                    } else {
                        $mrs = "NA";
                    }

                    if($v->is_mandate_verified == 1){
                        $mv = '<i class="fa fa-ban"></i>';
                    }else{
                        $mv = '<i class="fa fa-check"></i>';
                    }

                    $nestedData['id'] = $count + $start + 1;
                    $nestedData['user_id'] = $v->user_id;
                    $nestedData['registration_type'] = $v->registration_type;
                    $nestedData['user_name'] = $v->user_name;
                    $nestedData['phone'] = $v->phone;
                    $nestedData['emi_date'] = $v->emi_date;
                    $nestedData['status'] = $v->status;
                    $nestedData['mandate_registered_response'] = $mrs;
                    $nestedData['bank_name'] = $v->bank_name;
                    $nestedData['amount'] = $v->amount;
                    $nestedData['emi_amount'] = $v->emi_amount;
                    $nestedData['max_emi_amount'] = $v->max_emi_amount;
                    $nestedData['is_mandate_verified'] = $mv;
                    $nestedData['date_created'] = date('d-m-Y H:i:s', strtotime($v->date_created));
                    $nestedData['is_active'] = $active;
                    $nestedData['manage_emi'] = '<a class="btn btn-sm btn-danger" href="#!" data-toggle="modal" data-target="#exampleManage">Manage</a>';
                    $nestedData['action'] = '<a class="btn btn-sm btn-primary" href=' . route('viewMandate.details', $sr_no) . '>View Details</a>';
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
        return view('admin.e-mandate.emandate-registration', compact('users'));
    }

    public function viewMandateDetails($id)
    {
        try {
            $dcId = base64_decode($id);
            $data = DB::table('mandate_register')
            ->select('mandate_register.*', 'bank_list.bank_name',)
            ->leftjoin('bank_list', 'bank_list.bank_code', '=', 'mandate_register.bank_code')
            ->where('mandate_register.sr_no', '=', $dcId)->first();
            // print_r($data);die;
            return view('admin.e-mandate.viewMandateRegistrationDetails', compact('data'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $msg = $e->getMessage();
            return back()->with('error', $msg);
        }
    }

    public function emandateFailed(Request $request)
    {
        $users = User::where('role', 6)->get();
        if ($request->ajax()) {
            $columns = [
                0 => 'sr_no',
                1 => 'user_name',
                2 => 'email',
            ];
            $totalData = MandateFailedRegister::count();
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            if (empty($request->input('search.value'))) {
                $tabData = MandateFailedRegister::offset($start)
                    ->limit($limit)
                    ->orderBy('date_created', 'DESC')
                    ->get();
            } else {
                $search = $request->input('search.value');
                $tabData = MandateFailedRegister::where(function ($query) use ($search) {
                    $query->where('user_name', 'LIKE', "%{$search}%");
                })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy('date_created', 'DESC')
                    ->get();
                $totalFiltered = MandateFailedRegister::where(function ($query) use ($search) {
                    $query->where('user_name', 'LIKE', "%{$search}%");
                })
                    ->count();
            }

            // print_r(DB::getQueryLog());die();
            $data = [];
            if (!empty($tabData)) {
                $count = 0;
                foreach ($tabData as $key => $v) {
                    $sr_no = base64_encode($v->sr_no);

                    $nestedData['id'] = $count + $start + 1;
                    $nestedData['user_id'] = $v->user_id;
                    $nestedData['registration_type'] = $v->registration_type;
                    $nestedData['user_name'] = $v->user_name;
                    $nestedData['phone'] = $v->phone;
                    $nestedData['emi_date'] = $v->emi_date;
                    $nestedData['status'] = $v->status;
                    $nestedData['emi_amount'] = $v->emi_amount;
                    $nestedData['max_emi_amount'] = $v->max_emi_amount;
                    $nestedData['deduction_amount'] = $v->deduction_amount;
                    $nestedData['date_created'] = date('d-m-Y H:i:s', strtotime($v->date_created));
                    $nestedData['action'] = '<a class="btn btn-sm btn-primary" href=' . route('viewMandate.faileDetails', $sr_no) . '>View Details</a>';
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
        return view('admin.e-mandate.emandate-failed', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function viewMandateFailedDetails($id)
     {
         try {
             $dcId = base64_decode($id);
             $data = DB::table('mandate_register_failed')
             ->select('mandate_register_failed.*', 'bank_list.bank_name',)
             ->leftjoin('bank_list', 'bank_list.bank_code', '=', 'mandate_register_failed.bank_code')
             ->where('mandate_register_failed.sr_no', '=', $dcId)->first();
             // print_r($data);die;
             return view('admin.e-mandate.viewMandateRegistrationDetails', compact('data'));
         } catch (Exception $e) {
             Log::error($e->getMessage());
             $msg = $e->getMessage();
             return back()->with('error', $msg);
         }
     }


     public function deactiveRegistrations(Request $request)
     {
         $users = User::where('role', 6)->get();
         if ($request->ajax()) {
             $totalData = MandateRegister::where('is_active',0)->count();
             $totalFiltered = $totalData;
             $limit = $request->input('length');
             $start = $request->input('start');
             if (empty($request->input('search.value'))) {
                 $tabData = DB::table('mandate_register')
                     ->select('mandate_register.*', 'bank_list.bank_name',)
                     ->leftjoin('bank_list', 'bank_list.bank_code', '=', 'mandate_register.bank_code')
                     ->where('mandate_register.is_active',0);
                 // if (!empty($request->start_date) && !empty($request->end_date)) {
                 //     $tabData = $tabData->where('apply_loan.order_id', '=', $dcId);
                 // }
                 $tabData = $tabData->offset($start)
                     ->limit($limit)
                     ->orderBy('mandate_register.date_created', 'DESC')
                     ->get();
             } else {
                 $search = $request->input('search.value');
                 $tabData = MandateRegister::where('is_active',0)->where(function ($query) use ($search) {
                     $query->where('user_name', 'LIKE', "%{$search}%");
                 })
                     ->offset($start)
                     ->limit($limit)
                     ->orderBy('date_created', 'DESC')
                     ->get();
                 $totalFiltered = MandateRegister::where('is_active',0)->where(function ($query) use ($search) {
                     $query->where('user_name', 'LIKE', "%{$search}%");
                 })
                     ->count();
             }
 
             // print_r(DB::getQueryLog());die();
             $data = [];
             if (!empty($tabData)) {
                 $count = 0;
                 foreach ($tabData as $key => $v) {
                     $sr_no = base64_encode($v->sr_no);
 
                     if ($v->is_active == '1') {
                         $active = '<span class="badge badge-success">Active</span>';
                     } else {
                         $active = '<span class="badge badge-danger">Deactive</span>';
                     }
 
                     $arr = array();
                     $response_array = explode('|', $v->mandate_registered_response);
                     if (!empty($response_array[7])) {
                         $arr =  explode("{", $response_array[7]);
                         $arr =  explode("~", $arr[2]);
                         $arr =  explode(":", $arr[0]);
                         $mrs = $arr[1];
                     } else {
                         $mrs = "NA";
                     }
 
                     if($v->is_mandate_verified == 1){
                         $mv = '<i class="fa fa-ban"></i>';
                     }else{
                         $mv = '<i class="fa fa-check"></i>';
                     }
 
                     $nestedData['id'] = $count + $start + 1;
                     $nestedData['user_id'] = $v->user_id;
                     $nestedData['registration_type'] = $v->registration_type;
                     $nestedData['user_name'] = $v->user_name;
                     $nestedData['phone'] = $v->phone;
                     $nestedData['emi_date'] = $v->emi_date;
                     $nestedData['status'] = $v->status;
                     $nestedData['mandate_registered_response'] = $mrs;
                     $nestedData['bank_name'] = $v->bank_name;
                     $nestedData['amount'] = $v->amount;
                     $nestedData['emi_amount'] = $v->emi_amount;
                     $nestedData['max_emi_amount'] = $v->max_emi_amount;
                     $nestedData['is_mandate_verified'] = $mv;
                     $nestedData['date_created'] = date('d-m-Y H:i:s', strtotime($v->date_created));
                     $nestedData['is_active'] = $active;
                     $nestedData['manage_emi'] = '<a class="btn btn-sm btn-danger" href="#!" data-toggle="modal" data-target="#exampleManage">Manage</a>';
                     $nestedData['action'] = '<a class="btn btn-sm btn-primary" href=' . route('viewMandate.details', $sr_no) . '>View Details</a>';
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
         return view('admin.e-mandate.emandate-deactivate', compact('users'));
     }
}
