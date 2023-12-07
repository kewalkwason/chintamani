@extends('frontend.layouts.master')
@section('content')
<section id="cta-section bgerasn">
    <div class="styl__pading">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-4  ">
                    <!-- <div class="cta-content-wrap">
                           <div class="  app-download-content">  
                              <img class="eee__card" src="images/quickEnq.png">
                           </div>
                        </div> -->
                    <div class="sidebar">
                        <aside id="widget-subscribe" class="widget widget_subscribe">
                            <h5 class="widget-title  ">Pay with UPI. <span></span></h5>
                            <img class="eee__card" src="{{asset('frontend/images/code.png')}}">
                        </aside>
                    </div>
                </div>
                <div class="av-column-4  ">
                    <div class="sidebar">
                        <aside id="widget-subscribe" class="widget widget_subscribe">
                            <h5 class="widget-title  ">Pay With RazorPay. <span></span></h5>
                            <form role="email" method="get" class="mail-form" action="#">
                                <div>
                                    <div class="av-columns-area">
                                        <div class="av-column-12">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Full Name *" name="mail" id="mail">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Email Address *" name="mail" id="mail">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Phone Number *" name="mail" id="mail">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Repayment amount *" name="mail" id="mail">
                                        </div>
                                    </div>
                                    <button class="btn cancelCssSty " aria-label="Search">Pay With Razorpay</button>
                                </div>
                            </form>
                        </aside>
                    </div>
                </div>
                <div class="av-column-4  ">
                    <div class="sidebar">
                        <aside id="widget-subscribe" class="widget widget_subscribe">
                            <h5 class="widget-title  ">Pay with Pay-U-Money <span></span></h5>
                            <form role="email" method="get" class="mail-form" action="#">
                                <div>
                                    <div class="av-columns-area">
                                        <div class="av-column-12">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Enter Payble Amount*" name="mail" id="mail">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Remark*" name="mail" id="mail">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Full Name (Only alphabets)*" name="mail" id="mail">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Mobile Number(10 digits)*" name="mail" id="mail">
                                            <input type="email" class="mail-field form-control firim__css " placeholder="Email Address*" name="mail" id="mail">
                                            <input type="email" class="mail-field form-control firim__css " placeholder=" Address*" name="mail" id="mail">
                                        </div>
                                    </div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <button class="btn cancelCssSty " aria-label="Search">Submit Now</button>
                                        </div>
                                        <div class="av-column-6">
                                            <button class="btn   cancelCss" aria-label="Search">Cancel <i class="fa fa-times" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
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