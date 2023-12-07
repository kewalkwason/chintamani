@extends('frontend.layouts.master')
@section('content')
<section id="cta-section bgerasn">
    <div class="styl__pading">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-5  ">
                    <div class="cta-content-wrap">
                        <div class="  app-download-content">
                            <img class="eee__card" src="{{asset('frontend/images/emandatecard.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="av-column-7  ">
                    <div class="sidebar">
                        <aside id="widget-subscribe" class="widget widget_subscribe">
                            <h5 class="widget-title bigdas">Mandate Registration Form <span></span></h5>
                            <form role="email" method="get" class="mail-form" action="#">

                                <div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="Customer Name *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="Enter Email Address" name="mail" id="mail">
                                        </div>
                                    </div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="Phone No. *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="Loan Number (LAN) *" name="mail" id="mail">
                                        </div>
                                    </div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="Amount *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="EMI Amount (Minimum) *" name="mail" id="mail">
                                        </div>
                                    </div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="EMI Amount (Maximum) *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <select class="form-control  auusi__css">
                                                <option>Select amount type</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <select class="form-control  auusi__css">
                                                <option>Bank Name *</option>
                                            </select>
                                        </div>
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="Account Number *" name="mail" id="mail">
                                        </div>
                                    </div>

                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="IFSC Code *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="MICR Code *" name="mail" id="mail">
                                        </div>
                                    </div>

                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="Pan Number *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="Aadhar Number *" name="mail" id="mail">
                                        </div>
                                    </div>
                                    <div class="av-columns-area">
                                        <div class="av-column-6">
                                            <input type="email" class="mail-field form-control firim__css" placeholder="Start Date *" name="mail" id="mail">
                                        </div>
                                        <div class="av-column-6">
                                            <select class="form-control  auusi__css">
                                                <option>EMI Day (of every month) *</option>
                                                <option> 02 month</option>
                                                <option> 09 month</option>
                                                <option> 15 month</option>
                                                <option> 25 month</option>
                                            </select>
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