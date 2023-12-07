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
                                    <h4>Edit Get Free Score</h4>
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
                                        <a href="#!">Edit Get Free Score</a>
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
                                                <form class="row g-3" method="post" enctype="multipart/form-data" action="{{route('get-free-score.update',$data->id)}}">
                                                    @csrf
                                                    {{ method_field('post') }}
                                                    <input type="hidden" name="status" value="7">
                                                    <div class="col-md-12">
                                                        <label for="input2" class="form-label">Heading</label>
                                                        <input type="text" class="form-control shadow" id="input2" name="heading" value="{{$data->heading}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="input2" class="form-label">Image</label>
                                                        <input type="file" name="image" class="form-control shadow" id="exampleInputName" value="{{$data->image}}">
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