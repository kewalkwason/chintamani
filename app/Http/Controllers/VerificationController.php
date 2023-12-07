<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\ApplyLoan;
use DateTime;
use Alert;
use hashid;
use Illuminate\Support\Facades\DB;

class VerificationController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:loan-journey', ['only' => ['index', 'store']]);
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
        $complete = ApplyLoan::get();
        if ($request->ajax()) {
            $columns = [
                0 => 's_no',
                1 => 'title',
                2 => 'zone_code',
            ];
            $totalData = ApplyLoan::with('userDetail', 'dsaDetail', 'users')->where('application_status', 'Verify')->count();
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            // $order = $columns[$request->input('order.0.column')];
            // $dir = $request->input('order.0.dir');
            // DB::enableQueryLog();
            if (empty($request->input('search.value'))) {
                $tabData = ApplyLoan::with('userDetail', 'dsaDetail', 'users')->where('application_status', 'Verify')->offset($start)
                    ->limit($limit)
                    ->orderBy('s_no', 'DESC')
                    ->get();
            } else {
                $search = $request->input('search.value');
                $tabData = ApplyLoan::with('userDetail', 'dsaDetail', 'users')->where('application_status', 'Verify')->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
                })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy('s_no', 'DESC')
                    ->get();
                $totalFiltered = ApplyLoan::with('userDetail', 'dsaDetail', 'users')->where('application_status', 'Verify')->where(function ($query) use ($search) {
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
                    $orderId = base64_encode($v->order_id);
                    if ($v->view_by) {
                        $manage = '<a class="btn btn-info" onclick="changeLoanDactiveStatus(this)" apply_id="' . $v->order_id . '">Change Close Status</a>';
                    } else {
                        $manage = '<a class="btn btn-warning" onclick="" apply_id="' . $v->s_no . '" order_id="' . $v->order_id . '">Opened File Summary </a>';
                    }

                    if (Auth::user()->role == 1  || $v->view_by == '' || $v->view_by == Auth::user()->id || $v->view_by == '0') {
                        $action = '<a href=' . route('loanuser.details', $orderId) . ' class="btn btn-sm btn-danger">View A</a>';
                    } else {
                        $action = '<a href="javascript:void()" class="btn btn-primary" onclick="javascript:alert("File already opened");">View A </a>';
                    }

                    if ($v->is_gurrantor == 1) {
                        $action1 = '<a href=' . route('loanuser.details', $orderId) . ' class="btn btn-sm btn-danger>View G</a>';
                    }
                    if (Auth::user()->role == 1) {
                        $action2 = '<a href="JavaScript:void(0);" class="btn btn-sm btn-danger deletedata" data-value="' . $v->s_no . '">Delete</a>';
                    }

                    $nestedData['id'] = $count + $start + 1;
                    $nestedData['order_id'] = $v->order_id;
                    $nestedData['type'] = $v->userDetail->type;
                    $nestedData['dsa_name'] = empty($v->dsaDetail->dsa_name) || $v->userDetail->type != 'dsa' ? '<label class="label label-danger">None</label>' : $v->dsaDetail->dsa_name;
                    $nestedData['name'] = $v->userDetail->first_name . ' ' . $v->userDetail->last_name;
                    $nestedData['phone_no'] = $v->userDetail->phone_no;
                    $nestedData['take_home_salary'] = $v->userDetail->take_home_salary;
                    $nestedData['address_city'] = $v->userDetail->address_city;
                    $nestedData['day_month'] = '<label class="label label-danger">' . $interval->format('%d Days %m Months') . '</label>';
                    $nestedData['applied_date'] = date('d-m-Y', strtotime($v->applied_date));
                    $nestedData['assigned_to'] = @$v->users->first_name . ' ' . @$v->users->last_name;
                    $nestedData['verify_by'] = @$v->users->first_name . ' ' . @$v->users->last_name;
                    $nestedData['manage'] = $manage;
                    $nestedData['action'] = @$action . ' ' . '<a href="" class="btn btn-sm btn-success">Add G</a>' . ' ' . @$action1 . ' ' . @$action2;
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
        return view('admin.all-loans.verification', compact('complete'));
    }

    public function loanuserDetails($id)
    {
        try {
            $dcId = base64_decode($id);
            $data = DB::table('apply_loan')
            ->select('*','apply_loan.pass_usalary_slip1','apply_loan.pass_usalary_slip2','apply_loan.pass_usalary_slip3','user_bank_details.password','user_personal_details.type','apply_loan.salary_slip1','apply_loan.salary_slip2',
            'apply_loan.salary_slip3','apply_loan.bank_statement','user_documents.cibil as cbl','user_documents.aadhar_front as aadharfront',
            'user_documents.aadhar_back as aadharback','user_documents.pan_card_photo as pancardphoto','user_documents.employer_id as employerid',
            'user_documents.salary_slip1 as salary1','user_documents.salary_slip2 as salary2','user_documents.salary_slip3 as salary3',
            'user_documents.bank_statement as bankstatement','user_documents.cheque as chqe','user_documents.profile_pic as profilepic','user_documents.other_document as otherdocument')
                ->join('user_personal_details', 'user_personal_details.s_no', '=', 'apply_loan.user_id')
                ->leftjoin('user_documents', 'user_documents.p_id', '=', 'apply_loan.user_id')
                ->leftjoin('user_bank_details', 'user_bank_details.user_id', '=', 'apply_loan.user_id')                
                ->where('apply_loan.order_id', '=', $dcId)->first();
                // print_r($data);die;
            return view('admin.all-loans.loanuserDetails', compact('data'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $msg = $e->getMessage();
            return back()->with('error', $msg);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MakeModel  $makeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            $id = $request->id;
            ApplyLoan::where('s_no', $id)->delete();
            return json_encode(['message' => 'done']);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            abort('404');
        }
    }
}
