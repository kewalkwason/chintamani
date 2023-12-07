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
                                    <h4>Verification List</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item" style="float: left;"> <a href="#!">Home</a> </li>
                                    <li class="breadcrumb-item" style="float: left;"> <a href="#!">Verification List</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function makeSlug(_this) {
                        let slug = (_this.value).toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                        $('#slug').val(slug);
                    }
                </script>
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
                                                        <label for="input1" class="form-label">Assign To :</label>
                                                        <select onchange="leaveChangeExeName(this.value)" class="form-control">
                                                            <option value="" selected="selected">All</option>
                                                            <option value="4">Vijay</option>
                                                            <option value="6">Gaurav</option>
                                                            <option value="7">Varsha</option>
                                                            <option value="9">Chamma</option>
                                                            <option value="10">Poonam</option>
                                                            <option value="12">Prashant</option>
                                                            <option value="14">Yashika</option>
                                                            <option value="16">Prashant</option>
                                                            <option value="22">Shalu</option>
                                                            <option value="23">Anjali</option>
                                                            <option value="24">Tanya</option>
                                                            <option value="25">Rupa</option>
                                                            <option value="26">Ruchi</option>
                                                            <option value="28">Kumari </option>
                                                            <option value="32">Ritu</option>
                                                            <option value="34">Sanjana</option>
                                                            <option value="35">Prerna </option>
                                                            <option value="36">Salu</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="input1" class="form-label">Start Date :</label>
                                                        <input type="date" class="form-control shadow" id="input1" placeholder="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="input1" class="form-label">End Date :</label>
                                                        <input type="date" class="form-control shadow" id="input1" placeholder="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="input1" class="form-label">Select Executive :</label>
                                                        <select name="executive_id" class="form-control">
                                                            <option value="all">All</option>
                                                            <option value="4">Vijay</option>
                                                            <option value="6">Gaurav</option>
                                                            <option value="7">Varsha</option>
                                                            <option value="9">Chamma</option>
                                                            <option value="10">Poonam</option>
                                                            <option value="12">Prashant</option>
                                                            <option value="14">Yashika</option>
                                                            <option value="16">Prashant</option>
                                                            <option value="22">Shalu</option>
                                                            <option value="23">Anjali</option>
                                                            <option value="24">Tanya</option>
                                                            <option value="25">Rupa</option>
                                                            <option value="26">Ruchi</option>
                                                            <option value="28">Kumari </option>
                                                            <option value="32">Ritu</option>
                                                            <option value="34">Sanjana</option>
                                                            <option value="35">Prerna </option>
                                                            <option value="36">Salu</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mts100s">
                                                            <button type="button" class="btn btn-dark px-5">Filter</button>
                                                        </div>
                                                    </div>


                                                </form>

                                            </div>
                                        </div>
                                        <div>
                                            <form class="row">
                                                <div class="col-md-12">
                                                    <a class="btn btn-primary btn-outline-primary" href="#!">Filter With Guarantor <i class="fa fa-plus"></i> </a> &nbsp;
                                                    <a class="btn btn-danger btn-outline-danger" href="#!">Filter Without Guarantor <i class="fa fa-minus"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                        <hr>

                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="verification_data" class="table table-striped table-bordered ">
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
                                                                <th>Delay Days</th>
                                                                <th>Apply Date</th>
                                                                <th>Assigned To</th>
                                                                <th>Verified By</th>
                                                                <th>Manage</th>
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

                    <div class="tab-row">
                        <!-- begin col-6 -->
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs notification">
                                <li class="nav-items">
                                    <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                                        <span class="d-sm-none">SMS</span>
                                        <span class="d-sm-block d-none">SMS Section</span>
                                    </a>
                                </li>
                                <li class="nav-items">
                                    <a href="#default-tab-2" data-toggle="tab" class="nav-link">
                                        <span class="d-sm-none">Email</span>
                                        <span class="d-sm-block d-none">Email Section</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="default-tab-1">
                                    <form action="#" id="RingCustomersmsForm">
                                        <div class="tab-row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select class="form-control border-input" name="smstype" id="smstype" onchange="selectmsgType(this)">
                                                        <option value="">--Select an option--</option>
                                                        <!-- 1707164034891305017 -->
                                                        <option value="1707166755915758378">Promotion Message</option>
                                                        <!-- 1707164015083128933 -->
                                                        <!-- 1707166738115898113 -->
                                                        <option value="1707166738115898113">Reminder messages</option>
                                                    </select>
                                                    <label style="float:left;">Message</label>
                                                    <textarea type="text" class="form-control border-input" placeholder="Message" name="text" id="text" value="" autofocus></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-fill btn-wd">Send</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="default-tab-2">
                                    <form action="#" id="RingCustomerMailForm">
                                        <div class="tab-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="float:left;">Subject</label>
                                                    <input type="text" class="form-control border-input" placeholder="Subject" name="subject" id="subject" value="" required="required" autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label style="float:left;">E-mail</label>
                                                    <textarea type="text" class="form-control border-input" placeholder="Message" name="mailBody" id="mailBody" value="" required="required" autofocus></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-fill btn-wd">Send</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col-6 -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function selectmsgType(msgType) {
        var msg_type = msgType.value;
        console.log(msgType.value);
        if (msg_type == '1707166755915758378') {
            $message = 'Dear Customer, Thanks for showing Interest in Chintamani Finlease Ltd. Kindly apply online application by clicking on the link now: www.chintamanifinlease.com/applyloan and get loan in short period of time. For more Details Call us: +91 9212132955 Team Chintamani Finlease Ltd';
        } else {
            $message = 'Dear Customer, We have received your application for personal loan but your are unable to receive our calls. Please complete your online application process by clicking on the link now:www.chintamanifinlease.com/applyloan and get loan in short period of time. For more Details Call us: +91 9212132955 Team Chintamani Finlease Ltd';
        }
        $("[name=text]").val($message);
    }
</script>
<script>
    var list = '{{ route("verification.loan") }}';
    var titleName = 'Verification List';
    $(document).ready(function() {
        table_schedule(list);
    });

    function table_schedule(list) {
        var tableid = 'verification_data';
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
                    "data": "day_month"
                },
                {
                    "data": "applied_date"
                },
                {
                    "data": "assigned_to"
                },
                {
                    "data": "verify_by"
                },
                {
                    "data": "manage"
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


    $(document).on('click', '.deletedata', function() {
        var id = $(this).attr('data-value');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "{{ route('verificationloan.delete') }}",
                    method: "POST",
                    dataType: 'json',
                    data: {
                        'id': id,
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $('.loader-bg').show();
                    },
                    complete: function() {
                        $('.loader-bg').hide();
                    },
                    success: function(result) {
                        table_schedule();
                        Swal.fire('Deleted!', 'Record Deleted Successfully..', 'success');
                    }
                });
            }
        });
    });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection