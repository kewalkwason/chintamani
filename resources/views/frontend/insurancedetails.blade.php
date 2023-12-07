@extends('frontend.layouts.master')
@section('content')
<section id="funfact-section" class="  av-py-default funfact-home shapes-section" data-roller="start:0.5">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div>
                    <div>
                        <div class="white-box bg-white clearfix">
                            <div class="bank-container">
                                <div class="static-content">
                                    <p>{!!$insurancedetails->content!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection