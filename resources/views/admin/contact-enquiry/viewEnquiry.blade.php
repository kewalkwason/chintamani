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
                                    <h4>View Enquiry</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item" style="float: left;">
                                        <a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" style="float: left;">
                                        <a href="#!">View Enquiry</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="items" data-group="test">
                                <div class="col-xl-12 col-md-12">
                                    <div class="card user-card-full">
                                        <div class="row m-l-0 m-r-0">
                                            <div class="col-sm-3  user-profile">
                                                <div class="card-block text-center text-white">
                                                    <div class="m-b-25">
                                                        <img src="{{ asset('assets/images/user_profile.svg')}}" class="img-radius fximsg img-fluid" alt="User-Profile-Image">
                                                    </div>
                                                    <h6 class="f-w-600 text-dark">{{$data->first_name}} {{$data->last_name}}</h6>
                                                    <p class="text-dark">Senior Designer</p>
                                                    <a href="javascript: history.go(-1)" title="Back to enquiry"><i class="fa fa-arrow-left text-dark m-t-10 f-16"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="card-block">
                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Enquiry Details</h6>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 nbigSing f-w-900">Email</p>
                                                            <h6 class="text-muted f-w-400">{{$data->work_email}}</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 nbigSing f-w-600">Phone</p>
                                                            <h6 class="text-muted f-w-400">{{$data->phone_no}}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 nbigSing f-w-600">Pan Card Number</p>
                                                            <h6 class="text-muted f-w-400">{{$data->pan_card_no}}</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 nbigSing f-w-600">Loan Type</p>
                                                            <h6 class="text-muted f-w-400">{{$data->house_type}}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 nbigSing f-w-600">Contactable Time</p>
                                                            <h6 class="text-muted f-w-400">{{date('h:m A', strtotime($data->date_created))}}</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 nbigSing f-w-600">Date & Time</p>
                                                            <h6 class="text-muted f-w-400">{{date('d-m-Y h:m A', strtotime($data->date_created))}}</h6>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="items  card-body" data-group="test">
                                <a href="#!" class="btn btn-danger">Apply Loan</a>
                                <a href="#!" class="btn btn-primary">Rejected</a>
                                <a href="#!" class="btn btn-success">FollowUp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="styleSelector"></div>
    </div>
</div>
@endsection