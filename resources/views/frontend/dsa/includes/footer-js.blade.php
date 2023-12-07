<div class="modal" id="displayMessageModal" role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content b-0">
<div class="modal-header r-0 bg-primary">
<h6 class="modal-title text-white" id="exampleModalLabel">Enter Remark & Message</h6>
<button type="button" class="close" data-dismiss="modal" onclick="location.reload();">&times;</button>
</div>
<div class="modal-body no-p no-b">
<form class="form" role="form" style="padding: 1em;">
<input type="hidden" name="order_id">
<input type="hidden" name="application_status">
<div id="rejected_remark">
<label>Enter Reject Remark</label>
<select class="form-control" id="select-required" name="reject_remark" data-parsley-required="true">
 <option value="">Select an option</option>
 <option value="Out_of_location">Out of location</option>
 <option value="Negative_area">Negative area</option>
 <option value="Low_salary">Low salary</option>
 <option value="Verification_denied_by_customer">Verification denied by customer</option>
 <option value="Amount_issue">Amount issue</option>
 <option value="ROI">ROI</option>
 <option value="Not_interested">Not interested</option>
 <option value="M_factor">M factor</option>
 <option value="Guarantor_not_provided">Guarantor Not Provided</option>
<option value="Not_eligible">Not Eligible</option>
<option value="Verification_negative">Verification Negative</option>
<option value="Ring_customers">Ring Customers</option>
<option value="Executive">Executive</option>
 <option value="switch_off">Switch Off</option>
 <option value="other">Other</option>
</select>
</div>
<div id="other">
<textarea class="trumbowyg-editor trumbowyg-box r-0 b-0" class="form-control" name="message" id="message" placeholder="Enter remark" required></textarea>
</div>
<div class="checkbox checkbox-css checkbox-inline">
<input type="checkbox" value="" id="inlineCssCheckbox1">
<label for="inlineCssCheckbox1">Click to send SMS to customer</label>
</div>
<div style="display: none;" id="msgtext">
<label>Enter Message(optional)</label>
<textarea class="trumbowyg-editor trumbowyg-box r-0 b-0" class="form-control" name="smsMessage" type="text" placeholder="Enter message to send sms to the customer" value="" style="margin-bottom: 10px;"></textarea>
</div>
<div class="checkbox checkbox-css checkbox-inline">
<input type="checkbox" value="" id="inlineCssCheckbox2">
<label for="inlineCssCheckbox2">Click to send Mail to customer</label>
</div>
<div style="display: none;" id="mailtext">
<label>Enter Message(optional)</label>
<textarea class="trumbowyg-editor trumbowyg-box r-0 b-0" class="form-control" name="mailMessage" type="text" placeholder="Enter message to send mail to the customer" value="" style="margin-bottom: 10px;"></textarea>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary  l-s-1 s-12 text-uppercase" onclick="updateApplocationStatus();">
Submit
</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="previewModal" role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Preview Blog</h4>
<button type="button" class="close" data-dismiss="modal" onclick="location.reload();">&times;</button>

</div>
<div class="modal-body" >
<form class="form-horizontal" name="demo-form" id="updateBlog">
<div id="modalEditBody">
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Chinthamani - Financial Services and Business Consulting</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta name="description" content="">
 <meta name="keywords" content="">
 <link rel="icon" href="{{asset('image/unnamed.png')}}" type="{{asset('image/png')}}" sizes="16x16">
 <link rel="stylesheet" type="text/css" href="{{asset('admin/css/vendor.bundle.css')}}">
 <link id="style-css" rel="stylesheet" type="text/css" href="{{asset('admin/css/stylec64e.css')}}">
 <link id="style-css" rel="stylesheet" type="text/css" href="{{asset('admin/css/custom.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('admin/css/main.css')}}">
 <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body class="site-body style-v1">
 <!-- Header --> 
 <header class="site-header header-s1 is-transparent is-sticky">
    <!-- Topbar -->
    <div class="topbar">
       <div class="container-fluid">
          <div class="row">
             <div class="top-aside top-left">
             </div>
             <div class="top-aside top-right clearfix">
                <ul class="top-contact clearfix">
                   <li class="t-email t-email1">
                      <em class="fa fa-envelope-o" aria-hidden="true"></em>
                      <span><a href="#">info@chintamanifinlease.com</a></span>
                   </li>
                   <li class="t-phone t-phone1">
                      <em class="fa fa-phone" aria-hidden="true"></em>
                      <span>+91 9212132955</span>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
    <!-- #end Topbar -->
    <!-- Navbar -->
    <div class="navbar navbar-primary">
       <div class="container-fluid">
          <!-- Logo -->
          <a class="navbar-brand newpad" href="">
             <img class="logo logo-dark" alt="" src="{{asset('image/unnamed.jpg')}}" srcset="{{asset('image/unnamed.jpg 2x')}}">
             <h5><img class="logo logo-light adjustment" alt="" src="{{asset('image/unnamed.png')}}" srcset="{{asset('image/unnamed.png 2x')}}"><b class="heading logo logo-light titlebrand"><span>CHINTAMANI</span>&nbsp;FINLEASE LTD</b></h5>
          </a>
          <!-- #end Logo -->
          <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
             <span class="sr-only">Menu</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             </button>
             <!-- Q-Button for Mobile -->
             <div class="quote-btn"><a class="btn" href="get-a-quote.html">Sign in</a></div>
          </div>
          <!-- MainNav -->
          <nav class="navbar-collapse collapse adjustment" id="mainnav">
             <ul class="nav navbar-nav">
                <li class="dropdown"><a href="">Home</a></li>
                <li class="dropdown">
                   <a href="home/aboutUs">About us</a>
                   <!-- <ul class="dropdown-menu">
                      <li><a href="faqs.html">FAQ's</a></li>
                      <li><a href="teams.html">Teams</a></li>
                      <li><a href="about-us-alter.html">About - Alter</a></li>
                      <li><a href="teams-alter.html">Teams - Alter</a></li>
                      <li><a href="contact-extend.html">Contact - Extend</a></li>
                      <li><a href="gallery.html">Gallery <span class="label label-info">New</span></a></li>
                      <li><a href="portfolio.html">Portfolio <span class="label label-info">New</span></a></li>
                      <li><a href="portfolio-single.html">Portfolio Single <span class="label label-info">New</span></a></li>
                      <li><a href="#">Shortcode <span class="label label-danger">Hot &amp; New</span></a>
                          <ul class="dropdown-menu">
                              <li><a href="shortcode.html">Shortcode - Element</a></li>
                              <li><a href="shortcode-carousel.html">Shortcode - Carousel</a></li>
                              <li><a href="shortcode-banner.html">Shortcode - Banner</a></li>
                          </ul>
                      </li>
                      <li><a href="typography.html">Typography</a></li>
                      </ul> -->
                </li>
                <!-- <li class="dropdown">
                   <a href="" class="dropdown-toggle">Services <b class="caret"></b></a>
                   <ul class="dropdown-menu">
                       <li><a href="service.html">Services List</a></li>
                       <li><a href="service-alter.html">Services List - Alter</a></li>
                       <li><a href="service-single.html">Services Single</a></li>
                       <li><a href="service-single-alter.html">Services Single - Alter</a></li>
                   </ul>
                   </li> -->
                <li><a href="#services">Services</a></li>
                <li><a href="blog">blog</a></li>
                <li><a href="home/whyChooseUs">Why choose us</a></li>
                <li><a href="home/documentsRequired">Documents required</a></li>
                <li><a href="home/payNow">Pay now</a></li>
                <li><a href="home/contactUs">Contact</a></li>
                
                <li class="quote-btn"><a class="btn" href="{{route('dsa.logout')}}">Logout</a></li>
               
                <!-- <li class="quote-btn"><a class="btn" href="login">Login</a></li> -->
               
             </ul>
          </nav>
          <!-- #end MainNav -->
       </div>
    </div>
    <!-- #end Navbar -->
 </header>
 <!-- End Header -->
 <!-- content-wraper start -->
 <?php if(@$blogs['blog'] != '') { ?>
 <div class="content-wraper section-pb section-pt-90 section section-contents section-contact section-pad newcolour qrbottom bg-light">
    <div class="container">
       <div class="row">
          <div class="col-md-offset-1 col-md-10 col-xs-12 singleblog">
             <!-- blog-details-wrapper start -->
             <div class="blog-details-wrapper mt-30">
                <div class="blog-details-image">
                   <img src="" alt="">
                </div>
                <div class="postinfo-wrapper newpost">
                   <div>
                      <h2 class="above leftwhat"><i><?php echo ucfirst(@$blogs['blog']->blog_title);?></i></h2>
                   </div>
                   <div>
                      <div class="content-meta font-size-smallest">
                         <div class="share">
                            <span class="gray-light">
                               SHARE:
                               <ul class="social newsocial">
                                  <li><a href="https://facebook.com/sharer/sharer.php?url=/" target="_blank"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
                                  <li><a href="https://twitter.com/share?url='/&amp;text=''" target="_blank"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
                                  <li><a href="https://whatsapp.com/share?url=/" target="_blank"><em class="fa fa-whatsapp" aria-hidden="true"></em></a></li>
                                  <li><a href="https://www.linkedin.com/shareArticle?url=/" target="_blank"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
                               </ul>
                            </span>
                         </div>
                         <span class="gray-light"><em class="fa fa-clock-o"></em>&nbsp;&nbsp; </span>
                      </div>
                   </div>
                   <div class="post-info newarrange">
                      <div class="col-md-12 blogimage">
                         <img src="">
                      </div>
                      <br>
                      <h5 class="below"><i></i></h5>
                      <p></p>
                   </div>
                </div>
             </div>
             <!-- blog-details-wrapper end -->
          </div>
       </div>
    </div>
 </div>
 <?php } ?>
 <!-- content-wraper end -->
 <div class="content-wraper section-pb section-pt-90 bg-light botbg">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 order-1 order-lg-1">
             <!-- blog-details-wrapper start -->
             <div class="blog-details-wrapper mt-30">
                <div class="blog-details-image">
                   <img src="" alt="">
                </div>
                <div class="postinfo-wrapper">
                   <div class="post-info">
                      <div class="meta-body">
                         <ul class="d-flex">
                            <!--  <li>By: <a href="#">Chintamani Finlease Ltd</a></li> -->
                            <!-- <li>08-08-2019</li> -->
                         </ul>
                      </div>
                      <h3 class="above"><i><?php echo strtoupper('Related Posts');?></i></h3>
                      <br>
                       <?php if(!empty(@$blogs['related_blog'])){
                         foreach (@$blogs['related_blog'] as $blogDetails){ ?>
                           <div class="col-md-4 col-sm-6 even">
                             <div class="feature">
                                <div class="fbox-photo">
                                   <img id="image" src="<?php echo $blogDetails->blog_image;?>">
                                </div>
                             </div>
                             <div class="fbox-over newfbox">
                                <a href="<?php echo site_url('blog/'.$blogDetails->slug);?>">
                                   <h4 class="blogtitle related"><i><?php echo $blogDetails->blog_title;?></i></h4>
                                </a>
                                <div class="fbox-content">
                                   <p class=""><?php echo substr($blogDetails->blog_content,0, 200);?><span>..</span></p>
                                </div>
                             </div>
                           </div>
                       <?php } } ?>
                   </div>
                </div>
             </div>
             <!-- blog-details-wrapper end -->
          </div>
       </div>
    </div>
 </div>
 <div class="content-wraper section-pb section-pt-90 bg-light botbg">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 order-1 order-lg-1">
             <!-- blog-details-wrapper start -->
             <div class="blog-details-wrapper mt-30">
                 <div class="blog-details-image">
                   <img src="" alt="">
                 </div>
                 <div class="comments-area comments-reply-area">
                   <div class="row">
                      <div class="col-lg-12">
                         <h4 class="comment-reply-title">Leave a Reply</h4>
                         <form id="comment-form">
                            <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                            <div class="form-group">
                               <label>Name <span class="required">*</span></label> 
                               <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                               <label>Email <span class="required">*</span></label> 
                               <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                               <label>Phone</label>
                               <input type="number" class="form-control" name="phone"> 
                            </div>
                            <div class="form-group">
                               <label>Comment</label> 
                               <textarea name="comments" class="form-control" required></textarea>
                            </div>
                            <div class="text-center">
                               <button type="submit" class="btn">Post Comment</button>
                            </div>
                         </form>
                      </div>
                   </div>
                 </div>
                 <?php if(!empty($blog_comments)) { 
                   foreach ($blog_comments as $details){ ?>
                     <div class="postinfo-wrapper">
                       <div class="review_address_inner">
                          <div class="pro_review">
                             <div class="review_thumb col-md-2 text-center">
                                <img alt="review images" src="{{asset('image/user1.png')}}">
                             </div>
                             <div class="review_details col-md-10">
                                <div class="review_info">
                                   <h5><a><?php echo $details['name'];?></a></h5>
                                   <div class="rating_send">
                                      <a><i class="fa fa-reply"></i></a>
                                   </div>
                                </div>
                                <div class="review_date">
                                   <span>27 Jun, 2018 at 3:30pm</span>
                                </div>
                                <p><?php echo $details['comments'];?></p>
                             </div>
                          </div>
                       </div>
                     </div>
                 <?php } } ?>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- Footer Widget-->
 <div class="footer-widget style-v2 section-pad-md">
    <div class="container">
       <div class="row">
          <div class="widget-row row">
             <div class="footer-col col-md-3 col-sm-6 res-m-bttm">
                <!-- Each Widget -->
                <div class="wgs wgs-footer wgs-text">
                   <div class="wgs-content">
                      <p><img src="{{asset('image/unnamed.jpg')}}" srcset="{{asset('image/unnamed.jpg 2x')}}" alt=""></p>
                      <p>We're passionate about offering the best financial services to our loyal customers. Chintamani Finlease is your friend and partner, who extend their helping hand towards you to make your dreams come true on your required time.</p>
                   </div>
                </div>
                <!-- End Widget -->
             </div>
             <div class="footer-col col-md-3 col-sm-6 col-md-offset-1 res-m-bttm">
                <!-- Each Widget -->
                <div class="wgs wgs-footer wgs-menu">
                   <h5 class="wgs-title">Our Services</h5>
                   <div class="wgs-content">
                      <ul class="menu">
                         <li><a href="#">Personal Loan</a></li>
                         <li><a href="#">Business Loan</a></li>
                         <li><a href="#">Gold Loan</a></li>
                         <li><a href="#">Vehicle Loan</a></li>
                         <li><a href="#">Housing Loan</a></li>
                         <li><a href="#">Medical Loan</a></li>
                         <li><a href="#">Marriage Loan</a></li>
                         <li><a href="#">Travelling Loan</a></li>
                      </ul>
                   </div>
                </div>
                <!-- End Widget -->
             </div>
             <div class="footer-col col-md-2 col-sm-6 res-m-bttm">
                <!-- Each Widget -->
                <div class="wgs wgs-footer wgs-menu">
                   <h5 class="wgs-title">Quick Links</h5>
                   <div class="wgs-content">
                      <ul class="menu">
                         <li><a href="home/aboutUs">About Us</a></li>
                         <li><a href="home/whyChooseUs">Why Choose Us</a></li>
                         <li><a href="home/documentsRequired">Documents Required</a></li>
                         <li><a href="home/contactUs">Contact Us</a></li>
                         <li><a href="home/privacyPolicy">Privacy Policy</a></li>
                         <li><a href="home/termsConditions">Terms & Conditions</a></li>
                      </ul>
                   </div>
                </div>
                <!-- End Widget -->
             </div>
             <div class="footer-col col-md-3 col-sm-6">
                <!-- Each Widget -->
                <div class="wgs wgs-footer">
                   <h5 class="wgs-title">Get In Touch</h5>
                   <div class="wgs-content">
                      <p>216, Ansal Vikas Deep Building,Laxmi Nagar District Centre,<br>
                         Near Nirman Vihar Metro Station,Delhi - 110092.
                      </p>
                      <p><span>Toll Free</span>: 01164992675 / 64559126<br>
                         <span>Phone</span>: +91 9212132955
                      </p>
                      <ul class="social">
                         <li><a href="https://www.facebook.com/pages/category/Financial-Service/Chintamani-Finlease-Ltd-884067228355110/" target="_blank"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
                         <li><a href="https://twitter.com/chintamanifinle" target="_blank"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
                         <li><a href="https://plus.google.com/112452018872605023845" target="_blank"><em class="fa fa-google-plus" aria-hidden="true"></em></a></li>
                         <li><a href="https://in.linkedin.com/company/chintamani-finlease-ltd" target="_blank"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
                      </ul>
                   </div>
                </div>
                <!-- End Widget -->
             </div>
          </div>
          <!-- Widget Row -->
       </div>
       <!-- <div class="col-sm-4"></div> -->
       <div class="site-copy col-sm-12 middle">
          <p><img src="{{asset('image/cibil.png')}}" srcset="{{asset('image/cibil.png')}}" alt=""></p>
          <span>Member of CIBIL</span>
       </div>
       <!-- <div class="col-sm-4"></div> -->
    </div>
 </div>
 <!-- End Footer Widget -->
 <!-- Copyright -->
 <div class="copyright style-v2">
    <div class="container">
       <div class="row">
          <div class="site-copy col-sm-7">
             <p>&copy; 2019 ChintamaniFinlease. <a href="#">Policy</a></p>
          </div>
          <div class="site-by col-sm-5 al-right">
             <p>Designed and Developed by <a href="https://fuinex.com/" target="_blank">Fuinex Technologies</a></p>
          </div>
       </div>
    </div>
 </div>
 <!-- End Copyright -->
 <!-- Rreload Image for Slider -->
 <div class="preload hide">
    <img alt="" src="{{asset('image/slider-lg-a.jpg')}}">
    <img alt="" src="{{asset('image/slider-lg-b.jpg')}}">
 </div>
 <!-- End -->
 <!-- pop up option selection in Housetype -->
 <!-- Modal -->
 <!-- Preloader !active please if you want -->
 <!-- <div id="preloader"><div id="status">&nbsp;</div></div> -->
 <!-- Preloader End -->
 <!-- JavaScript Bundle -->
 <script src="{{asset('js/jquery.bundle.js')}}"></script>
 <!-- Theme Script init() -->
 <script src="{{asset('js/script.js')}}"></script>
 <!-- End script -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="{{asset('js/validator.min.js')}}"></script> 
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
</body>
</html>
</div>
<div class="row">
<div class="col-sm-6 col-xs-6">
<button type="submit" class="btn btn-info btn-block">Update</button>
</div>
<div class="col-md-6 col-xs-6">
<button type="Reset" class="btn btn-secondary btn-block">Reset</button>
</div>
</div>
</form>
</div>


</div>
</div>
</div>

<div class="modal" id="disbursedModal" role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-md ">    
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Enter Values</h4>
<button type="button" class="close" data-dismiss="modal" onclick="location.reload();">&times;</button>

</div>
<div class="modal-body">
<form class="form" role="form" >
<input type="hidden" name="order_id">
<input type="hidden" name="application_status">
<label> Enter Loan Amount</label>

<label>Sanctioned By</label>
<select class="form-control" name="sanctioned_by" required>
<option value="">Select an option</option>
<option value="Rajiv Sharma">Rajiv Sharma</option>
<option value="PK Jain">PK Jain</option>
<option value="Nikhil Jain">Nikhil Jain</option>
</select>
<label>Enter remark *</label>
<textarea class="form-control" name="dmessage" type="text" placeholder="Enter remark" value="" style="margin-bottom: 10px;" required="required"></textarea>
<div class="checkbox checkbox-css checkbox-inline">
<input type="checkbox" value="" id="inlineCssCheckbox4">
<label for="inlineCssCheckbox4">Click to send SMS to customer</label>
</div>
<div style="display: none;" id="dmsgtext">
<label>Enter Message(optional)</label>
<textarea class="trumbowyg-editor trumbowyg-box r-0 b-0" class="form-control" name="dsmsMessage" type="text" placeholder="Enter message to send the customer" value="" style="margin-bottom: 10px;" required="required"></textarea>
</div>
<div class="checkbox checkbox-css checkbox-inline">
<input type="checkbox" value="" id="inlineCssCheckbox5">
<label for="inlineCssCheckbox5">Click to send Mail to customer</label>
</div>
<div style="display: none;" id="dmailtext">
<label>Enter Message(optional)</label>
<textarea class="trumbowyg-editor trumbowyg-box r-0 b-0" class="form-control" name="dmailMessage" type="text" placeholder="Enter message to send mail to the customer" value="" style="margin-bottom: 10px;"></textarea>
</div>
<span class="msg"></span>
<button type="button" onclick="updateApplocationStatus();" class="btn btn-md btn-primary btn-block">Submit</button>
</form>
<div id="errormsg" style="color:red"></div>
</div>
</div>      
</div>
</div>


<div class="modal" id="payModal" role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Enter Message</h4>
<button type="button" class="close" data-dismiss="modal" onclick="location.reload();">&times;</button>

</div>
<div class="modal-body">
<form class="form" role="form">
<input type="hidden" name="order_id">
<textarea class="form-control" name="paymessage" id="paymessage" type="text" placeholder="Enter message" value="" style="margin-bottom: 10px;" required="required"></textarea>
<button type="button" onclick="repayLoan();" class="btn btn-md btn-primary btn-block">Submit</button>
</form>
<div id="errormsg" style="color:red"></div>
</div>
</div>
</div>
</div>

<!-- Remark old web enquiry modal -->
<div class="modal fade" id="remarkAddModalweb" role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Add Remark</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>          
</div>
<div class="modal-body" >
<form action="admin/addRemarkOldwebEnquiry" method="post">
<input type="hidden" name="enquiry_id" id="enquiry_id">
<textarea class="form-control" name="message" id="remarkRemarkText" type="text" placeholder="Enter remark" value="" style="margin-bottom: 10px;" required="required"></textarea>
<span class="message"></span>
<button type="submit" class="btn btn-md btn-primary btn-block">Submit</button>
</form>
</div>
</div>
</div>
</div>


<!-- Remark Verification modal -->
<div class="modal fade" id="remarkAddModal" role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Add Remark</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>          
</div>
<div class="modal-body" >
<form action="admin/addRemarkVerification" method="post">
<input type="hidden" name="order_id" id="order_id">
<input type="hidden" name="type" id="type">
<textarea class="form-control" name="message" id="remarkText" type="text" placeholder="Enter remark" value="" style="margin-bottom: 10px;" required="required"></textarea>
<span class="message"></span>
<button type="submit" class="btn btn-md btn-primary btn-block">Submit</button>
</form>
</div>
</div>
</div>
</div>
<!-- end remark verification modal -->
<div class="modal fade" id="remarkEditModal" role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Edit Remark</h4>
<button type="button" class="close" data-dismiss="modal" onclick="location.reload();">&times;</button>          
</div>
<div class="modal-body" >
<form action="admin/editRemark" method="post">
<input type="hidden" name="remark_id" id="remarkID">
<textarea class="form-control" name="remark" id="remarkText" type="text" placeholder="Enter remark" value="" style="margin-bottom: 10px;" required="required"></textarea>
<span class="message"></span>
<button type="submit" class="btn btn-md btn-primary btn-block">Submit</button>
</form>
</div>
</div>
</div>
</div>

<div class="modal" id="displayLeadRemark" role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content b-0">
<div class="modal-header r-0 bg-primary">
<h6 class="modal-title text-white" id="exampleModalLabel">Enter Remark & Message</h6>
<button type="button" class="close" data-dismiss="modal" onclick="location.reload();">&times;</button>
</div>
<div class="modal-body no-p no-b">
<form class="form" role="form" style="padding: 1em;">
<input type="hidden" name="customer_id">
<input type="hidden" name="status">
<textarea class="trumbowyg-editor trumbowyg-box r-0 b-0" class="form-control" name="newmessage" id="newmessage" placeholder="Enter remark" required></textarea>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary  l-s-1 s-12 text-uppercase" onclick="updateStatusRemark();">
Submit
</button> 
</div>
</div>
</div>
</div>



<div class="modal" id="displayguarantorList" role="dialog" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content b-0">
<div class="modal-header r-0 bg-primary">
<h6 class="modal-title text-white" id="exampleModalLabel2">Guarantor List</h6>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body p-4 no-b">
<div class="table-responsive">
<table class="table-striped table-bordered"><thead>
<th class="text-nowrap">S.no</th>
<th class="text-nowrap">Name</th>
<th class="text-nowrap">Phone</th>
<th class="text-nowrap">Created Date</th>
<th class="text-nowrap">Action</th><thead>
<tbody id="guarantorList">
</tbody>
</table>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary  l-s-1 s-12 text-uppercase" data-dismiss="modal">
Close
</button> 
</div>
</div>
</div>
</div>


<div id="receivemodal" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<?php //echo form_open('Admin/nextptp');?>

<input type="hidden" name="ptp_id">
<input type="hidden" name="received_emi">
<input type="hidden" name="emi_amount">
<input type="hidden" name="bucket">
<div class="form-group row m-b-15">
<div class="col-md-12">
<label>Collection Amount*</label>
<input type="text" class="form-control" name="rec_total_amount" placeholder="Enter Amount" value="" required="required" readonly="">
</div>
</div>
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Receiving Amount*</label>
   <input type="text" class="form-control" name="rec_amount" placeholder="Enter Amount" value="" onchange="viewremaining_amt(this.value)" required="required">
 </div>
</div>

<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Remaining Amount*</label>
   <input type="text" class="form-control" name="rec_remaining_amount" placeholder="" value="" required="required" disabled="">
 </div>
</div>
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Next Date </label>
   <input class="form-control border-input" type="text" name="next_date" placeholder="Date" required="required" value="<?php echo $tomorrow = date("d-m-Y", time() + 86400); ?>" readonly="readonly">
 </div>
</div>
<div class="form-group row m-b-15">
<div class="col-md-12">
 <label>Payment Mode</label>
   <select class="form-control border-input" required="required" name="rec_payment_mode" id="ptp_status" onchange="showName('executive_name', this)">
     <option value="">-- Select Payment Mode --</option>
     <option value="imps">IMPS</option>
     <option value="ecs">ECS</option>
     <option value="neft">NEFT</option>
     <option value="rtgs">RTGS</option>
     <option value="upi">UPI</option>
     <option value="paytm">PayTM</option>
     <option value="cash">Cash</option>
     <option value="cheque">Cheque</option>
   </select>
</div>
</div>
<div id="executive_name">
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Executive Name*</label>
   <input type="text" class="form-control" name="rec_exe_name" placeholder="Enter Name" value="" required="required">
 </div>
</div>
</div>


<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Enter Remark *</label>
   <input type="text" class="form-control" name="rec_remark" placeholder="Enter message" value="" required="required">
 </div>
</div>

<button type="button" class="btn btn-primary form-control" name="receive_amt" onclick="add_receiveamount()">Submit</button>
      
</div>
</div>

</div>
</div>

<div id="paymentsptp" class="modal fade displaypayment" role="dialog">
<?php //include('view_payments.php'); ?>
</div>


<!-- <div id="paymentsptp" class="modal fade displaypayment" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">PTP Payments</h5>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<?php //if (!empty($paymentList)) { ?>
<table id="example" class="table table-striped table-bordered">
<thead>
<tr>
<th class="text-nowrap">S.no</th>
<th class="text-nowrap">Date</th>
<th class="text-nowrap">Amount</th>
<th class="text-nowrap">Remarks</th>
<th class="text-nowrap">Payment Mode</th>
</tr>
</thead>
<tbody>
<tr>
<td>Test</td>
<td>Test</td>
<td>Test</td>
<td>Test</td>
<td>Test</td>
</tr>
</div>
</div>
</div>
</div> -->

<!-- NEXT PTP -->
<div id="nextptp" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<?php //echo form_open('Admin/nextptp');?>

<input type="hidden" name="ptp_id">
<div class="form-group row m-b-15">
<div class="col-md-12">
 <label>Lead Status</label>
   <select class="form-control border-input" required="required" name="ptp_status" id="ptp_status">
     <option value="">-- Select an option --</option>
     <option value="follow_up">Follow up</option>
     <option value="no_responce">No Response</option>
     <!-- <option value="no_responce">No Response</option> -->
   </select>
</div>
</div>

<div class="form-group row m-b-15">
 <div class="col-md-6">
   <label>Delay days </label>
   <input type="date" type="number" name="next_ptpdate" placeholder="Enter day gap" required="required" onkeyup="set_date(this)"class="form-control">
 </div>
 <div class="col-md-6">
   <label>Time</label>
   <input type="time" type="number" name="next_ptptime" placeholder="Enter time gap" required="required" onkeyup="set_date(this)"class="form-control">
 </div>
</div>
<!-- <div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Next Date </label>
   <input class="form-control border-input" type="text" name="next_date" placeholder="Date" required="required" readonly="readonly">
 </div>
</div> -->
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Total Amount *</label>
   <input type="text" class="form-control" name="total_amt" placeholder="Enter Amount" value="" required="required" disabled="">
 </div>
</div>
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Response</label>
   <select class="form-control border-input" required="required" name="ptp_response" id="ptp_status" onchange="showDiv('ptp_details', this)">
     <option value="">-- Select an option --</option>
     <option value="current">Current</option>
     <option value="restructure">Restructure</option>
     <option value="NPA">NPA</option>
   </select>
 </div>
</div>
<div id="ptp_details">
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Executive Name*</label>
   <select class="form-control border-input" required="required" name="exe_name" id="ptp_status">
     <option value="">-- Select an option --</option>
     <option value="calling">Calling</option>
     <option value="govind">Govind</option>
     <option value="rahul">Rahul</option>
     <option value="vikas">Vikas</option>
     <option value="vishal">Vishal</option>
     <option value="gurjot">Gurjot</option>
     <option value="ram">Ram</option>
     <option value="gulshan">Gulshan</option>
     <option value="ashish">Ashish</option>
     <option value="ashu">Ashu</option>
     <option value="rajiv">Rajiv</option>
   </select>
   <!-- <input type="text" class="form-control" name="exe_name" placeholder="Enter Name" value="" required="required"> -->
 </div>
</div>
</div>
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Enter Remark *</label>
   <input type="text" class="form-control" name="ptp_remark" placeholder="Enter message" value="" required="required">
 </div>
</div>
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Select Payment Mode </label>
     <select class="form-control border-input" required="required" name="payment_mode" id="suggested_payment_mode">
       <option value="">-- Select an option --</option>
       <option value="imps">IMPS</option>
       <option value="transfer">Transfer</option>
       <option value="rebound">Rebound</option>
       <option value="ecs">ECS</option>
       <option value="neft">NEFT</option>
       <option value="rtgs">RTGS</option>
       <option value="upi">UPI</option>
       <option value="paytm">PayTM</option>
       <option value="cash">Cash</option>
     </select>
 </div>
</div>

<button type="button" class="btn btn-primary form-control" name="nextptp" onclick="addnextptp()">Submit</button>
     
</div>
</div>

</div>
</div>

<!-- Edit PTP -->
<div id="editptp" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">Edit PTP
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<?php //echo form_open('Admin/nextptp');?>

<input type="hidden" name="ptp_id">
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Name *</label>
   <input type="text" class="form-control" name="name" placeholder="Enter Amount" value="" required="required">
 </div>
</div>
<!-- <div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Next Date </label>
   <input class="form-control border-input" type="text" name="next_date" placeholder="Date" required="required" readonly="readonly">
 </div>
</div> -->
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Total Amount *</label>
   <input type="text" class="form-control" name="total_amt" placeholder="Enter Amount" value="" required="required" disabled="">
 </div>
</div>
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Phone Number*</label>
   <input type="text" class="form-control" name="phone" placeholder="Enter message" value="" required="required">
 </div>
</div>
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Email*</label>
   <input type="text" class="form-control" name="email" placeholder="Enter Email" value="" required="required">
 </div>
</div>                  
<button type="submit" class="btn btn-primary form-control" name="editptp" onclick="editptp_data()">Submit</button>
     
