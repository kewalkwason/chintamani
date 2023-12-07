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
                           <h4> PTP NPA</h4>
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
                              <a href="#!"> PTP NPA</a>
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
                                       <div class="col-md-6">
                                          <label for="input1" class="form-label">Import File :</label>
                                          <input class="form-control" type="file" name="">
                                       </div>

                                       <div class="col-md-4">
                                          <br> <br>
                                          <button class="btn btn-danger">Upload Here...</button>
                                       </div>
                                       <div class="col-md-12">
                                          <br> <br>
                                          <h5><strong>MANAGE NPA PTP</strong></h5>
                                          <hr>
                                          <ul>
                                             <li> <strong>PTP Date: - </strong> 09-11-2023</li>
                                             <li> <strong>Total PTP: - </strong> 92062479</li>
                                             <li> <strong>Received PTP: - </strong> 93942167.33</li>
                                             <li> <strong>Balance PTP: - </strong> 7564398.3</li>
                                          </ul>

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
                                                <th>Remarks</th>
                                                <th>Action</th>
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
                                                <td> <a class="btn btn-sm btn-primary" href="#!" data-toggle="modal" data-target="#exampleRemsk"> <i class="fa fa-pencil"></i> </a>

                                                   <a class="btn btn-sm btn-primary" href="#!" data-toggle="modal" data-target="#exampleMaBank"> <i class="fa fa-credit-card" aria-hidden="true"></i> </a>
                                                   <a class="btn btn-sm btn-primary" href="edit-ptp-user.php"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>
                                                </td>

                                                <td>
                                                   <a class="btn btn-sm btn-primary" href="#!"> Add <i class="fa fa-plus"></i></a>
                                                   <a class="btn btn-sm btn-primary" href="#!"> <i class="fa fa-plus"></i> Add PTP</a>
                                                   <a class="btn btn-sm btn-primary" href="#!"> <i class="fa fa-comment" aria-hidden="true"></i> </a>

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