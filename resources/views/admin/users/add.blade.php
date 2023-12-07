@extends('admin.layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Leads</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Leads</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- general form elements disabled -->
    <div class="card card-secondary cardBg p-0 shadow">
        <div class="card-header">
            <h1 class="card-title"><i>*Note fields Marked With "<strong> * </strong>" Are Mandatory</i></h1>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('users-save')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Name </label>
                                <input type="text" name="name" class="form-control shadow" id="exampleInputName" placeholder="Enter Name" value="{{old('name')}}">
                                <span class="text-danger">{!! $errors->has('name') ? $errors->first('name') : '' !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail">Email </label>
                                <input type="email" name="email" class="form-control shadow" id="exampleInputEmail" placeholder="Enter Email" value="{{old('email')}}">
                                <span class="text-danger">{!! $errors->has('email') ? $errors->first('email') : '' !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail">Mobile number </label>
                                <input type="taxt" name="phone" class="form-control shadow" maxlength="10" id="exampleInputPhone" placeholder="Enter Phone" value="{{old('phone')}}">
                                <span class="text-danger">{!! $errors->has('phone') ? $errors->first('phone') : '' !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword">Password </label>
                                <input type="password" name="password" class="form-control shadow" id="exampleInputName" placeholder="Enter Password">
                                <span class="text-danger">{!! $errors->has('password') ? $errors->first('password') : '' !!}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputConfirm">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control shadow" id="exampleInputName" placeholder="Confirm Password">
                                <span class="text-danger">{!! $errors->has('password_confirmation') ? $errors->first('password_confirmation') : '' !!}</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control shadow">
                                    <option value="">-select here-</option>
                                    <option value="1">Active</option>
                                    <option value="2">Deactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary aasUsrr">Add User</button>
            </form>

        </div>
    </div>
</section>
@endsection