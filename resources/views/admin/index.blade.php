@extends('admin.layouts.master')
@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <div class="main-body">
         <div class="page-wrapper">
            <div class="page-body">
               <div class="row">
                  <div class="col-xl-3 col-md-6">
                     <div class="card bg-c-yellow text-white">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col">
                                 <p class="m-b-5">Verifications</p>
                                 <h4 class="m-b-0">852</h4>
                              </div>
                              <div class="col col-auto text-right">
                                 <img src="{{ asset('assets/images/verification.png')}}">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="card bg-c-green text-white">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col">
                                 <p class="m-b-5">Applied Loans</p>
                                 <h4 class="m-b-0">23</h4>
                              </div>
                              <div class="col col-auto text-right">
                                 <img src="{{ asset('assets/images/rupee.png')}}">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="card bg-c-pink text-white">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col">
                                 <p class="m-b-5">Disbursed</p>
                                 <h4 class="m-b-0">42</h4>
                              </div>
                              <div class="col col-auto text-right">
                                 <img src="{{ asset('assets/images/money.png')}}">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="card bg-c-blue text-white">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col">
                                 <p class="m-b-5">Hold</p>
                                 <h4 class="m-b-0">10</h4>
                              </div>
                              <div class="col col-auto text-right">
                                 <img src="{{ asset('assets/images/holdloan.png')}}">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-8 col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <div class="card-header-left ">
                              <h5>Monthly View</h5>
                              <span class="text-muted">For more details about usage,
                                 please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                           </div>
                        </div>
                        <div class="card-block-big">
                           <div id="monthly-graph" style="height:250px"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-12">
                     <div class="card feed-card">
                        <div class="card-header">
                           <h5>Feeds</h5>
                        </div>
                        <div class="card-block">
                           <div class="row m-b-20">
                              <div class="col-auto p-r-0">
                                 <img class="feds" src="{{ asset('assets/images/record-button.png')}}">
                              </div>
                              <div class="col">
                                 <h6 class="m-b-5">New User Registrations <span class="text-muted f-right f-13"> 220</span></h6>
                              </div>
                           </div>
                           <div class="row m-b-20">
                              <div class="col-auto p-r-0">
                                 <img class="feds" src="{{ asset('assets/images/record-button.png')}}">
                              </div>
                              <div class="col">
                                 <h6 class="m-b-5">Today PTP <span class="text-muted f-right f-13"> 200</span></h6>
                              </div>
                           </div>
                           <div class="row m-b-20">
                              <div class="col-auto p-r-0">
                                 <img class="feds" src="{{ asset('assets/images/record-button.png')}}">
                              </div>
                              <div class="col">
                                 <h6 class="m-b-5">You have 3 pending Loan. <span class="text-muted f-right f-13">Just Now</span></h6>
                              </div>
                           </div>
                           <div class="row m-b-20">
                              <div class="col-auto p-r-0">
                                 <img class="feds" src="{{ asset('assets/images/record-button.png')}}">
                              </div>
                              <div class="col">
                                 <h6 class="m-b-5">New Loan received <span class="text-muted f-right f-13">Just Now</span></h6>
                              </div>
                           </div>
                           <div class="row m-b-20">
                              <div class="col-auto p-r-0">
                                 <img class="feds" src="{{ asset('assets/images/record-button.png')}}">
                              </div>
                              <div class="col">
                                 <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                              </div>
                           </div>
                           <div class="row m-b-20">
                              <div class="col-auto p-r-0">
                                 <img class="feds" src="{{ asset('assets/images/record-button.png')}}">
                              </div>
                              <div class="col">
                                 <h6 class="m-b-5">New User Registrations <span class="text-muted f-right f-13"> 220</span></h6>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="card">
                        <div class="card-header">
                           <h5>Total Leads</h5>
                           <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                 <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                 <li><i class="fa fa-window-maximize full-card"></i></li>
                                 <li><i class="fa fa-minus minimize-card"></i></li>
                                 <li><i class="fa fa-refresh reload-card"></i></li>
                                 <li><i class="fa fa-trash close-card"></i></li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-block">
                           <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-5"></i> 18% High
                              than last month
                           </p>
                           <div class="row">
                              <div class="col-4 b-r-default">
                                 <p class="text-muted m-b-5">Overall</p>
                                 <h5>76.12%</h5>
                              </div>
                              <div class="col-4 b-r-default">
                                 <p class="text-muted m-b-5">Monthly</p>
                                 <h5>16.40%</h5>
                              </div>
                              <div class="col-4">
                                 <p class="text-muted m-b-5">Day</p>
                                 <h5>4.56%</h5>
                              </div>
                           </div>
                        </div>
                        <canvas id="tot-lead" height="150"></canvas>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="card">
                        <div class="card-header">
                           <h5>Total Vendors</h5>
                           <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                 <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                 <li><i class="fa fa-window-maximize full-card"></i></li>
                                 <li><i class="fa fa-minus minimize-card"></i></li>
                                 <li><i class="fa fa-refresh reload-card"></i></li>
                                 <li><i class="fa fa-trash close-card"></i></li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-block">
                           <p class="text-c-pink f-w-500"><i class="feather icon-chevrons-down m-r-15"></i> 24% High
                              than last month
                           </p>
                           <div class="row">
                              <div class="col-4 b-r-default">
                                 <p class="text-muted m-b-5">Overall</p>
                                 <h5>68.52%</h5>
                              </div>
                              <div class="col-4 b-r-default">
                                 <p class="text-muted m-b-5">Monthly</p>
                                 <h5>28.90%</h5>
                              </div>
                              <div class="col-4">
                                 <p class="text-muted m-b-5">Day</p>
                                 <h5>13.50%</h5>
                              </div>
                           </div>
                        </div>
                        <canvas id="tot-vendor" height="150"></canvas>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <h5>Invoice Generate</h5>
                           <div class="card-header-right">
                              <ul class="list-unstyled card-option">
                                 <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                 <li><i class="fa fa-window-maximize full-card"></i></li>
                                 <li><i class="fa fa-minus minimize-card"></i></li>
                                 <li><i class="fa fa-refresh reload-card"></i></li>
                                 <li><i class="fa fa-trash close-card"></i></li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-block">
                           <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-15"></i> 20% High
                              than last month
                           </p>
                           <div class="row">
                              <div class="col-4 b-r-default">
                                 <p class="text-muted m-b-5">Overall</p>
                                 <h5>68.52%</h5>
                              </div>
                              <div class="col-4 b-r-default">
                                 <p class="text-muted m-b-5">Monthly</p>
                                 <h5>28.90%</h5>
                              </div>
                              <div class="col-4">
                                 <p class="text-muted m-b-5">Day</p>
                                 <h5>13.50%</h5>
                              </div>
                           </div>
                        </div>
                        <canvas id="invoice-gen" height="150"></canvas>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="styleSelector"></div>
      </div>
   </div>
</div>
@endsection