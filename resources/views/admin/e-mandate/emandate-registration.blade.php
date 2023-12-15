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
                           <h4>All Registered Mandate</h4>
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
                              <a href="#!"> All Registered Mandate</a>
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
                                       <div class="col-md-2">
                                          <label for="input1" class="form-label">Registration filter by EMI Date :</label>
                                          <select name="emi_date" id="emi_date" class="form-control">
                                             <option value="">Select</option>
                                             <option value="2">2</option>
                                             <option value="9">9</option>
                                             <option value="15">15</option>
                                             <option value="25">25</option>
                                          </select>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="mts100s"><br/>
                                             <button type="button" id="filterButton" class="btn btn-dark px-5">Filter</button>
                                          </div>
                                       </div>

                                    </form>
                                 </div>
                              </div>
                              <hr>

                              <div>
                                 <div>
                                    <div class="table-responsive">
                                       <table id="table_data" class="table wtHolder table-striped table-bordered nowrap">
                                          <thead class="bg-primary text-white">
                                             <tr>
                                                <th>S.no</th>
                                                <th>Loan Number</th>
                                                <th>Type</th>
                                                <th>User Name</th>
                                                <th>Phone Number</th>
                                                <th>EMI (Every Month)</th>
                                                <th>Status </th>
                                                <th>UMRN No </th>
                                                <th>Bank Name </th>
                                                <th>Loan Amount </th>
                                                <th>EMI Amount (minimum) </th>
                                                <th>EMI Amount (maximum) </th>
                                                <th>Is Reg. Verified </th>
                                                <th>Date/Time </th>
                                                <th>Is Active Schedule </th>
                                                <th>Manage </th>
                                                <th>Action </th>
                                             </tr>
                                          </thead>
                                          <tbody>

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

   <div class="modal fade" id="exampleManage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Manage Mandate Registered Fields</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form method="post">
                  <div class="form-group">
                     <input type="hidden" name="customerid" id="customerid">
                     <input type="hidden" name="old_loan_number" id="old_loan_number" value="ABHISHEKKHANDPUR1122">
                     <label>Minimum EMI Amount</label>
                     <input type="text" name="minimum_emi_amount" id="minimum_emi_amount" class="form-control" required="">
                  </div>
                  <div class="form-group">
                     <label>Maximum EMI Amount</label>
                     <input type="text" name="maximum_emi_amount" id="maximum_emi_amount" class="form-control" required="">
                  </div>
                  <div class="form-group">
                     <label>Schedule Status</label>
                     <select class="form-control" name="schedule_status" id="schedule_status" required="">
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>EMI Date <small>(Every Month)</small></label>
                     <input type="text" name="emi_date_new" id="emi_date_new" class="form-control" required="">
                  </div>
                  <div class="form-group">
                     <label>Loan Number</label>
                     <input type="text" name="loan_number_new" id="loan_number_new" class="form-control" required="">
                  </div>
               </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
   </div>


   <script>
      $(document).ready(function() {
         table_schedule();
         $('#filterButton').on('click', function() {
            table_schedule();
         });

      });

      var list = '{{ route("emandate.registration") }}';
      var titleName = 'All Registered Mandate';
      $(document).ready(function() {
         table_schedule(list);
      });

      function table_schedule(list) {
         var tableid = 'table_data';
         var table = $('#' + tableid).DataTable({
            'responsive': true, // Table pagination
            "processing": true,
            "serverSide": true,
            "bDestroy": true,
            "bLengthChange": false,
            // 'dom': 'lBfrtip', // Bottom left status text
            "bAutoWidth": false,
            "bScrollCollapse": true,
            "bFilter": false,
            "order": [
               [0, "desc"]
            ],
            "ajax": {
               "url": list,
               "type": "GET",
               'dataType': "json",
               data: function(d) {
                  d._token = "{{ csrf_token() }}";
                  d.level = 1;
                  d.emi_date = $('#emi_date').val();
               },
            },
            "columns": [{
                  "data": "id",
                  "orderable": false
               },
               {
                  "data": "user_id"
               },
               {
                  "data": "registration_type"
               },
               {
                  "data": "user_name"
               },
               {
                  "data": "phone"
               },
               {
                  "data": "emi_date"
               },
               {
                  "data": "status"
               },
               {
                  "data": "mandate_registered_response"
               },
               {
                  "data": "bank_name"
               },
               {
                  "data": "amount"
               },
               {
                  "data": "emi_amount"
               },
               {
                  "data": "max_emi_amount"
               },
               {
                  "data": "is_mandate_verified"
               },
               {
                  "data": "date_created"
               },
               {
                  "data": "is_active"
               },
               {
                  "data": "manage_emi"
               },
               {
                  "data": "action"
               }

            ],
            'columnDefs': [{
               orderable: false
            }],
            fnDrawCallback: function(oSettings) {
               var totalPages = this.api().page.info().pages;
               if (totalPages == 1) {
                  jQuery('.dataTables_paginate').hide();
               } else {
                  jQuery('.dataTables_paginate').show();
               }
            }

         });

      }
   </script>
   <script>
      ClassicEditor
         .create(document.querySelector('#description'))
         .catch(error => {
            console.error(error);
         });
   </script>
   @endsection