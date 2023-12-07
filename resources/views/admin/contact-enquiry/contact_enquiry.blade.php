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
                                    <h4>View Contact Enquiry</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item" style="float: left;"> <a href="#!">Home</a> </li>
                                    <li class="breadcrumb-item" style="float: left;"> <a href="#!">View Contact Enquiry</a> </li>
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
                                                <div class="table-responsive">
                                                    <table id="table_data" class="table table-striped table-bordered ">
                                                        <thead class="bg-primary text-white">
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Mobile</th>
                                                                <th>Subject</th>
                                                                <th>Area</th>
                                                                <th>Content</th>
                                                                <th>Date /Time</th>
                                                                <th>Tags</th>
                                                                <th>Status</th>
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
    var list = '{{ route("viewcontact.enquiry") }}';
    var titleName = 'View Contact Enquiry';
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
                },
            },
            "columns": [{
                    "data": "id",
                    "orderable": false
                },
                {
                    "data": "name"
                },
                {
                    "data": "email"
                },
                {
                    "data": "mobile"
                },
                {
                    "data": "subject"
                },
                {
                    "data": "area"
                },
                {
                    "data": "content"
                },
                {
                    "data": "created_at"
                },
                {
                    "data": "tags"
                },
                {
                    "data": "status"
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