@extends('frontend.layouts.master')
@section('content')
<section id="cta-section bgerasn">
    <div class="styl__pading">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-5  ">
                    <div class="cta-content-wrap">
                        <div class="  app-download-content">
                            <img class="eee__card" src="{{asset('frontend/images/quickEnq.png')}}">
                        </div>
                    </div>
                </div>
                <div class="av-column-7  ">
                    <div class="sidebar">
                        <aside id="widget-subscribe" class="widget widget_subscribe">
                            <h5 class="widget-title bigdas">Quick Enquiry <span></span></h5>
                            <form role="email" method="get" class="mail-form" action="#">

                                <div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Full Name *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Enter Email Address" name="mail" id="mail">
                                        </div>
                                    </div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Phone No. *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <select class="form-control  auusi__css">
                                                <option>Select area</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="av-columns-area">
                                        <div class="av-column-12">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Your Address *" name="mail" id="mail">
                                        </div>
                                    </div>



                                    <button role="button" type="submit" class="btn jjdu " aria-label="Search">Submit Now</button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection