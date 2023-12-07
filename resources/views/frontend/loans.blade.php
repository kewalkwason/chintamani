@extends('frontend.layouts.master')
@section('content')
<section id="slider-section" class="slider-wrapper">
    <div class="main-slider owl-carousel owl-theme">
        <div class="item">
            <img class="sseCss" src="assets/images/slider/Instant-Professional-Loan.jpg" data-img-url="assets/images/slider/Instant-Professional-Loan.jpg" alt="slideitem">
            <div class="theme-slider">
                <div class="theme-table">
                    <div class="theme-table-cell">
                        <div class="av-container">
                            <div class="theme-content text-left">
                                <h3 data-animation="fadeInUp" data-delay="150ms">Loan up to 30 Lakhs | Attractive Interest Rate | Zero Foreclosure Charges</h3>
                                <h1 data-animation="fadeInLeft" data-delay="200ms">{{$subcategory->subcategory_name}}</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.includes.stickyloanservice')
<style type="text/css">
    .accordion .accordion-button {
        padding: 11px 10px !important;
    }

    .accordion .accordion-button {
        border-radius: inherit !important;
        border: inherit;
    }

    .accordion-content {
        box-shadow: inherit;
        border-radius: 0px !important;
        background: #fff;
        padding-top: 12px;
    }
</style>
<section id="post-section" class="post-section av-py-default">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-4 eightCss">
                @include('frontend.includes.relatedmenu')
            </div>
            <div class="av-column-8 eightCss">
                <section id="faq-section">
                    <div class="av-container">
                        <div>
                            <div>
                                <div class="av-columns-area faq-type">
                                    <div class="av-column-12 barhasCss faq-item technical">
                                        <div class="accordion accordion-default">
                                            <div class="accordion-title"><button type="button" class="accordion-button"><span class="text-white">Get a Professional Loan for CA at attractive interest rate</span> <i class="fa fa-plus"></i></button></div>
                                            <!-- accordion-content -->
                                            <div class="noneCCSs">
                                                <p>{!!@$pagedata->content!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection