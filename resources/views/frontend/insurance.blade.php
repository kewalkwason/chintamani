@extends('frontend.layouts.master')
@section('content')
<section id="funfact-section" class="funfact-section av-py-default funfact-home shapes-section" data-roller="start:0.5" style="    background: #EFF3F8;">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="heading-default heading-white   wow fadeInUp">
                    <h3>Insurance </h3>
                </div>
                <div class="av-columns-area funfact-wrapper">
                    @foreach($complete as $insurance)
                    <div class="av-column-3 av-sm-column-6">
                        <div class="funfact-item insurCss">
                            <img class="insuimgCss" src="{{asset('uploads/article')}}/{{$insurance->image}}">
                            <h5> <a class="instxtCss" href="{{route('insurancedetails', encrypt($insurance->id))}}">{{$insurance->title}}</a> </h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection