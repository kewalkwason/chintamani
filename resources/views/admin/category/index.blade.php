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
                                    <h4>Add Category</h4>
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
                                                <form class="row g-3" method="post" enctype="multipart/form-data" action="{{route('category.store')}}">
                                                    @csrf
                                                    <div class="col-md-6">
                                                        <label for="input1" class="form-label">Category Name</label>
                                                        <input type="text" class="form-control shadow" name="category_name" id="input1" id="exampleInputName">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="input2" class="form-label">Category Code</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="category_code" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="input2" class="form-label">Tags</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="tags" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="input1" class="form-label">Slug Name</label>
                                                        <input type="text" class="form-control shadow" id="input1" id="exampleInputName" onchange="makeSlug(this)">
                                                    </div>
                                                    <input type="hidden" class="form-control shadow" id="slug" name="slug_name" placeholder="Slug here" value="{{ old('slug_name') }}">
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
                                                                <th>Category Name</th>
                                                                <th>Category Code</th>
                                                                <th>Slug Name</th>
                                                                <th>Tags</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($complete as $key => $value)
                                                            <tr>
                                                                <td>{{++$key}}</td>
                                                                <td>{{$value->category_name}}</td>
                                                                <td>{{$value->category_code}}</td>
                                                                <td>{{$value->slug_name}}</td>
                                                                <td>{{$value->tags}}</td>
                                                                <td class="text-right py-0 align-middle">
                                                                    <div class="btn-group btn-group-sm">
                                                                        <a href="{{ route('category.edit',$value->id) }}" class="btn btn-warning deleteAsk mgnStyle ">Edit</a>
                                                                        <br>
                                                                        <br>
                                                                        <a href="{{ route('category.delete',$value->id) }}" class="btn btn-primary btn-sm deleteAsk">Delete</i></a>
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