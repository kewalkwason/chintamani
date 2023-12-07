@extends('admin.layouts.master')
@section('content')
<script>
    function makeSlug(_this) {
        let slug = (_this.value).toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        $('#slug').val(slug);
    }
</script>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Edit About</h4>
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
                                        <a href="#!">Edit About</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <a href="slider.php" class="btn btn-primary"> Go Back </a>
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
                                                <form class="row g-3" method="post" enctype="multipart/form-data" action="{{route('about.update',$data->id)}}">
                                                    @csrf
                                                    {{ method_field('post') }}
                                                    <div class="col-md-4">
                                                        <label for="input1" class="form-label">Slug Name</label>
                                                        <input type="text" class="form-control shadow" id="input1" onchange="makeSlug(this)" value="{{$data->slug}}">
                                                    </div>
                                                    <input type="hidden" class="form-control shadow" id="slug" name="slug" value="{{$data->slug}}">
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Meta Title</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="meta_title" value="{{$data->meta_title}}">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Meta Keywords</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="meta_keywords" value="{{$data->meta_keywords}}">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Tags</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="tags" value="{{$data->tags}}">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Heading</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="title" value="{{$data->title}}">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="input2" class="form-label">Image</label>
                                                        <input type="file" name="image" class="form-control shadow" id="exampleInputName" placeholder="Enter Name" value="{{old('image')}}">
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="exampleInputName">Meta Description</label>
                                                            <textarea name="meta_description" class="form-control shadow" value="{{old('meta_description')}}">{{$data->meta_description}}"</textarea>
                                                            <span class="text-danger">{!! $errors->has('meta_description') ? $errors->first('meta_description') : '' !!}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div>
                                                            <div class="form-group">
                                                                <label for="exampleInputName">Description</label>
                                                                <textarea name="content" id="description" class="form-control shadow">{{$data->content}}</textarea>
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