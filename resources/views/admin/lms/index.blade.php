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
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div>
                                    <div class="items" data-group="test">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="example" class="table table-striped table-bordered ">
                                                        <thead class="bg-primary text-white">
                                                            <tr>
                                                                <th>Sl No</th>
                                                                <th>Name</th>
                                                                <th>Mobile</th>
                                                                <th>Email</th>
                                                                <th>City</th>
                                                                <th>Delay Days</th>
                                                                <th>Remark</th>
                                                                <th>Assigned To</th>
                                                                <th>Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($webenquiry as $key => $value)
                                                            <tr>
                                                                <td>{{++$key}}</td>
                                                                <td>{{$value->name}}</td>
                                                                <td>{{$value->phone}}</td>
                                                                <td>{{$value->email}}</td>
                                                                <td>{{$value->address_city}}</td>
                                                                <td>{{$value->address_city}}</td>
                                                                <td>{{$value->remark}}</td>
                                                                <td>{{$value->assign_name}}</td>
                                                                <td>{{$value->created_at}}</td>
                                                                <td class="text-right py-0 align-middle">
                                                                    <div class="btn-group btn-group-sm">
                                                                        <a href="#" class="btn btn-warning deleteAsk mgnStyle ">view</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach
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
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection