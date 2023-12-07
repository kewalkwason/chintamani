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
                  <h4>Add Roles</h4>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                  <li class="breadcrumb-item" style="float: left;"> <a href="#!">Home</a> </li>
                  <li class="breadcrumb-item" style="float: left;"> <a href="#!">Add Roles</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="items" data-group="test">
          <div class="container">
            <div class="main-body">
              <form action="{{route('roles-save')}}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                          <img src="{{asset('assets/images/usera.png')}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                          <div class="mt-3">
                            <h4>Add Role</h4>
                            <div class="col-md-12">
                              <input type="text" name="name" class="form-control shadow" id="exampleInputName" placeholder="Enter Name">
                            </div>
                            <div class="col-md-12">
                              <select name="status" style="margin-top: 11px;" class="form-control shadow">
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <div class="card shadow">
                      <div class="card-body">
                        <h4 class="mb-0">Module/Sub Module (Permissions)</h4>
                      </div>
                    </div>
                    @foreach($permissionGroup as $key => $value)
                    <div>
                      <div class="card glesCda">
                        <div class="card-body">
                          <h6 class="mb-0 text-uppercase">{{ucfirst($value->group_name)}}</h6>
                          <hr class="minusHrs">
                          <div class="d-flex align-items-center gap-3">
                            @foreach($permission as $key => $permissionValue)
                            @if($permissionValue->group_name == $value->group_name)
                            @php
                            $name = array();
                            $name = explode("-",$permissionValue->name);
                            @endphp
                            <div class="form-check form-switch">
                              <label class="form-check-label" for="flexSwitchCheckDefault1">{{ Form::checkbox('permission[]', $permissionValue->id, false, array('class' => 'name')) }}
                                {!! ucfirst($name[1]) !!}
                              </label>
                            </div>
                            @endif
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Role</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection