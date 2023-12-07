<?php
// $role = $this->session->userdata('role'); 
// $id=$_SESSION['user_id']; 
// $name = $this->db->query('select user_name from user_login where user_id = '.$id)->row_array();

// $countAppliedLoans =$this->db->query('select count(upd.user_id) as total from apply_loan join user_personal_details as upd  on upd.s_no=apply_loan.user_id where upd.user_id = '.$id)->row_array();
// $countVerifyLoans = $this->db->query('select count(upd.user_id) as total from apply_loan join user_personal_details as upd  on upd.s_no=apply_loan.user_id where application_status = "Verify" and upd.user_id = '.$id)->row_array();
// $countEnquiry = $this->db->query('select count(upd.user_id) as total from apply_loan join user_personal_details as upd  on upd.s_no=apply_loan.user_id where application_status = "Rejected" and upd.user_id = '.$id)->row_array();
// $countPending = $this->db->query('select count(upd.user_id) as total from apply_loan join user_personal_details as upd  on upd.s_no=apply_loan.user_id where application_status = "Pending" and upd.user_id = '.$id)->row_array();

?>
@extends('frontend.dsa.layouts.master')
@section('content')
@include('frontend.dsa.includes.sidebar')
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class=" p-t-b-10">
                <div class="logoutbutton">
                    <li class="dropdown navbar-user" style="list-style-type: none;">
                        <a href="" class=" dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('admin/img/dummy/u1.png')}}" alt="" />
                            <span class="d-none d-md-inline">{{ @Auth::user()->user_name }}</span> <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="background-color: blue;">
                            <a href="Login/changepass" class="dropdown-item">Change Password</a>
                            <a href="{{route('dsa.logout')}}" class="dropdown-item">Log Out</a>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Verification Section Start-->
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                @if(@Auth::user()->user_name != 5) <!-- only nisha singh s_no = 5 -->
                    <hr> @endif
                    @if(@Auth::user()->user_name != 5) <!-- only nisha singh s_no = 5 -->
                    <div class="row my-3">
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="dashboard">
                                    <div class="float-right">
                                        <span class="icon icon-chain s-48"></span>
                                    </div>
                                    <div class="counter-title">Applied </br>Loan</div>
                                    <h5 class="sc-counter mt-3">0</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="dashboard">
                                    <div class="float-right">
                                        <span class="icon icon-fa fa-check s-48"></span>
                                    </div>
                                    <div class="counter-title">Approved </br> Loan</div>
                                    <h5 class="sc-counter mt-3">0</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="dashboard">
                                    <div class="float-right">
                                        <span class="icon icon-fa fa-power-off s-48"></span>
                                    </div>
                                    <div class="counter-title ">Rejected </br>Loan</div>
                                    <h5 class="sc-counter mt-3">0</h5>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="dashboard">
                                    <div class="float-right">
                                        <span class="icon icon-fa fa-spinner s-48"></span>
                                    </div>
                                    <div class="counter-title ">Pending </br>Loan</div>
                                    <h5 class="sc-counter mt-3">0</h5>
                                </div>
                            </div>
                        </div>
                    @endif
                    </div>
            </div>
            <div class="container-fluid">
                <div class="d-flex row">
                    <div class="col-md-12">
                        <div class="card mb-3 shadow no-b r-0">
                            <div class="card-body">
                                <div class="col-lg-12 col-md-12">
                                    <form action="admin/appliedloans" method="get" class="form-horizontal">
                                        <div class="form-row">
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive">
                                    <table  class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-nowrap"><input type="checkbox" id="checkedAll_ptp"></th>
                                                <th class="text-nowrap">S.no</th>
                                                <th class="text-nowrap">Order Id</th>
                                                <th class="text-nowrap">Source</th>
                                                <!--<th class="text-nowrap">DSA Name</th>-->
                                                <th class="text-nowrap">Name</th>
                                                <th class="text-nowrap">Phone</th>
                                                <th class="text-nowrap">Salary</th>
                                                <th class="text-nowrap">City</th>
                                                <th class="text-nowrap">Delay Days</th>
                                                <th class="text-nowrap">Applied Date</th>
                                                <th class="text-nowrap">Remark</th>
                                                <!-- <th class="text-nowrap">Applied By/Assigned to</th> -->
                                                <th class="text-nowrap">Status</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Right Sidebar -->
@endsection