<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplyLoan;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\Auth;

class RejectedLoansController extends Controller
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
            $totalData = ApplyLoan::with('userDetail', 'dsaDetail', 'users')->where('application_status', 'Rejected')->count();
            $totalFiltered = $totalData;
            $limit = $request->input('length');
            $start = $request->input('start');
            // $order = $columns[$request->input('order.0.column')];
            // $dir = $request->input('order.0.dir');
            // DB::enableQueryLog();
            if (empty($request->input('search.value'))) {
                $tabData = ApplyLoan::with('userDetail', 'dsaDetail', 'users')->where('application_status', 'Rejected');
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
                $tabData = ApplyLoan::with('userDetail', 'dsaDetail', 'users')->where('application_status', 'Rejected')->where(function ($query) use ($search) {
                    $query->where('loan_amount', 'LIKE', "%{$search}%");
                })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy('s_no', 'DESC')
                    ->get();
                $totalFiltered = ApplyLoan::with('userDetail', 'dsaDetail', 'users')->where('application_status', 'Rejected')->where(function ($query) use ($search) {
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

                    if ($v->is_gurrantor == 1) {
                        $action = '<a class="btn btn-info" onclick="guarantorListModal(this)" customer_id="' . $v->user_id . '">View G';
                    }

                    $nestedData['id'] = $count + $start + 1;
                    $nestedData['order_id'] = $v->order_id;
                    $nestedData['type'] = $v->userDetail->type;
                    $nestedData['dsa_name'] = empty($v->dsaDetail->dsa_name) || $v->userDetail->type != 'dsa' ? '<label class="label label-danger">None</label>' : $v->dsaDetail->dsa_name;
                    $nestedData['name'] = $v->userDetail->first_name . ' ' . $v->userDetail->last_name;
                    $nestedData['phone_no'] = $v->userDetail->phone_no;
                    $nestedData['take_home_salary'] = $v->userDetail->take_home_salary;
                    $nestedData['address_city'] = $v->userDetail->address_city;
                    $nestedData['applied_date'] = date('d-m-Y', strtotime($v->rejected_date));
                    $nestedData['assigned_to'] = @$v->users->first_name . ' ' . @$v->users->last_name;
                    $nestedData['action'] = '<a class="btn btn-info" onclick="guarantorListModal(this)" customer_id="' . $v->user_id . '">View G
                    <a href="" class="btn btn-dark">Add G</a>'.@$action.'
                    <button class="btn btn-warning btn-sm" onclick="viewSummary(this)" id="' . $v->s_no . '" order_id="' . $v->order_id . '">Summary</button>';
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
        return view('admin.all-loans.rejected_loans', compact('users'));
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
