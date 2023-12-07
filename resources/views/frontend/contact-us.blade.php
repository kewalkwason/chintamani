@extends('frontend.layouts.master')
@section('content')
<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-heading wow fadeInLeft">
                        <h2>Contact Us 😊</h2>
                    </div>
                    <ol class="breadcrumb-list wow fadeInRight">
                        <li><a href="index.php"><i class="fa fa-home"></i> HOME</a> &nbsp;-&nbsp;</li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<style type="text/css">
    input[type="text"],
    input[type="email"],
    input[type="url"],
    input[type="password"],
    input[type="search"],
    input[type="number"],
    input[type="tel"],
    input[type="range"],
    input[type="date"],
    input[type="month"],
    input[type="week"],
    input[type="time"],
    input[type="datetime"],
    input[type="datetime-local"],
    input[type="color"],
    textarea {
        width: 100% !important;
    }
</style>


<section id="contactform-section" class="contactform-section av-pb-default">
    <div class="contactformbg-heading av-py-default">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default text-center wow fadeInUp">
                        <h3>Have A <span class="primary-color">Question?</span></h3>
                        <span class="separator"><span><span></span></span></span>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contactform-content">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-7">
                    <div class="contactform">
                        <div role="form" class="wpcf7">
                            <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                            <form action="#" method="post" class="wpcf7-form init" novalidate>
                                <div style="display:none">
                                    <input type="hidden" name="_wpcf7" value="229">
                                    <input type="hidden" name="_wpcf7_version" value="5.2.2">
                                    <input type="hidden" name="_wpcf7_locale" value="en">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f229-o1">
                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                    <input type="hidden" name="_wpcf7_posted_data_hash">
                                </div>
                                <p>
                                    <label><span class="wpcf7-form-control-wrap your-name"><input type="text" placeholder="Your Name" name="your-name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></label>
                                </p>
                                <p>
                                    <label><span class="wpcf7-form-control-wrap your-email"><input type="email" placeholder="Your Email" name="your-email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span></label>
                                </p>
                                <p>
                                    <label><span class="wpcf7-form-control-wrap your-email"><input type="number" placeholder="Phone Number" name="your-number" size="40" class="wpcf7-form-control wpcf7-text wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number" aria-required="true" aria-invalid="false"></span></label>
                                </p>
                                <p>
                                    <label><span class="wpcf7-form-control-wrap your-subject"><input type="text" placeholder="Subject" name="your-subject" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span></label>
                                </p>
                                <p>
                                    <label>
                                        <span class=" ">
                                            <select class="wpcf7-form-control wpcf7-text  auusi__css">
                                                <option>Select Area</option>
                                            </select>
                                        </span>
                                    </label>
                                </p>
                                <p>
                                    <label><span class="wpcf7-form-control-wrap your-message"><textarea placeholder="Message" name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span></label>
                                </p>
                                <p>
                                    <button type="submit" class="av-btn av-btn-primary av-btn-bubble wpcf7-submit">Send Now <i class="fa fa-arrow-right"></i> <span class="bubble_effect"><span class="circle top-left"></span> <span class="circle top-left"></span> <span class="circle top-left"></span> <span class="button effect-button"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span></span></button>
                                    <span class="ajax-loader"></span>
                                </p>
                                <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="av-column-5">
                    <div class="isiuCss">
                        <img class="iiCdss" src="{{asset('uploads/article')}}/{{$complete->image}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contactmap-section" class="contactmap-section av-py-default">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-md-column-6 ml-md-0 mx-auto">
                <div class="contactmapinfo">
                    <aside class="widget widget-contact">
                        <div class="contact-area">
                            <div class="contact-icon"><i class="fa fa-phone"></i></div>
                            <div class="contact-info">
                                <span class="title">Phone</span>
                                <span class="text">+91{{$complete->phone}}</span>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget-contact">
                        <div class="contact-area">
                            <div class="contact-icon"><i class="fa fa-envelope"></i></div>
                            <div class="contact-info">
                                <span class="title">Email</span>
                                <span class="text">{{$complete->email}}
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget-contact">
                        <div class="contact-area">
                            <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="contact-info">
                                <span class="title">Address</span>
                                <span class="text">{!!$complete->address!!}</span>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget-contact">
                        <div class="contact-area">
                            <div class="contact-icon"><i class="fa fa-clock-o"></i></div>
                            <div class="contact-info">
                                <span class="title">Our Opening Hours</span>
                                <div class="text">
                                    <dl class="av-grid-dl">
                                        <dt><?php
                                            $openingHours = explode(',', $complete->our_opening_hours);
                                            echo implode(',<br>', $openingHours);
                                            ?></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4164.24462617836!2d77.28658309299871!3d28.638800668136213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfdce2cb5acab%3A0xeabf9e552554d55d!2sPersonal%20Loan-Chintamani%20Finlease%20Ltd!5e0!3m2!1sen!2sin!4v1626328012129!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection