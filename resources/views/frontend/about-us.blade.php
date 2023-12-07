@extends('frontend.layouts.master')
@section('content')
<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-heading wow fadeInLeft">
                        <h2>About Us</h2>
                    </div>
                    <ol class="breadcrumb-list wow fadeInRight">
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a> &nbsp;-&nbsp;</li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-section" class="about-section av-py-default shapes-section">
    <div class="av-container">
        <div class="av-columns-area">
            <p>{!! $about->content !!}</p>
        </div>
    </div>
</section>
<section id="step-section" class="step-section setO__bgs av-py-default">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="  wow fadeInUp">
                    <div class="inscCC"></div>
                </div>
            </div>
        </div>
        <div class="av-columns-area">
            <div class="av-column-3 av-sm-column-6">
                <div class="stepbox">
                    <div class="stepbox-outer">
                        <div class="step-effect"></div>
                        <div class="stepbox-icon">
                            <span class="stepbox-number">1</span>
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                    <div class="stepbox-content">
                        <h5 class="stepbox-title"><a href="javascript:void(0);">Personal Loan</a></h5>
                        <div class="stepbox-text">Do you want to buy a bicycle, all new smartphone or even an awesome laptop? This credit option will suit you best.</div>
                    </div>
                </div>
            </div>
            <div class="av-column-3 av-sm-column-6">
                <div class="stepbox">
                    <div class="stepbox-outer">
                        <div class="step-effect"></div>
                        <div class="stepbox-icon">
                            <span class="stepbox-number">2</span>
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                    <div class="stepbox-content">
                        <h5 class="stepbox-title"><a href="javascript:void(0);">LAP</a></h5>
                        <div class="stepbox-text">The family can't fit anymore in that one bedroom flat? Change their lives with a nice new and modern home.</div>
                    </div>
                </div>
            </div>
            <div class="av-column-3 av-sm-column-6">
                <div class="stepbox">
                    <div class="stepbox-outer">
                        <div class="step-effect"></div>
                        <div class="stepbox-icon">
                            <span class="stepbox-number">3</span>
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                    <div class="stepbox-content">
                        <h5 class="stepbox-title"><a href="javascript:void(0);">Gold Loan</a></h5>
                        <div class="stepbox-text">A gold loan is a loan in which you borrow money from a bank/ NBFC keeping your gold ornaments or raw gold as mortgage.</div>
                    </div>
                </div>
            </div>
            <div class="av-column-3 av-sm-column-6">
                <div class="stepbox">
                    <div class="stepbox-outer">
                        <div class="step-effect"></div>
                        <div class="stepbox-icon">
                            <span class="stepbox-number">4</span>
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                    <div class="stepbox-content">
                        <h5 class="stepbox-title"><a href="javascript:void(0);">Other Secured Loans</a></h5>
                        <div class="stepbox-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="detailinfo-section" class="detailinfo-section av-py-default">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <article class="post-items">
                    <figure class="post-image post-image-absolute">
                        <div class="featured-image">
                            <a href="javascript:void(0);" class="post-hover">
                                <img src="{{asset('frontend/assets/images/blog/blogFullSize/img01.jpg')}}" alt="post_item">
                            </a>
                        </div>
                    </figure>
                    <div class="post-content">

                        <h5 class="post-title"><a>CHINTAMANIFINLEASE TEAM PROVIDE TRUSTED FINANCIAL SERVICE PROVIDER <br> & DELIVER SERVICE TO OUTCOME CUSTOMER SATISFACTION.</a></h5>
                        <div>
                            <div class="av-columns-area">
                                <div class="av-column-4">
                                    <div class="csesrt__fsffads">
                                        <h5>Certified & Secure</h5>
                                        <p>We value your privacy and security as much as your wishes. Our processes are Certified Secure for complete confidentiality and peace of mind.</p>
                                    </div>
                                </div>
                                <div class="av-column-4">
                                    <div class="csesrt__fsffads">
                                        <h5>Customer Friendly</h5>
                                        <p>Our friendly team of experts are always there to lend our customers a patient ear, provide advice, answer queries and resolve issues.</p>
                                    </div>
                                </div>
                                <div class="av-column-4">
                                    <div class="csesrt__fsffads">
                                        <h5>On Your Side</h5>
                                        <p>It’s not about what’s for sale. It’s about what you need, if you need it. We’re here to empower you to make financial decisions, one wish at a time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section id="detailinfo-section" class="detailinfo-section av-py-default">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-6">
                <div class="detailinfo secondary">
                    <aside class="widget widget-contact">
                        <div class="contact-area">
                            <div class="contact-icon"><i class="fa fa-users"></i></div>
                            <div class="contact-info">
                                <span class="text">Apply Loan</span>
                                <span class="title">Looking For Loan?</span>
                            </div>
                            <a href="javascript:void(0);" class="av-btn av-btn-secondary av-btn-bubble">Apply Now <i class="fa fa-arrow-right"></i> <span class="bubble_effect"><span class="circle top-left"></span> <span class="circle top-left"></span> <span class="circle top-left"></span> <span class="button effect-button"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span></span></a>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="av-column-6">
                <div class="detailinfo secondary">
                    <aside class="widget widget-contact">
                        <div class="contact-area">
                            <div class="contact-icon"><i class="fa fa-file-text"></i></div>
                            <div class="contact-info">
                                <span class="text">Contact Us</span>
                                <span class="title">Get in Touch </span>
                            </div>
                            <a href="javascript:void(0);" class="av-btn av-btn-secondary av-btn-bubble">Contact Us <i class="fa fa-arrow-right"></i> <span class="bubble_effect"><span class="circle top-left"></span> <span class="circle top-left"></span> <span class="circle top-left"></span> <span class="button effect-button"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span></span></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection