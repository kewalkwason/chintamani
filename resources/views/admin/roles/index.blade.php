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
                  <h4>Add Roles </h4>
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
          <div class="card card-body">
            <form class="row">
              <div class="col-md-12">
                <div class="d-md-flex d-grid align-items-center gap-3">
                  @can('role-create')
                  <a href="{{route('roles-add')}}" class="btn btn-primary"><i class="fadeIn animated bx bx-plus"></i>
                    Add Roles +
                  </a>
                  @endcan
                </div>
              </div>
            </form>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered ">
                  <thead class="bg-primary text-white">
                    <tr>
                      <th>S/No</th>
                      <th>Name</span></th>
                      <th>Permission</th>
                      <th>Status</th>
                      <th class="text-right">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($role as $key => $value)
                    <tr>
                      <td>{{++$key}}</td>
                      <td>{{$value->name}}</td>
                      <td> <a href="{{route('roles-edit',$value->id)}}"> <strong>Permission</strong> </a> </td>
                      <td>
                        @if($value->status == 1)
                        <span class="badge badge-success" style="font-size: 18px;">Active</span>
                        @else
                        <span class="badge badge-danger" style="font-size: 18px;">DeActive</span>
                        @endif
                      </td>
                      <td class="text-right py-0 align-middle">
                        @can('role-delete')
                        <a class="btn btn-primary btn-sm" href="{{route('roles-delete',$value->id)}}">Delete</a>
                        @endcan
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
@endsection