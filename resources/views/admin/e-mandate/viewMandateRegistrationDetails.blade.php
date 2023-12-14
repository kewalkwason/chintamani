@extends('admin.layouts.master')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>View E-Mandate Registration Details</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item" style="float: left;">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" style="float: left;">
                                        <a href="#!"> View E-Mandate Registration Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td><strong>Status</strong></td>
                                                <td>
                                                    @if(@$data->is_active == 1)
                                                    <label class="label label-success">Active</label>
                                                    @else
                                                    <label class="label label-danger">Deactive</label>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Loan Number</strong></td>
                                                <td>{{$data->user_id}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>User Name</strong></td>
                                                <td>{{$data->user_name}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Email</strong></td>
                                                <td>{{$data->email}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Phone</strong></td>
                                                <td>{{$data->phone}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Pan Number</strong></td>
                                                <td>{{$data->pan_number}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Aadhar Number</strong></td>
                                                <td>{{$data->aadhar_number}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Bank Name</strong></td>
                                                <td>{{$data->bank_name}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Account Number</strong></td>
                                                <td>{{$data->account_no}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>IFSC Code</strong></td>
                                                <td>{{$data->ifsc_code}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Merchant Transaction Identifier</strong></td>
                                                <td>{{$data->merchant_transaction_identifier}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Identifier</strong></td>
                                                <td>{{$data->identifier}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Bank Reference Identifier</strong></td>
                                                <td>{{$data->bank_reference_identifier}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Mandate Registered Response</strong></td>
                                                <td>{{$data->mandate_registered_response}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Is Mandate Verified</strong></td>
                                                <td>
                                                    @if($data->is_mandate_verified == 1)
                                                    Yes
                                                    @else
                                                    No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Mandate Verification Response</strong></td>
                                                <td>{{$data->mandate_verification_response}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Is Transaction Scheduled</strong></td>
                                                <td>@if($data->is_transaction_scheduled == 1)
                                                    Yes
                                                    @else
                                                    No
                                                    @endif</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Scheduled Date</strong></td>
                                                <td>{{$data->scheduled_date}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Transaction Schedule Response</strong></td>
                                                <td>{{$data->transaction_schedule_response}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Is Transaction Verification</strong></td>
                                                <td>
                                                    @if($data->is_transaction_verification == 1)
                                                    Yes
                                                    @else
                                                    No
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Transaction Verification Response</strong></td>
                                                <td>{{$data->transaction_verification_response}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Status</strong></td>
                                                <td>{{$data->status}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Status Code</strong></td>
                                                <td>{{$data->status_code}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{route('emandate.registration')}}" class="btn btn-primary">Return Back</a>
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="styleSelector"></div>
    </div>
</div>

<div class="modal fade" id="exampleManage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Mandate Registered Fields</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <input type="hidden" name="customerid" id="customerid">
                        <input type="hidden" name="old_loan_number" id="old_loan_number" value="ABHISHEKKHANDPUR1122">
                        <label>Minimum EMI Amount</label>
                        <input type="text" name="minimum_emi_amount" id="minimum_emi_amount" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Maximum EMI Amount</label>
                        <input type="text" name="maximum_emi_amount" id="maximum_emi_amount" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Schedule Status</label>
                        <select class="form-control" name="schedule_status" id="schedule_status" required="">
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>EMI Date <small>(Every Month)</small></label>
                        <input type="text" name="emi_date_new" id="emi_date_new" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Loan Number</label>
                        <input type="text" name="loan_number_new" id="loan_number_new" class="form-control" required="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection