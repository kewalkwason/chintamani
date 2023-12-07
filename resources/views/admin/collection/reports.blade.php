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
                           <h4>Collection Reports</h4>
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
                              <a href="#!">Collection Reports</a>
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
                                 <div class="card-body">
                                    <form class="row g-3">
                                       <div class="col-md-3">
                                          <label for="input1" class="form-label">Start date :</label>
                                          <input type="date" class="form-control shadow" id="input1" placeholder="">
                                       </div>
                                       <div class="col-md-3">
                                          <label for="input1" class="form-label">End Date :</label>
                                          <input type="date" class="form-control shadow" id="input1" placeholder="">
                                       </div>

                                       <div class="col-md-3">
                                          <label for="input2" class="form-label">Select Disbursed *</label>
                                          <select class="form-control shadow">
                                             <option>Select Disbursed</option>
                                          </select>
                                       </div>
                                       <div class="col-md-3">
                                          <label for="input2" class="form-label">Choose *</label>
                                          <select class="form-control shadow">
                                             <option>Bikash Sharma</option>
                                          </select>
                                       </div>




                                    </form>
                                    <br>
                                    <button type="button" class="btn btn-dark px-5 shadow-lg">Submit Here</button>
                                 </div>
                              </div>

                              <div class="table-responsive">
                                 <table class="table table-striped table-bordered nowrap">
                                    <thead class="bg-primary text-white">
                                       <tr>
                                          <th>Total Number of Loan</th>
                                          <th>Total Loan Amount</th>
                                          <th>Total Disbursed Amount</th>
                                          <th>Total Interest</th>
                                          <th>Total Processing Fees</th>
                                          <th>Total GST</th>
                                          <th>Total Fine</th>
                                          <th>Total Cheque Bounce Fine </th>
                                          <th>Total Collection Amount </th>
                                          <th>Total Received Amount</th>

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


                                       </tr>
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


                                       </tr>
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


                                       </tr>
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


                                       </tr>
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


                                       </tr>



                                    </tbody>
                                 </table>
                              </div>
                              <hr>
                              <br>

                              <div>
                                 <div>
                                    <div class="table-responsive">
                                       <table id="dom-table" class="table table-striped table-bordered nowrap">
                                          <thead class="bg-primary text-white">
                                             <tr>
                                                <th>S.no</th>
                                                <th>Order ID</th>
                                                <th>Account No.</th>
                                                <th>Unique ID</th>
                                                <th>Due Date</th>
                                                <th>Name</th>
                                                <th>Phone No</th>
                                                <th>Applied Date </th>
                                                <th>Disbursed Date </th>
                                                <th>Payment received </th>
                                                <th>Loan Amt</th>
                                                <th>Disbursed Amt</th>
                                                <th>Interest P.F</th>
                                                <th>GST</th>
                                                <th>Fine</th>
                                                <th>Bounce</th>
                                                <th>Bounce GST </th>
                                                <th>Visit Fee</th>
                                                <th>Visit Fee GST</th>
                                                <th>Collection</th>
                                                <th>Paid Amt</th>
                                                <th>Balance Status</th>
                                                <th>Collected By</th>
                                                <th>Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>01</td>
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
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> <a class="btn btn-sm btn-dark" href="#!">View</a> </td>

                                             </tr>
                                             <tr>
                                                <td>01</td>
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
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> <a class="btn btn-sm btn-dark" href="#!">View</a> </td>

                                             </tr>
                                             <tr>
                                                <td>01</td>
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
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> <a class="btn btn-sm btn-dark" href="#!">View</a> </td>

                                             </tr>
                                             <tr>
                                                <td>01</td>
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
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> <a class="btn btn-sm btn-dark" href="#!">View</a> </td>

                                             </tr>
                                             <tr>
                                                <td>01</td>
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
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> <a class="btn btn-sm btn-dark" href="#!">View</a> </td>

                                             </tr>
                                             <tr>
                                                <td>01</td>
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
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> <a class="btn btn-sm btn-dark" href="#!">View</a> </td>

                                             </tr>
                                             <tr>
                                                <td>01</td>
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
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> <a class="btn btn-sm btn-dark" href="#!">View</a> </td>

                                             </tr>
                                             <tr>
                                                <td>01</td>
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
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> <a class="btn btn-sm btn-dark" href="#!">View</a> </td>

                                             </tr>
                                             <tr>
                                                <td>01</td>
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
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> <a class="btn btn-sm btn-dark" href="#!">View</a> </td>

                                             </tr>
                                             <tr>
                                                <td>01</td>
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
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td> <a class="btn btn-sm btn-dark" href="#!">View</a> </td>

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