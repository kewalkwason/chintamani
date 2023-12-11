<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\ApplyLoan;
use App\Models\UserGurrantorDetails;
use DateTime;
use Alert;
use App\Models\Remark;
use App\Models\User;
use App\Models\UserDocuments;
use App\Models\UserPersonalDetails;
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
        $users = User::where('role', 6)->get();
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
                $tabData = ApplyLoan::with('userDetail', 'dsaDetail', 'users')->where('application_status', 'Verify');
                if (!empty($request->start_date) && !empty($request->end_date)) {
                    $tabData->whereBetween('approved_date', [date('Y-m-d', strtotime($request->start_date)), date('Y-m-d', strtotime($request->end_date))]);
                } elseif (!empty($request->start_date) && empty($request->end_date)) {
                    $tabData->whereDate('approved_date', date('Y-m-d', strtotime($request->start_date)));
                } elseif (empty($request->start_date) && !empty($request->end_date)) {
                    $tabData->whereDate('approved_date', date('Y-m-d', strtotime($request->end_date)));
                }
                if (!empty($request->executive_id)) {
                    $tabData->whereDate('updated_by', $request->executive_id);
                }
                $tabData = $tabData->offset($start)
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
                        $action1 = '<a href=' . route('loanuser.details', $orderId) . ' class="btn btn-sm btn-danger">View G</a>';
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
                    $nestedData['action'] = @$action . ' ' . '<a href=' . route('add.gurrantor', base64_encode($v->userDetail->s_no)) . ' class="btn btn-sm btn-success">Add G</a>' . ' ' . @$action1 . ' ' . @$action2;
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
        return view('admin.all-loans.verification', compact('users'));
    }

    public function loanuserDetails($id)
    {
        try {
            $dcId = base64_decode($id);
            $data = DB::table('apply_loan')
                ->select(
                    '*',
                    'apply_loan.s_no',
                    'apply_loan.pass_usalary_slip1',
                    'apply_loan.pass_usalary_slip2',
                    'apply_loan.pass_usalary_slip3',
                    'user_bank_details.password',
                    'user_personal_details.type',
                    'apply_loan.salary_slip1',
                    'apply_loan.salary_slip2',
                    'apply_loan.salary_slip3',
                    'apply_loan.bank_statement',
                    'user_documents.cibil as cbl',
                    'user_documents.aadhar_front as aadharfront',
                    'user_documents.aadhar_back as aadharback',
                    'user_documents.pan_card_photo as pancardphoto',
                    'user_documents.employer_id as employerid',
                    'user_documents.salary_slip1 as salary1',
                    'user_documents.salary_slip2 as salary2',
                    'user_documents.salary_slip3 as salary3',
                    'user_documents.bank_statement as bankstatement',
                    'user_documents.cheque as chqe',
                    'user_documents.profile_pic as profilepic',
                    'user_documents.other_document as otherdocument'
                )
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

    public function loanVerify(Request $request)
    {
        try {
            $row_id = $request->data_id;
            // $userid = Auth::guard('misadmin')->user()->id;
            $userid = Auth::user()->id;
            if ($row_id) {
                ApplyLoan::where('s_no', $row_id)->update([
                    'application_status' => $request->application_status,
                    'updated_by' => $userid,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 0,
                ]);

                $input['order_id'] = $request->order_id;
                $input['remark'] = $request->message;
                $input['added_by'] = $userid;
                Remark::create($input);

                // if (!empty($request->inlineCssCheckbox1 == 1)) {
                //     $mobile = $request->mobile_no;
                //     $msg = 'Your request';
                //     $dlt_template_id = '1107161534641136550';
                //     send_otp($mobile,$msg,$dlt_template_id);
                // }
                // if (!empty($request->inlineCssCheckbox2 == 1)) {
                //     $to = $request->email_id;
                //     $subject = "";
                //     $message = "Dear ";
                //     $headers = [
                //         'From' => 'From: Rashtrapati Bhavan <visit-nilayam@rb.nic.in>',
                //         'MIME-Version' => '1.0',
                //         'Content-Type' => 'text/html; charset=iso-8859-1'
                //     ];
                //     $sent= mail($to,$subject,$message,$headers);
                // }
            }
            return redirect()->back();
        } catch (Exception $e) {
            Log::error($e);
            return back()->with('error', $e->getMessage());
        }
    }

    public function addGurrantor(Request $request,$id){
        $s_no = base64_decode($id);
        return view('admin.all-loans.addGurrantor', compact('s_no'));
    }

    public function addNewGurrantor(Request $request){
        $this->validate($request, [
            'first_name'   => 'required',
            'last_name'   => 'required',
        ]);
        try
        {        
        $input = $request->all();
        $user_id = Auth::user()->id;

        $input['user_id'] = $user_id;
        $input['first_name'] = $request->first_name;
        $input['last_name'] = $request->last_name;
        $input['official_mail'] = $request->official_mail;
        $input['phone_no'] = $request->phone_no;
        $input['type'] = 'offline';
        $input['gender'] = $request->gender;
        $input['d_o_b'] = $request->d_o_b;
        $input['house_type'] = $request->house_type;
        $input['staying_years'] = $request->staying_years;
        $input['banking_password'] = $request->banking_password;
        $input['local_address'] = $request->local_address;
        $input['address_state'] = $request->address_state;
        $input['address_city'] = $request->address_city;
        $input['pin_code'] = $request->pin_code;
        $input['current_loan'] = $request->current_loan;
        $input['current_loan_emi'] = $request->current_loan_emi;
        $input['take_home_salary'] = $request->take_home_salary;
        $input['company_name'] = $request->company_name;
        $input['company_address'] = $request->company_address;
        $input['emp_type'] = $request->emp_type;
        $input['salary_mode'] = $request->salary_mode;
        $input['working_years'] = $request->working_years;
        $input['pan_card_no'] = $request->pan_card_no;
        $input['aadhar_card_no'] = $request->aadhar_card_no;
        UserGurrantorDetails::create($input);

        $data = UserPersonalDetails::where('s_no',$user_id);
        $data->is_gurrantor = 1;
        //$data->save();

        if ($request->hasFile('profile_pic')) {
            $image = $request->file('profile_pic');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('profile_pic')->move(base_path() . '/public/uploads', $imageName);
            $inputs['profile_pic'] = $imageName;
        }
        if ($request->hasFile('emp_id')) {
            $image = $request->file('emp_id');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('emp_id')->move(base_path() . '/public/uploads', $imageName);
            $inputs['emp_id'] = $imageName;
        }
        if ($request->hasFile('pan_front')) {
            $image = $request->file('pan_front');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('pan_front')->move(base_path() . '/public/uploads', $imageName);
            $inputs['pan_front'] = $imageName;
        }
        if ($request->hasFile('aadhar_front')) {
            $image = $request->file('aadhar_front');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('aadhar_front')->move(base_path() . '/public/uploads', $imageName);
            $inputs['aadhar_front'] = $imageName;
        }
        if ($request->hasFile('aadhar_back')) {
            $image = $request->file('aadhar_back');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('aadhar_back')->move(base_path() . '/public/uploads', $imageName);
            $inputs['aadhar_back'] = $imageName;
        }
        if ($request->hasFile('salary_slip1')) {
            $image = $request->file('salary_slip1');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('salary_slip1')->move(base_path() . '/public/uploads', $imageName);
            $inputs['salary_slip1'] = $imageName;
        }
        if ($request->hasFile('salary_slip2')) {
            $image = $request->file('salary_slip2');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('salary_slip2')->move(base_path() . '/public/uploads', $imageName);
            $inputs['salary_slip2'] = $imageName;
        }
        if ($request->hasFile('salary_slip3')) {
            $image = $request->file('salary_slip3');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('salary_slip3')->move(base_path() . '/public/uploads', $imageName);
            $inputs['salary_slip3'] = $imageName;
        }
        if ($request->hasFile('bank_statement')) {
            $image = $request->file('bank_statement');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('bank_statement')->move(base_path() . '/public/uploads', $imageName);
            $inputs['bank_statement'] = $imageName;
        }
        if ($request->hasFile('cheque_upload')) {
            $image = $request->file('cheque_upload');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('cheque_upload')->move(base_path() . '/public/uploads', $imageName);
            $inputs['cheque'] = $imageName;
        }
        if ($request->hasFile('cibil_upload')) {
            $image = $request->file('cibil_upload');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('cibil_upload')->move(base_path() . '/public/uploads', $imageName);
            $inputs['cibil'] = $imageName;
        }
        if ($request->hasFile('other_doc')) {
            $image = $request->file('other_doc');
            $fileName = $image->getClientOriginalName();
            $imageName = time() . rand() . '.' . $image->getClientOriginalExtension();
            $request->file('other_doc')->move(base_path() . '/public/uploads', $imageName);
            $inputs['other_document'] = $imageName;
        } 
      $userDoc = UserDocuments::create($inputs);        

        if ($userDoc) {
            Alert::success('Success','Application Updated');
            return redirect()->route('verification.loan');
        } else {
            Alert::error('Failed','Something went wrong.');
            return redirect()->back();
        }
    }
    catch (Exception $e) 
    {
        Log::error($e);
        return back()->with('error', $e->getMessage());
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
