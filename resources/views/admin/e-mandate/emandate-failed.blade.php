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
                           <h4>All Failed Mandate List</h4>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                           <li class="breadcrumb-item" style="float: left;">
                              <a href="">Home</a>
                           </li>
                           <li class="breadcrumb-item" style="float: left;">
                              <a href="#!"> All Failed Mandate List</a>
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
                                                <th>EMI Amount (minimum) </th>
                                                <th>EMI Amount (maximum) </th>
                                                <th>Is Reg. Verified </th>
                                                <th>Date/Time </th>
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


   <script>
      $(document).ready(function() {
         table_schedule();
         $('#filterButton').on('click', function() {
            table_schedule();
         });

      });

      var list = '{{ route("emandate.failed") }}';
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
                  d.start_date = $('#start_date').val();
                  d.end_date = $('#end_date').val();
                  d.executive_id = $('#executive_id').val();
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
                  "data": "emi_amount"
               },
               {
                  "data": "max_emi_amount"
               },
               {
                  "data": "deduction_amount"
               },
               {
                  "data": "date_created"
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