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
                                    <h4>Get Reports</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item" style="float: left;">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" style="float: left;">
                                        <a href="#!">Get Reports</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <style type="text/css">
                    .txBlues {
                        font-weight: 900;
                        color: blue;
                    }
                </style>
                <div class="row bg-white card-body m-b-20">
                    <div class="col">
                        <span>
                            <img src="{{ asset('assets/images/time.PNG')}}">

                        </span>
                        <center>
                            <a class="txBlues" href=""> Details <i class="fa fa-refresh" aria-hidden="true"></i></a>
                        </center>
                    </div>
                    <div class="col">
                        <span>Total Obligation (4) </span>
                        <p><strong>11.87/18.29 <br> <span>(64.89%)</span> </strong></p>
                    </div>
                    <div class="col">
                        <span>Personal Loan (2) </span>
                        <p><strong>11.87/18.29 <br> <span>(64.89%)</span> </strong></p>
                    </div>
                    <div class="col">
                        <span>Home Loans (0) </span>
                        <p><strong>11.87/18.29 <br> <span>(64.89%)</span> </strong></p>
                    </div>
                    <div class="col">
                        <span>Credit Cards (2) </span>
                        <p><strong>11.87/18.29 <br> <span>(64.89%)</span> </strong></p>
                    </div>
                    <div class="col">
                        <span>Auto Loans (0) </span>
                        <p><strong>11.87/18.29 <br> <span>(64.89%)</span> </strong></p>
                    </div>
                    <div class="col">
                        <span>Others Loans (2) </span>
                        <p><strong>11.87/18.29 <br> <span>(64.89%)</span> </strong></p>
                    </div>


                    <div class="col-md-12">
                        <p class="text-center"><small>* All figures are in rupees lacs, (outstanding amount/disbursed amount), percentage utilization </small></p>
                        <hr>



                    </div>


                </div>

            </div>
        </div>
    </div>
    <div id="styleSelector"></div>
</div>
@endsection