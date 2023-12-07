@extends('frontend.layouts.master')
@section('content')
<section id="cta-section bgerasn">
    <div class="styl__pading">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-5  ">
                    <div class="cta-content-wrap">
                        <div class="  app-download-content">
                            <img class="eee__card" src="{{asset('frontend/images/userReg.png')}}">
                        </div>
                    </div>
                </div>
                <div class="av-column-7  ">
                    <div class="sidebar">
                        <aside id="widget-subscribe" class="widget widget_subscribe">
                            <h5 class="widget-title bigdas">User Registration <span></span></h5>
                            <form role="email" method="get" class="mail-form" action="#" style="background: #D5BD60;">
                                <div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <label>Username * </label>
                                            <input type="email" class="mail-field form-control firim__css labeCss" placeholder="Enter Name *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <label>User-email</label>
                                            <input type="email" class="mail-field form-control firim__css labeCss" placeholder="Enter Email Address" name="mail" id="mail">
                                        </div>
                                    </div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <label>Phone No</label>
                                            <input type="email" class="mail-field form-control firim__css labeCss" placeholder="Phone No. *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <label>Password</label>
                                            <input type="email" class="mail-field form-control firim__css labeCss" placeholder="Password *" name="mail" id="mail">
                                        </div>
                                    </div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <label>Website</label>
                                            <input type="email" class="mail-field form-control firim__css labeCss" placeholder="Your Website *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <label>Pan card</label>
                                            <input type="email" class="mail-field form-control firim__css labeCss" placeholder="Pan card *" name="mail" id="mail">
                                        </div>
                                    </div>
                                    <div class="av-columns-area">
                                        <div class="av-column-12">
                                            <label>GST</label>
                                            <input type="email" class="mail-field form-control firim__css labeCss" placeholder="Your GST *" name="mail" id="mail">
                                        </div>
                                    </div>
                                    <div class="av-columns-area">
                                        <div class="av-column-12">
                                            <label>Address</label>
                                            <input type="email" class="mail-field form-control firim__css labeCss" placeholder="Your Address *" name="mail" id="mail">
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