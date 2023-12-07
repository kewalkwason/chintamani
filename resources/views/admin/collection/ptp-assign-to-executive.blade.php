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
                           <h4> PTP Assign to Executive</h4>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                           <li class="breadcrumb-item" style="float: left;">
                              <a href="#!">Home</a>
                           </li>
                           <li class="breadcrumb-item" style="float: left;">
                              <a href="#!"> PTP Assign to Executive</a>
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
                                       <div class="col-md-3">
                                          <label for="input1" class="form-label">Start Date</label>
                                          <input class="form-control" type="date" name="">
                                       </div>
                                       <div class="col-md-3">
                                          <label for="input1" class="form-label">End Date</label>
                                          <input class="form-control" type="date" name="">
                                       </div>
                                       <div class="col-md-3">
                                          <label for="input1" class="form-label">Executive </label>
                                          <select class="form-control">
                                             <option>Select an option</option>
                                          </select>
                                       </div>

                                       <div class="col-md-3">
                                          <br> <br>
                                          <button class="btn btn-danger">Search Here...</button>
                                       </div>

                                    </form>
                                 </div>
                              </div>
                              <div>
                                 <div>
                                    <div class="table-responsive">
                                       <table id="dom-table" class="table table-striped table-bordered nowrap">
                                          <thead class="bg-primary text-white">
                                             <tr>
                                                <th>S.no</th>
                                                <th>ECS Date</th>
                                                <th>Next Date </th>
                                                <th>Account Number </th>
                                                <th>Name </th>
                                                <th>Opening Balance </th>
                                                <th>Due Amount </th>
                                                <th>Recevied EMI </th>
                                                <th>Period Balance</th>
                                                <th>Balance</th>
                                                <th>Bucket</th>
                                                <th>Recivied Date</th>
                                                <th>Status</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Execuitive Name</th>
                                                <th>Assign Executive</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td>
                                                   <select class="form-control">
                                                      <option>Select</option>
                                                   </select>
                                                </td>
                                                <td>
                                                   <button class="btn btn-danger">Delete</button>
                                                </td>

                                             </tr>

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
         </div>
      </div>
      <div id="styleSelector"></div>
   </div>
</div>
@endsection