@extends('admin.layouts.master')
@section('content')
<div class="pcoded-content">
   <div class="pcoded-inner-content">
      <div class="main-body">

         <div class="page-wrapper">
            <div class="page-header">
               <div class="row align-items-end">
                  <div class="col-lg-8">
                     <div class="page-header-title">
                        <div class="d-inline">
                           <h4>Customer Details</h4>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                           <li class="breadcrumb-item" style="float: left;">
                              <a href="index.php">Home</a>
                           </li>
                           <li class="breadcrumb-item" style="float: left;">
                              <a href="#!">Add Gurantor</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>

            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="card-block">
                     <h3 class="sub-title">(Loan Amount: Rs. {{$data->loan_amount}})(Tenure: {{$data->tenure_month}} Month )</h3>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card-block" style="float:right;">
                     <button class="btn btn-grd-primary ">Whatsapp</button>
                     <button class="btn btn-grd-success">Remarks</button>
                     <button class="btn btn-grd-info ">Edit</button>
                     <button class="btn btn-grd-warning ">CallBack</button>

                  </div>
               </div>
            </div>
            <div class="page-body">
               <div class="row">
                  <div class="col-lg-12">

                     <div class="items" data-group="test">
                        <div class="col-xl-12 col-md-12">
                           <div class="card user-card-full">
                              <div class="row">
                                 <div class="col-md-12 card shadow bg-danger">
                                    <h4 class="getInfo">Personal Details</h4>
                                 </div>
                              </div>
                              <div class="row m-l-0 m-r-0">
                                 <div class="col-sm-3  user-profile">
                                    <div class="card-block text-center text-white">
                                       <div class="m-b-25">
                                          <img src="{{ asset('uploads/$data->profile_pic')}}" class="img-radius fximsg img-fluid" alt="User-Profile-Image">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-9">
                                    <div class="card-block">
                                       <h2 class="m-b-20 p-b-5 b-b-default f-w-600">Personal Details </h2>
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>First Name</strong>
                                                : {{$data->first_name}}
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Last Name</strong>
                                                : {{$data->last_name}}
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Date of Birth </strong>
                                                : {{date('d/m/Y', strtotime($data->d_o_b))}}
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Phone Number</strong>
                                                : {{$data->phone_no}}
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Alternate Number</strong>
                                                : {{$data->alt_phone_no}}
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Marital Status </strong>
                                                : {{$data->marital_status}}
                                             </p>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Email</strong>
                                                : {{$data->official_mail}}
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Local Address </strong>
                                                : {{$data->local_address}}
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Spouse Name</strong>
                                                : {{$data->spouse_name}}
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Spouse Phone </strong>
                                                : {{$data->spouse_phone}}
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Spouse Occupation</strong>
                                                : {{$data->spouse_occupation}}
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Pancard no </strong>
                                                : {{$data->pan_card_no}}
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Aadhar No</strong>
                                                : {{$data->aadhar_card_no}}
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Employment Type </strong>
                                                : {{$data->emp_type}}
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>House Type</strong>
                                                : {{$data->house_type}}
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Staying Years </strong>
                                                : {{$data->staying_years}}
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-4">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>State</strong>
                                                :{{$data->address_state}}
                                             </p>
                                          </div>
                                          <div class="col-sm-4">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>City </strong>
                                                : {{$data->address_city}}
                                             </p>
                                          </div>
                                          <div class="col-sm-4">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Pincode </strong>
                                                : {{$data->pin_code}}
                                             </p>
                                          </div>
                                       </div>


                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="items" data-group="test">
                        <div class="col-xl-12 col-md-12">
                           <div class="card user-card-full">
                              <div class="row">
                                 <div class="col-md-12 card shadow bg-danger">
                                    <h4 class="getInfo">Company Details:</h4>
                                 </div>
                              </div>
                              <div class="row m-l-0 m-r-0">
                                 <div class="col-sm-3  user-profile">
                                    <div class="card-block text-center text-white">
                                       <div class="m-b-25">
                                          <img src="{{ asset('uploads/$data->profile_pic')}}" class="img-radius fximsg img-fluid" alt="User-Profile-Image">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-9">
                                    <div class="card-block">
                                       <h2 class="m-b-20 p-b-5 b-b-default f-w-600">Company Details: </h2>
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Company name</strong>
                                                : {{$data->company_name}}
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Company address</strong>
                                                : {{$data->company_address}}
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Salary/ITR </strong>
                                                : ₹{{$data->take_home_salary}}
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Working years</strong>
                                                : {{$data->working_years}} years
                                             </p>
                                          </div>
                                       </div>
                                       <!-- <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Company Email</strong>
                                                : info@chinatamani.com
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>State </strong>
                                                : Delhi
                                             </p>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>City</strong>
                                                : Nirman Vihar
                                             </p>
                                          </div>
                                          <div class="col-sm-6">
                                             <p class="m-b-10 nbigSing f-w-900"><strong>Pincode </strong>
                                                : 83838
                                             </p>
                                          </div>
                                       </div> -->

                                    </div>


                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-12">
                  <div class="items" data-group="test">
                     <div class="col-xl-12 col-md-12">
                        <div class="card user-card-full">
                           <div class="row">
                              <div class="col-md-12 card shadow bg-danger">
                                 <h4 class="getInfo">Documents</h4>
                              </div>
                           </div>
                           <div class="row m-l-0 m-r-0">
                              <div class="col-sm-3  user-profile">
                                 <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                       <img src="images/user_profile.svg" class="img-radius fximsg img-fluid" alt="User-Profile-Image">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-9">
                                 <div class="card-block">
                                    <h2 class="m-b-20 p-b-5 b-b-default f-w-600">Documents </h2>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Aadhaar Card Front </strong>
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger" data-toggle="modal" data-target="#exampleModalCenter">View</button>
                                          </p>
                                       </div>
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Aadhaar card Back</strong>
                                             : <a class="btn-sm btn alitsBtns hor-grd btn-grd-warning" href="#!">View </a>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Pan Card </strong>
                                             : <a class="btn-sm btn alitsBtns hor-grd btn-grd-warning" href="#!">View</a>
                                          </p>
                                       </div>
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Profile picture</strong>
                                             : <a class="btn-sm btn alitsBtns hor-grd btn-grd-warning" href="#!">View</a>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Salary slip 1</strong>
                                             : <a class="btn-sm btn alitsBtns hor-grd btn-grd-warning" href="#!">View</a>
                                          </p>
                                       </div>
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Salary Slip 2 </strong>
                                             : <a class="btn-sm btn alitsBtns hor-grd btn-grd-warning" href="#!">View </a>
                                          </p>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Salary Slip 3 </strong>
                                             : <a class="btn-sm btn alitsBtns hor-grd btn-grd-warning" href="#!">View</a>
                                          </p>
                                       </div>
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Bank statement </strong>
                                             : <a class="btn-sm btn alitsBtns hor-grd btn-grd-warning" href="#!">View</a>
                                          </p>
                                       </div>
                                    </div>

                                 </div>


                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-12">
                  <div class="items  card-body" data-group="test">
                     <a href="#!" class="btn btn-danger">Reverification</a>
                     <a href="#!" class="btn btn-primary">Verify</a>
                     <a href="#!" class="btn btn-warning">Reject</a>
                     <a href="#!" class="btn btn-danger">Decline</a>
                     <a href="#!" class="btn btn-success">Refer To Credit</a>
                     <a href="#!" class="btn btn-success">View G</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="styleSelector"></div>
</div>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <!--  -->
            <div class="owl-carousel carousel-nav owl-theme">
               <div>
                  <img class="d-block img-fluid" src="files/assets/images/slider/slider5.jpg" alt="Third slide">
               </div>
               <div>
                  <img class="d-block img-fluid" src="files/assets/images/slider/slider6.jpg" alt="Third slide">
               </div>
               <div>
                  <img class="d-block img-fluid" src="files/assets/images/slider/slider7.jpg" alt="Third slide">
               </div>
            </div>
            <!--  -->
         </div>
         <div class="modal-footer  fiterstyt">
            <button type="button" class="btn btn-danger">View</button>
            <button type="button" class="btn btn-primary">Print</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
@endsection