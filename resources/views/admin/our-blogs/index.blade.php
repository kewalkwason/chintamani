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
                                    <h4>Add Our Blogs</h4>
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
                                                <form class="row g-3" method="post" enctype="multipart/form-data" action="{{route('our-blogs.store')}}">
                                                    @csrf
                                                    <input type="hidden" name="status" value="2">
                                                    <div class="col-md-4">
                                                        <label for="input1" class="form-label">Slug Name</label>
                                                        <input type="text" class="form-control shadow" id="input1" id="exampleInputName" onchange="makeSlug(this)">
                                                    </div>
                                                    <input type="hidden" class="form-control shadow" id="slug" name="slug" placeholder="Slug here" value="{{ old('slug') }}">
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Meta Title</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="meta_title" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Meta Keywords</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="meta_keywords" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Tags</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="tags" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Heading</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="title" placeholder=" ">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Image</label>
                                                        <input type="file" name="image" class="form-control shadow" id="exampleInputName" placeholder="Enter Name" value="{{old('slider_image')}}">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputName">Meta Description</label>
                                                            <textarea name="meta_description" class="form-control shadow" value="{{old('meta_description')}}"></textarea>
                                                            <span class="text-danger">{!! $errors->has('meta_description') ? $errors->first('meta_description') : '' !!}</span>
                                                        </div>
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
                                                    <table id="example" class="table table-striped table-bordered ">
                                                        <thead class="bg-primary text-white">
                                                            <tr>
                                                                <th>Sl No</th>
                                                                <th>Meta Title</th>
                                                                <th>Meta Keywords</th>
                                                                <th>Meta Description</th>
                                                                <th>Heading</th>
                                                                <th>Content</th>
                                                                <th>Image</th>
                                                                <th>Tags</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($complete as $key => $value)
                                                            <tr>
                                                                <td>{{++$key}}</td>
                                                                <td>{{$value->meta_title}}</td>
                                                                <td>{{$value->meta_keywords}}</td>
                                                                <td>{{$value->meta_description}}</td>
                                                                <td>{{$value->title}}</td>
                                                                <td>{{$value->content}}</td>
                                                                <td><img src="{{asset('uploads/article')}}/{{$value->image}}" style="width: 250px; height: 100%;" /></td>
                                                                <td>{{$value->tags}}</td>
                                                                <td class="text-right py-0 align-middle">
                                                                    <div class="btn-group btn-group-sm">
                                                                        <a href="{{ route('our-blogs.edit',$value->id) }}" class="btn btn-warning deleteAsk mgnStyle ">Edit</a>
                                                                        <br>
                                                                        <br>
                                                                        <a href="{{ route('our-blogs.delete',$value->id) }}" class="btn btn-primary btn-sm deleteAsk">Delete</i></a>
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