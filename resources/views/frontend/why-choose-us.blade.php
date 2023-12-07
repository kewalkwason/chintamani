@extends('frontend.layouts.master')
@section('content')
<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-heading wow fadeInLeft">
                        <h2>Why Choose Us 🤔</h2>
                    </div>
                    <ol class="breadcrumb-list wow fadeInRight">
                        <li><a href="index.php"><i class="fa fa-home"></i> HOME</a> &nbsp;-&nbsp;</li>
                        <li class="active">ABOUT US</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="features-section" class="features-section  av-py-default features-home shapes-section">
    <div class="av-container">
        <div class="av-columns-area wow fadeInUp">
            <div class="av-column-8">
                <div class="av-columns-area">
                    <div class="av-column-12">
                        <div class=" text-left wow fadeInUp">
                            <h3>Why you need <span class="primary-color">quick loans ?</span></h3>
                            <span class="separator"><span><span></span></span></span>
                            <p>We are a dynamic and dedicated professionals team of experienced financial services. We are Delhi based Company offering Lowest EMI and Interest rates.</p>
                        </div>
                    </div>
                </div>
                <div class="av-columns-area">
                    <span class="tilter d-none"></span>
                    @foreach($whychooseus as $data)
                    <div class="av-column-4 av-sm-column-6 RveVole tilter">
                        <div class="tilter__figure">
                            <div class="features-item">
                                <div class="features-inner tilter__caption">
                                    <div class="features-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="features-content">
                                        <h6 class="features-title"><a href="#!">{{$data->heading}}</a></h6>
                                    </div>
                                    <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                </div>
                                <div class="tilter__deco--lines"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="av-column-4 av-sm-column-6 RveVole tilter">
                        <div class="tilter__figure">
                            <div class="features-item">
                                <div class="features-inner tilter__caption">
                                    <div class="features-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="features-content">
                                        <h6 class="features-title"><a href="#!">Festivals advances</a></h6>
                                    </div>
                                    <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                </div>
                                <div class="tilter__deco--lines"></div>
                            </div>
                        </div>
                    </div>
                    <div class="av-column-4 av-sm-column-6 RveVole tilter">
                        <div class="tilter__figure">
                            <div class="features-item">
                                <div class="features-inner tilter__caption">
                                    <div class="features-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="features-content">
                                        <h6 class="features-title"><a href="#!">Down payments</a></h6>
                                    </div>
                                    <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                </div>
                                <div class="tilter__deco--lines"></div>
                            </div>
                        </div>
                    </div>
                    <div class="av-column-4 av-sm-column-6 RveVole tilter">
                        <div class="tilter__figure">
                            <div class="features-item">
                                <div class="features-inner tilter__caption">
                                    <div class="features-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="features-content">
                                        <h6 class="features-title"><a href="#!">Consumption</a></h6>
                                    </div>
                                    <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                </div>
                                <div class="tilter__deco--lines"></div>
                            </div>
                        </div>
                    </div>

                    <div class="av-column-4 av-sm-column-6 RveVole tilter">
                        <div class="tilter__figure">
                            <div class="features-item">
                                <div class="features-inner tilter__caption">
                                    <div class="features-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="features-content">
                                        <h6 class="features-title"><a href="#!">Medical emergency</a></h6>
                                    </div>
                                    <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                </div>
                                <div class="tilter__deco--lines"></div>
                            </div>
                        </div>
                    </div>

                    <div class="av-column-4 av-sm-column-6 RveVole tilter">
                        <div class="tilter__figure">
                            <div class="features-item">
                                <div class="features-inner tilter__caption">
                                    <div class="features-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="features-content">
                                        <h6 class="features-title"><a href="#!">Travel plans</a></h6>
                                    </div>
                                    <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                </div>
                                <div class="tilter__deco--lines"></div>
                            </div>
                        </div>
                    </div>

                    <div class="av-column-4 av-sm-column-6 RveVole tilter">
                        <div class="tilter__figure">
                            <div class="features-item">
                                <div class="features-inner tilter__caption">
                                    <div class="features-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="features-content">
                                        <h6 class="features-title"><a href="#!">Family marriage plan</a></h6>
                                    </div>
                                    <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                </div>
                                <div class="tilter__deco--lines"></div>
                            </div>
                        </div>
                    </div>
                    <div class="av-column-4 av-sm-column-6 RveVole tilter">
                        <div class="tilter__figure">
                            <div class="features-item">
                                <div class="features-inner tilter__caption">
                                    <div class="features-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="features-content">
                                        <h6 class="features-title"><a href="#!">Renovation</a></h6>
                                    </div>
                                    <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                </div>
                                <div class="tilter__deco--lines"></div>
                            </div>
                        </div>
                    </div>
                    <div class="av-column-4 av-sm-column-6 RveVole tilter">
                        <div class="tilter__figure">
                            <div class="features-item">
                                <div class="features-inner tilter__caption">
                                    <div class="features-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="features-content">
                                        <h6 class="features-title"><a href="#!">Higher Studies</a></h6>
                                    </div>
                                    <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                </div>
                                <div class="tilter__deco--lines"></div>
                            </div>
                        </div>
                    </div>
                    <div class="av-column-4 av-sm-column-6  RveVole tilter">
                        <div class="tilter__figure">
                            <div class="features-item">
                                <div class="features-inner tilter__caption">
                                    <div class="features-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="features-content">
                                        <h6 class="features-title"><a href="#!">To buy electronics</a></h6>
                                    </div>
                                    <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                </div>
                                <div class="tilter__deco--lines"></div>
                            </div>
                        </div>
                    </div>
                    <div class="av-column-4 av-sm-column-6 RveVole tilter">
                        <div class="tilter__figure">
                            <div class="features-item">
                                <div class="features-inner tilter__caption">
                                    <div class="features-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="features-content">
                                        <h6 class="features-title"><a href="#!">white goods</a></h6>
                                    </div>
                                    <div class="modern-icon"><i class="fa fa-delicious"></i></div>
                                </div>
                                <div class="tilter__deco--lines"></div>
                            </div>
                        </div>
                    </div> -->


                </div>
            </div>
            <div class="av-column-4 featuresbgwrapper">
                <div class="features-image-wrap">
                    <div class="features-image">
                        <a href="tel:+91-9212132955" title="Call For Instance Loan">
                            <img src="{{asset('frontend/assets/images/features/whyus.jpg')}}" alt="image">
                        </a>
                    </div>
                </div>
            </div>
            <img class="iiimages d-av-block d-none" src="{{asset('frontend/images/Arrow-PNG-Images.png')}}">
        </div>
    </div>
    <div class="shape5"><img src="{{asset('frontend/images/logo/iocns.png')}}" alt="image"></div>
    <div class="shape6"><img src="{{asset('frontend/images/logo/iocns.png')}}" alt="image"></div>
</section>


<section id="cta-section bgerasn">
    <div class="styl__pading">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-7  ">
                    <div class="cta-content-wrap">
                        <div class="  app-download-content">
                            <h3>CONSERVATIVE BALANCED </h3>
                            <h6>Our commissions are the lowest in the market and you can rest assured we're doing our best to keep it that way.</h6>
                            <br>
                            <p>Besides low commissions and transfer fees here are the reasons you should choose ChintamaniFinlease as your loan provider:</p>
                            <ul class="style-v2as">
                                <li>Impartiality and objectiveness regarding social status</li>
                                <li>Kind staff including sympathetic credit counselors</li>
                                <li>Low interest rates according to regulated legislation</li>
                            </ul>

                            <ol class="style-v2as">
                                <li> Approval takes no longer than 3 business days and usually customers get a positive answer</li>
                                <li> Most of the cases with negative answers are due to incorrect personal information sent by customers</li>
                                <li> The Company disburse a cheque issued on customer name soon after the loan approval</li>
                            </ol>




                        </div>
                    </div>
                </div>
                <div class="av-column-5  ">
                    <div class="sidebar">
                        <img src="{{asset('frontend/images/whyusimage.png')}}">
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
@endsection