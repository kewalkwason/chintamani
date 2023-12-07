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
                           <h4>PTP reports</h4>
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
                              <a href="#!"> PTP reports</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="page-body">
               <div class="row">
                  <div class="col-lg-12">
                     <div>
                        <div>
                           <div class="items" data-group="test">
                              <div class="card">
                                 <div class="card-body p-4">
                                    <form class="row g-3">
                                       <div class="col-md-4">
                                          <label for="input1" class="form-label">App User :</label>
                                          <select class="form-control">
                                             <option>Select App User</option>
                                             <option> ................</option>
                                             <option> ................</option>
                                             <option> ................</option>
                                             <option> ................</option>
                                             <option> ................</option>
                                             <option> ................</option>
                                          </select>
                                       </div>
                                       <div class="col-md-4">
                                          <label for="input2" class="form-label">Select Type :</label>
                                          <select class="form-control">
                                             <option>All</option>
                                             <option>PTP</option>
                                             <option>PTP Done</option>
                                          </select>
                                       </div>
                                       <div class="col-md-4">
                                          <label for="input2" class="form-label">PTP Date :</label>
                                          <input type="date" class="form-control shadow" id="input2" placeholder="Email Address">
                                       </div>
                                       <div class="col-md-12">

                                          <br>
                                          <button class="btn btn-danger">Search Here...</button>
                                       </div>



                                    </form>
                                 </div>





                              </div>
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
@endsection