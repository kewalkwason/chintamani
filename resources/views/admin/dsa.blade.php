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
                           <h4>DSA</h4>
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
                              <a href="#!">DSA</a>
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
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Email ID</th>
                                                <th>Address</th>
                                                <th>Website </th>
                                                <th>Pan Card </th>
                                                <th>GST </th>
                                                <th>Status </th>
                                                <th>Action </th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>01</td>
                                                <td>Bikash Sharma</td>
                                                <td>+91-00000-0000</td>
                                                <td> bikash@gmail.com</td>
                                                <td> Noida sector 63 A</td>
                                                <td> <a href="#!" target="_blank">www.bikash.com</a> </td>
                                                <td> er090988367</td>
                                                <td> 637379892</td>
                                                <td> Verified</td>


                                                <td><a href="#!" class="btn btn-sm btn-danger"> Accept</a>
                                                   <a href="#!" class="btn btn-sm btn-primary"> Reject</a>
                                                   <a href="edit-das.php" class="btn btn-sm btn-success"> Edit</a>
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