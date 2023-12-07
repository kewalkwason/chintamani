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
                                    <h4>Disbursed Loans</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item" style="float: left;"> <a href="#!">Home</a> </li>
                                    <li class="breadcrumb-item" style="float: left;"> <a href="#!">Disbursed Loans</a> </li>
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
                                                        <label for="input1" class="form-label">Start Date</label>
                                                        <input type="date" class="form-control shadow" name="start_date" id="start_date">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="input2" class="form-label">End Date</label>
                                                        <input type="date" class="form-control shadow" id="end_date" name="end_date">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="input2" class="form-label">Select Executive</label>
                                                        <select name="executive_id" class="form-control">
                                                            <option value="all">All</option>
                                                            @foreach($users as $value)
                                                            <option value="{{$value->id}}">{{$value->first_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3" style="margin-top: 37px;">
                                                        <button type="button" id="filterButton" class="btn btn-primary aasUsrr">Filter</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="table_data" class="table table-striped table-bordered ">
                                                        <thead class="bg-primary text-white">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Order Id</th>
                                                                <th>Source</th>
                                                                <th>DSA Name</th>
                                                                <th>Name</th>
                                                                <th>Phone</th>
                                                                <th>Salary</th>
                                                                <th>City</th>
                                                                <th>Company Name</th>
                                                                <th>Sanctioned By</th>
                                                                <th>Disbursed Date</th>
                                                                <th>Disbursed By</th>
                                                                <th>Action</th>
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
    </div>
</div>
<script>
    $(document).ready(function() {
        table_schedule();
        $('#filterButton').on('click', function() {
            table_schedule();
        });

    });

    var list = '{{ route("disbursedloans.loan") }}';
    var titleName = 'Disbursed Loans';
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
                    "data": "order_id"
                },
                {
                    "data": "type"
                },
                {
                    "data": "dsa_name"
                },
                {
                    "data": "name"
                },
                {
                    "data": "phone_no"
                },
                {
                    "data": "take_home_salary"
                },
                {
                    "data": "address_city"
                },
                {
                    "data": "company_name"
                },
                {
                    "data": "sanctioned_by"
                },               
                {
                    "data": "applied_date"
                },
                {
                    "data": "assigned_to"
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