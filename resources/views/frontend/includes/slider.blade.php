<?php

use App\Models\Slider;
?>
@php
$sliders = Slider::get();
@endphp
<section id="slider-section" class="slider-wrapper bgs__Less">
    <div class="main-slider owl-carousel owl-theme">
        @foreach($sliders as $value)
        <div class="item">
            <img src="{{asset('uploads/article')}}/{{$value->slider_image}}" alt="slideitem">
            <div class="theme-slider">
                <div class="theme-table">
                    <div class="theme-table-cell">
                        <div class="av-container">
                            <div class="theme-content text-right wow zoomIn">
                                <div class="banner-form mobile__none hhis__box focus-box slider__form">
                                    <h2 class="txt-bold mg-0 txt-white text-center">{{$value->title}}</h2>
                                    <form class="signup-banner-form" id="signup-banner-form" novalidate="novalidate">
                                        <input type="hidden" name="" value=""><input type="hidden" name="" value=""><input type="hidden" name="" value="home"><input type="hidden" name="" value=""><input type="hidden" name="" value=""><input type="hidden" name="" value="">
                                        <div class="text-center">
                                            <p class="mg-tp-0 txt-medium font-16 txt-green home19-font20">{{$value->slider_tags}}</p>
                                        </div>
                                        <div class="form-group mgtp2o pdd-sty1">
                                            <div class="input-group"> <input class="text-center number-only-field form-control" type="tel" name="" placeholder="+91- Enter Mobile Number" maxlength="10"></div>
                                        </div>
                                        <div class="text-center pdd-sty2"><input class="btn   w-100 bgs__chacek" type="submit" value="Check FREE Credit Score"></div>
                                        <div class="text-center mg-tp-10">
                                            <p class="have__unq">Have an invite code? <a class="invite-code-question" href="#!">click here<span class="mg-lt-5 glyphicon glyphicon-question-sign"></span></a></p>
                                        </div>
                                        <div class="checkbox-green"><input class="styled-input tc-checkbox-consent" id="style" type="checkbox" checked="" name="styled-input-tc"><label class="pd-lt-10 byclisk">By clicking 'Check FREE Credit Score', you agree to the <a class="black" href="#!"> Terms &amp; Conditions </a>and<a href="#!"> Privacy Policy</a></label></div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>