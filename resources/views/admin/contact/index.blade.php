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
                                    <h4>Add Contact</h4>
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
                                                <form class="row g-3" method="post" enctype="multipart/form-data" action="{{route('contact.store')}}">
                                                    @csrf
                                                    <div class="col-md-4">
                                                        <label for="input1" class="form-label">Phone</label>
                                                        <input type="text" class="form-control shadow" name="phone" id="input1" id="exampleInputName">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Email</label>
                                                        <input type="email" class="form-control shadow" id="input2" name="email" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Tags</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="tags" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Opening Hours</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="our_opening_hours" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Image</label>
                                                        <input type="file" name="image" class="form-control shadow" id="exampleInputName" placeholder="Enter Name">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName">Address</label>
                                                                <textarea name="address" id="description" class="form-control shadow" value="{{old('address')}}"></textarea>
                                                                <span class="text-danger">{!! $errors->has('address') ? $errors->first('address') : '' !!}</span>
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
                                                    <table id="example" class="table table-striped table-bordered ">
                                                        <thead class="bg-primary text-white">
                                                            <tr>
                                                                <th>Sl No</th>
                                                                <th>Phone</th>
                                                                <th>Email</th>
                                                                <th>Address</th>
                                                                <th>Opening Hours</th>
                                                                <th>Tags</th>
                                                                <th>Image</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($complete as $key => $value)
                                                            <tr>
                                                                <td>{{++$key}}</td>
                                                                <td>{{$value->phone}}</td>
                                                                <td>{{$value->email}}</td>
                                                                <td>{{$value->address}}</td>
                                                                <td>{{$value->our_opening_hours}}</td>
                                                                <td>{{$value->tags}}</td>
                                                                <td><img src="{{asset('uploads/article')}}/{{$value->image}}" style="width: 250px; height: 100%;" /></td>
                                                                <td class="text-right py-0 align-middle">
                                                                    <div class="btn-group btn-group-sm">
                                                                        <a href="{{ route('contact.edit',$value->id) }}" class="btn btn-warning deleteAsk mgnStyle ">Edit</a>
                                                                        <br>
                                                                        <br>
                                                                        <a href="{{ route('contact.delete',$value->id) }}" class="btn btn-primary btn-sm deleteAsk">Delete</i></a>
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