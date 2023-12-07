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
                                    <h4>Add Staff</h4>
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
                                        <a href="#!">Form For Adding Staff</a>
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
                                                <form action="{{route('users-save')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <input type="hidden" name="id" value="{{$user->id}}">
                                                        <div class="col-md-4">
                                                            <label for="input1" class="form-label">Employee ID * :</label>
                                                            <input type="text" class="form-control shadow" name="employee_id" id="input1" value="{{$user->employee_id}}">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Select Role *</label>
                                                            <select class="form-control shadow">
                                                                @foreach($role as $values)
                                                                <option value="{{$values->id}}">{{$values->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">First Name *</label>
                                                            <input type="text" name="first_name" class="form-control shadow" id="exampleInputName" placeholder="Enter First Name" value="{{$user->first_name}}">
                                                            <span class="text-danger">{!! $errors->has('first_name') ? $errors->first('first_name') : '' !!}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Last Name *</label>
                                                            <input type="text" name="last_name" class="form-control shadow" id="exampleInputName" placeholder="Enter Last Name" value="{{$user->last_name}}">
                                                            <span class="text-danger">{!! $errors->has('last_name') ? $errors->first('last_name') : '' !!}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Phone * </label>
                                                            <input type="taxt" name="phone" class="form-control shadow" maxlength="10" id="exampleInputPhone" placeholder="Enter Phone" value="{{$user->phone}}">
                                                            <span class="text-danger">{!! $errors->has('phone') ? $errors->first('phone') : '' !!}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Email * </label>
                                                            <input type="email" name="email" class="form-control shadow" id="exampleInputEmail" placeholder="Enter Email" value="{{$user->email}}">
                                                            <span class="text-danger">{!! $errors->has('email') ? $errors->first('email') : '' !!}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Password </label>
                                                            <input type="password" name="password" class="form-control shadow" id="exampleInputName" value="{{$user->password}}">
                                                            <span class="text-danger">{!! $errors->has('password') ? $errors->first('password') : '' !!}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Confirm Password</label>
                                                            <input type="password" name="password_confirmation" class="form-control shadow" id="exampleInputName" value="{{$user->password}}">
                                                            <span class="text-danger">{!! $errors->has('password_confirmation') ? $errors->first('password_confirmation') : '' !!}</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Status</label>
                                                            <select name="status" class="form-control shadow">
                                                                <option value="">-select here-</option>
                                                                <option value="1">Active</option>
                                                                <option value="2">Deactive</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="input2" class="form-label">Designation *</label>
                                                            <textarea class="form-control shadow" id="message" name="address" rows="4" >{{$user->address}}</textarea>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-dark">Submit Here</button>
                                                </form>
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
@endsection