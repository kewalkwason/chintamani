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
                                    <h4>Add Faq</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item" style="float: left;"> <a href="#!">Home</a> </li>
                                    <li class="breadcrumb-item" style="float: left;"> <a href="#!">Form For Adding Staff</a> </li>
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
                                                <form class="row g-3" method="post" enctype="multipart/form-data" action="{{route('faq.store')}}">
                                                    @csrf
                                                    <input type="hidden" name="status" value="8">
                                                    <div class="col-md-12">
                                                        <label for="input2" class="form-label">Heading</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="heading" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="input2" class="form-label">Image</label>
                                                        <input type="file" name="image" class="form-control shadow" id="exampleInputName">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName">Description</label>
                                                                <textarea name="content" id="description" class="form-control shadow" value="{{old('content')}}"></textarea>
                                                                <span class="text-danger">{!! $errors->has('content') ? $errors->first('content') : '' !!}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <button type="submit" class="btn btn-primary aasUsrr">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="faq_data" class="table table-striped table-bordered ">
                                                        <thead class="bg-primary text-white">
                                                            <tr>
                                                                <th>Sl No</th>
                                                                <th>Heading</th>
                                                                <th>Image</th>
                                                                <th>Description</th>
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
    var list = '{{ route("faq") }}';
    var titleName = 'faq List';
    $(document).ready(function() {
        table_schedule(list);
    });

    function table_schedule(list) {
        var tableid = 'faq_data';
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
            "columns": [
                {
                    "data": "id",
                    "orderable": false
                },
                {
                    "data": "heading"
                },
                {
                    "data": "image"
                },
                {
                    "data": "content"
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
@endsection