</div>
</div>

</div>
</div>


<!-- Bucket List  -->
<div id="bucket_remark_modal" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<?php //echo form_open('Admin/nextptp');?>

<input type="hidden" name="user_id">
<div class="form-group row m-b-15">
<div class="col-md-12">
 <label>Lead Status</label>
   <select class="form-control border-input" required="required" name="bucket_status" id="ptp_status">
     <option value="">-- Select an option --</option>
     <option value="follow_up">Follow up</option>
     <option value="no_responce">No Response</option>
     <!-- <option value="no_responce">No Response</option> -->
   </select>
</div>
</div>

<div class="form-group row m-b-15">
 <div class="col-md-6">
   <label>Delay days </label>
   <input type="date" type="number" name="next_date" placeholder="Enter day gap" required="required" onkeyup="set_date(this)"class="form-control">
 </div>
 <div class="col-md-6">
   <label>Time</label>
   <input type="time" type="number" name="next_time" placeholder="Enter time gap" required="required" onkeyup="set_date(this)"class="form-control">
 </div>
</div>
<!-- <div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Next Date </label>
   <input class="form-control border-input" type="text" name="next_date" placeholder="Date" required="required" readonly="readonly">
 </div>
</div> -->
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Total Amount *</label>
   <input type="text" class="form-control" name="total_amt" placeholder="Enter Amount" value="" required="required" disabled="">
 </div>
</div>
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Response</label>
   <select class="form-control border-input" required="required" name="bucket_response" id="ptp_status" onchange="showDiv('ptp_details', this)">
     <option value="">-- Select an option --</option>
     <option value="current">Current</option>
     <option value="restructure">Restructure</option>
     <option value="NPA">NPA</option>
   </select>
 </div>
</div>
<div id="ptp_details">
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Executive Name*</label>
   <select class="form-control border-input" required="required" name="exe_name" id="ptp_status">
     <option value="">-- Select an option --</option>
     <option value="calling">Calling</option>
     <option value="govind">Govind</option>
     <option value="rahul">Rahul</option>
     <option value="vikas">Vikas</option>
     <option value="vishal">Vishal</option>
     <option value="gurjot">Gurjot</option>
     <option value="ram">Ram</option>
     <option value="gulshan">Gulshan</option>
     <option value="ashish">Ashish</option>
     <option value="rajiv">Rajiv</option>
     <option value="ashu">Ashu</option>
   </select>
   <!-- <input type="text" class="form-control" name="exe_name" placeholder="Enter Name" value="" required="required"> -->
 </div>
</div>
</div>
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Enter Remark *</label>
   <input type="text" class="form-control" name="bucket_remark" placeholder="Enter message" value="" required="required">
 </div>
</div>
<div class="form-group row m-b-15">
 <div class="col-md-12">
   <label>Select Payment Mode </label>
     <select class="form-control border-input" required="required" name="payment_mode" id="suggested_payment_mode">
       <option value="">-- Select an option --</option>
       <option value="imps">IMPS</option>
       <option value="transfer">Transfer</option>
       <option value="rebound">Rebound</option>
       <option value="ecs">ECS</option>
       <option value="neft">NEFT</option>
       <option value="rtgs">RTGS</option>
       <option value="upi">UPI</option>
       <option value="cash">Cash</option>
     </select>
 </div>
</div>

<button type="button" class="btn btn-primary form-control" name="nextptp" onclick="addbucket_remark()">Submit</button>
     
</div>
</div>

</div>
</div>

<!-- Remark PTP -->
<div id="remarkptp" class="modal fade displayremark" role="dialog">
<?php //include('view_remarks.php'); ?>

<script src="{{asset('admin/js/app.js')}}"></script>
<script src="{{asset('admin/js/default.min.js')}}"></script>
<script src="{{asset('admin/js/apps.min.js')}}"></script> 
<script src="{{asset('admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap-daterangepicker/moment.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('admin/js/demo/render.highlight.js')}}"></script>
<script src="{{asset('admin/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{asset('admin/plugins/powerange/powerange.min.js')}}"></script>
<script src="{{asset('admin/js/demo/form-slider-switcher.demo.min.js')}}"></script>
<script src="{{asset('admin/plugins/d3/d3.min.js')}}"></script>
<script src="{{asset('admin/plugins/nvd3/build/nv.d3.js')}}"></script>
<script src="{{asset('admin/js/demo/chart-d3.demo.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.quicksearch.min.js')}}"></script>
<script src="{{asset('admin/js/sweetalert.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatable/2.0.1/js/datatable.jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatable/2.0.1/js/datatable.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatable/2.0.1/js/datatable.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatable/2.0.1/js/datatable.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>


</body>
</html> 