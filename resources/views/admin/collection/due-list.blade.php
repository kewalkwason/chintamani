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
                           <h4> Due List</h4>
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
                              <a href="#!"> Due List</a>
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

                              <div>
                                 <div>
                                    <div class="table-responsive">
                                       <table id="dom-table" class="table table-striped table-bordered nowrap">
                                          <thead class="bg-primary text-white">
                                             <tr>

                                                <th>S.no</th>
                                                <th>Order ID</th>
                                                <th>Loan ID</th>
                                                <th>Source </th>
                                                <th>Name </th>
                                                <th>Address </th>
                                                <th>State </th>
                                                <th>City </th>
                                                <th>Disbused date </th>
                                                <th>Due date </th>
                                                <th>Phone Number </th>
                                                <th>Loan Amount </th>
                                                <th>Intrest </th>
                                                <th>Installment </th>
                                                <th>Recevied </th>
                                                <th>Balance </th>
                                                <th>Delay Intt </th>
                                                <th>Bounce </th>
                                                <th>GST </th>
                                                <th>Total Balance </th>
                                                <th>Delay Days </th>
                                                <th>Action </th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>

                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td> <a class="btn btn-danger btn-sm" href="#!" data-toggle="modal" data-target="#examplemakPayn">Make Payment</a> </td>

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