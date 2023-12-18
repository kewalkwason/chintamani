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
                                          @if(!empty($data->profile_pic))
                                          <img src="{{ asset('uploads/$data->profile_pic')}}" class="img-radius fximsg img-fluid" alt="User-Profile-Image">
                                          @else
                                          <img src="{{ asset('admin\images\user_profile.svg')}}" class="img-radius fximsg img-fluid" alt="User-Profile-Image">
                                          @endif
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
                                          @if(!empty($data->profile_pic))
                                          <img src="{{ asset('uploads/$data->profile_pic')}}" class="img-radius fximsg img-fluid" alt="User-Profile-Image">
                                          @else
                                          <img src="{{ asset('admin\images\user_profile.svg')}}" class="img-radius fximsg img-fluid" alt="User-Profile-Image">
                                          @endif
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
                                       @if(!empty($data->profile_pic))
                                       <img src="{{ asset('uploads/$data->profile_pic')}}" class="img-radius fximsg img-fluid" alt="User-Profile-Image">
                                       @else
                                       <img src="{{ asset('admin\images\user_profile.svg')}}" class="img-radius fximsg img-fluid" alt="User-Profile-Image">
                                       @endif
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-9">
                                 <div class="card-block">
                                    <h2 class="m-b-20 p-b-5 b-b-default f-w-600">Documents </h2>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Aadhaar Card Front </strong>
                                             @if(!empty($data->aadharfront))
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger aadhar-front" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->aadharfront}}" alt="Third slide">' data-toggle="modal" data-target="#aadharfrontModalCenter">View</button>
                                             @else
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger aadhar-front" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->aadhar_front}}" alt="Third slide">' data-toggle="modal" data-target="#aadharfrontModalCenter">View</button>
                                             @endif
                                          </p>
                                       </div>
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Aadhaar card Back</strong>
                                             @if(!empty($data->aadharback))
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->aadharback}}" alt="Third slide">' data-toggle="modal" data-target="#aadharbackModalCenter">View</button>
                                             @else
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->aadhar_back}}" alt="Third slide">' data-toggle="modal" data-target="#aadharbackModalCenter">View</button>
                                             @endif
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Pan Card </strong>
                                             : @if(!empty($data->pancardphoto))
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger pancard-photo" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->pancardphoto}}" alt="Third slide">' data-toggle="modal" data-target="#pancardphotoModalCenter">View</button>
                                             @else
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger pancard-photo" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->pan_card_photo}}" alt="Third slide">' data-toggle="modal" data-target="#pancardphotoModalCenter">View</button>
                                             @endif
                                          </p>
                                       </div>
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Profile picture</strong>
                                             : @if(!empty($data->profilepic))
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger profile-pic" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->profilepic}}" alt="Third slide">' data-toggle="modal" data-target="#profilepicModalCenter">View</button>
                                             @else
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger profile-pic" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->profile_pic}}" alt="Third slide">' data-toggle="modal" data-target="#profilepicModalCenter">View</button>
                                             @endif
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Salary slip 1</strong>
                                             : @if(!empty($data->salary1))
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger salary-slip1" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->salary1}}" alt="Third slide">' data-toggle="modal" data-target="#salaryslip1ModalCenter">View</button>
                                             @else
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger salary-slip1" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->salary_slip1}}" alt="Third slide">' data-toggle="modal" data-target="#salaryslip1ModalCenter">View</button>
                                             @endif
                                          </p>
                                       </div>
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Salary Slip 2 </strong>
                                             : @if(!empty($data->salary2))
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger salary-slip2" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->salary2}}" alt="Third slide">' data-toggle="modal" data-target="#salaryslip2ModalCenter">View</button>
                                             @else
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger salary-slip2" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->salary_slip2}}" alt="Third slide">' data-toggle="modal" data-target="#salaryslip2ModalCenter">View</button>
                                             @endif
                                          </p>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Salary Slip 3 </strong>
                                             : @if(!empty($data->salary3))
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger salary-slip3" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->salary3}}" alt="Third slide">' data-toggle="modal" data-target="#salaryslip3ModalCenter">View</button>
                                             @else
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger salary-slip3" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->salary_slip3}}" alt="Third slide">' data-toggle="modal" data-target="#salaryslip3ModalCenter">View</button>
                                             @endif
                                          </p>
                                       </div>
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Bank statement </strong>
                                             : @if(!empty($data->bankstatement))
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger bank-statement" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->bankstatement}}" alt="Third slide">' data-toggle="modal" data-target="#bankstatementModalCenter">View</button>
                                             @else
                                             <button type="button" class="btn-sm btn alitsBtns hor-grd btn-grd-warning waves-effect md-trigger bank-statement" doc-img='<img class="d-block img-fluid" src="{{asset("uploads")}}/{{$data->bank_statement}}" alt="Third slide">' data-toggle="modal" data-target="#bankstatementModalCenter">View</button>
                                             @endif
                                          </p>
                                       </div>
                                    </div>


                                    <div class="row">
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Employee ID </strong>
                                             : <a class="btn-sm btn alitsBtns hor-grd btn-grd-warning" href="#!">View</a>
                                          </p>
                                       </div>
                                       <div class="col-sm-6">
                                          <p class="m-b-10 nbigSing f-w-900"><strong>Others </strong>
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


               @if($data->application_status=='Processing')
               <div class="col-lg-12">
                  <div class="items" data-group="test">
                     <div class="col-xl-12 col-md-12">
                        <div class="card user-card-full">
                           <div class="row">
                              <div class="col-md-12 card shadow bg-danger">
                                 <h4 class="getInfo">Credit Analytics</h4>
                              </div>
                           </div>
                           <div class="row m-l-0 m-r-0">


                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> <strong>Cibil Score</strong> </label>
                                    <div class="col-sm-3">
                                       <input type="text" disabled="" class="form-control form-control-dark shadow" value="23123 ">
                                    </div>
                                    <div class="col-sm-3">
                                       <button class=" btn hor-grd btn-grd-warning ">View</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"> <strong>Cibil Reports</strong> </label>
                                    <div class="col-sm-3">
                                       <!--  <input type="text" disabled="" class="form-control form-control-dark shadow" value="12345 "> -->
                                       <a href="{{route('get.reports')}}" class=" btn btn-sm hor-grd btn-grd-primary ">Get Report</a>
                                    </div>
                                    <div class="col-sm-3">
                                       <button class=" btn hor-grd btn-grd-warning ">View</button>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> <strong>FI By (Home)</strong> </label>
                                    <div class="col-sm-3">
                                       <input type="text" disabled="" class="form-control form-control-dark shadow" value="Bikash ">
                                    </div>
                                    <div class="col-sm-3">
                                       <button class=" btn hor-grd btn-grd-warning ">View</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"> <strong>Remarks</strong> </label>
                                    <div class="col-sm-3">
                                       <input type="text" disabled="" class="form-control form-control-dark shadow">
                                    </div>
                                    <div class="col-sm-3">
                                       <button class=" btn hor-grd btn-grd-warning ">View</button>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> <strong>FI By (Office)</strong> </label>
                                    <div class="col-sm-3">
                                       <input type="text" disabled="" class="form-control form-control-dark shadow" value="Bikash ">
                                    </div>
                                    <div class="col-sm-3">
                                       <button class=" btn hor-grd btn-grd-warning ">View</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"> <strong>Remarks</strong> </label>
                                    <div class="col-sm-3">
                                       <input type="text" disabled="" class="form-control form-control-dark shadow">
                                    </div>
                                    <div class="col-sm-3">
                                       <button class=" btn hor-grd btn-grd-warning ">View</button>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> <strong>Nature of Default</strong> </label>
                                    <div class="col-sm-3">
                                       <input type="text" disabled="" class="form-control form-control-dark shadow" value="123123 ">
                                    </div>
                                    <div class="col-sm-3">
                                       <button class=" btn hor-grd btn-grd-warning ">View</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"> <strong>Latest Default:</strong> </label>
                                    <div class="col-sm-3">
                                       <input type="text" disabled="" class="form-control form-control-dark shadow">
                                    </div>
                                    <div class="col-sm-3">
                                       <button class=" btn hor-grd btn-grd-warning ">View</button>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> <strong>Cheqe Return</strong> </label>
                                    <div class="col-sm-3">
                                       <input type="text" disabled="" class="form-control form-control-dark shadow" value="123123 ">
                                    </div>
                                    <div class="col-sm-3">
                                       <button class=" btn hor-grd btn-grd-warning ">View</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"> <strong>Salary Date:</strong> </label>
                                    <div class="col-sm-3">
                                       <input type="text" disabled="" class="form-control form-control-dark shadow">
                                    </div>
                                    <div class="col-sm-3">
                                       <button class=" btn hor-grd btn-grd-warning ">View</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"> <strong>Income Proof</strong> </label>
                                    <div class="col-sm-3">
                                       <input type="text" disabled="" class="form-control form-control-dark shadow">
                                    </div>
                                    <div class="col-sm-3">
                                       <button class=" btn hor-grd btn-grd-warning ">View</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group row">
                                    <label class="col-sm-4 col-form-label"> <strong>Current Loan:</strong> </label>
                                    <div class="col-sm-3">
                                       <input type="text" disabled="" class="form-control form-control-dark shadow">
                                    </div>
                                    <div class="col-sm-3">

                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endif




               <div class="col-lg-12">
                  <div class="items card-body" data-group="test">
                     @if($data->application_status=='Verify')
                     @if($data->type=='dsa')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Reverification" class="btn btn-danger btn-verify">Reverification</a>
                     @endif
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Pending" class="btn btn-primary btn-verify">Verify</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Rejected" class="btn btn-danger btn-verify">Reject</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Decline" class="btn btn-dark btn-verify">Decline</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="RTC" class="btn btn-success btn-verify">Refer To Credit</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @elseif($data->application_status=='Reverification')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Pending" class="btn btn-primary btn-verify">Verify</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Processing" class="btn btn-success btn-verify">Processing</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Hold" class="btn btn-warning btn-verify">Hold</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Rejected" class="btn btn-danger btn-verify">Reject</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Decline" class="btn btn-dark btn-verify">Decline</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="RTC" class="btn btn-info btn-verify">Refer To Credit</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @elseif($data->application_status=='Pending')
                     @if($data->type=='dsa')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Reverification" class="btn btn-danger btn-verify">Reverification</a>
                     @endif
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Processing" class="btn btn-success btn-verify">Processing</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Hold" class="btn btn-warning btn-verify">Hold</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Rejected" class="btn btn-danger btn-verify">Reject</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Decline" class="btn btn-dark btn-verify">Decline</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="RTC" class="btn btn-info btn-verify">Refer To Credit</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @elseif($data->application_status=='Reject')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Processing" class="btn btn-success btn-verify">Processing</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Hold" class="btn btn-warning btn-verify">Hold</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Rejected" class="btn btn-danger btn-verify">Reject</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Decline" class="btn btn-dark btn-verify">Decline</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="RTC" class="btn btn-info btn-verify">Refer To Credit</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @elseif($data->application_status=='Hold')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Processing" class="btn btn-success btn-verify">Processing</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Rejected" class="btn btn-danger btn-verify">Reject</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Decline" class="btn btn-dark btn-verify">Decline</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="RTC" class="btn btn-info btn-verify">Refer To Credit</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @elseif($data->application_status=='Processing')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Approved" class="btn btn-success btn-verify">Approve Loan</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Hold" class="btn btn-warning btn-verify">Hold</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Rejected" class="btn btn-danger btn-verify">Reject</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Decline" class="btn btn-dark btn-verify">Decline</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="RTC" class="btn btn-info btn-verify">Refer To Credit</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @elseif($data->application_status=='Approved')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Sanction" class="btn btn-success btn-verify">Sanction Loans</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Hold" class="btn btn-warning btn-verify">Hold</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Rejected" class="btn btn-danger btn-verify">Reject</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Decline" class="btn btn-dark btn-verify">Decline</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="RTC" class="btn btn-info btn-verify">Refer To Credit</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @elseif($data->application_status=='Sanction')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-amount="{{$data->loan_amount}}" loan-status="Disbursed" class="btn btn-success btn-verify">Disburse Loans</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Hold" class="btn btn-warning btn-verify">Hold</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Rejected" class="btn btn-danger btn-verify">Reject</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Decline" class="btn btn-dark btn-verify">Decline</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="RTC" class="btn btn-info btn-verify">Refer To Credit</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @elseif($data->application_status=='Folder')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Approved" class="btn btn-success btn-verify">Approve Loan</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Processing" class="btn btn-success btn-verify">Processing</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Hold" class="btn btn-warning btn-verify">Hold</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Rejected" class="btn btn-danger btn-verify">Reject</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Decline" class="btn btn-dark btn-verify">Decline</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="RTC" class="btn btn-info btn-verify">Refer To Credit</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @elseif($data->application_status=='Rejected')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Hold" class="btn btn-warning btn-verify">Hold</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Processing" class="btn btn-success btn-verify">Processing</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Approved" class="btn btn-success btn-verify">Approve Loan</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Rejected" class="btn btn-danger btn-verify">Reject</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Decline" class="btn btn-dark btn-verify">Decline</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="RTC" class="btn btn-info btn-verify">Refer To Credit</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @elseif($data->application_status=='Decline')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Processing" class="btn btn-success btn-verify">Processing</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Approved" class="btn btn-success btn-verify">Approve Loan</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="RTC" class="btn btn-info btn-verify">Refer To Credit</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @elseif($data->application_status=='RTC')
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Hold" class="btn btn-warning btn-verify">Hold</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Processing" class="btn btn-success btn-verify">Processing</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Approved" class="btn btn-success btn-verify">Approve Loan</a>
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal1" data-id="{{$data->s_no}}" order-id="{{$data->order_id}}" loan-status="Rejected" class="btn btn-danger btn-verify">Reject</a>
                     @if($data->is_gurrantor== 1)
                     <a href="JavaScript:void(0);" data-toggle="modal" data-target="#myModal10" customer_id="{{$data->s_no}}" order-id="{{$data->order_id}}" class="btn btn-success btn-verify">View G</a>
                     @endif

                     @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="styleSelector"></div>
</div>

@include('admin.all-loans.loan_model')

<script>
   $(document).on('click', '.md-trigger', function() {
      var doc_img = $(this).attr('doc-img');
      $('#doc_img').html(doc_img);
      // alert(doc_img);
   });
   $(document).on('click', '.aadhar-front', function() {
      var doc_img = $(this).attr('doc-img');
      $('#aadhar_front').html(doc_img);

   });
   $(document).on('click', '.pancard-photo', function() {
      var doc_img = $(this).attr('doc-img');
      $('#pancard_photo').html(doc_img);

   });
   $(document).on('click', '.profile-pic', function() {
      var doc_img = $(this).attr('doc-img');
      $('#profile_pic').html(doc_img);

   });
   $(document).on('click', '.salary-slip1', function() {
      var doc_img = $(this).attr('doc-img');
      $('#salary_slip1').html(doc_img);
   });
   $(document).on('click', '.salary-slip2', function() {
      var doc_img = $(this).attr('doc-img');
      $('#salary_slip2').html(doc_img);
   });
   $(document).on('click', '.salary-slip3', function() {
      var doc_img = $(this).attr('doc-img');
      $('#salary_slip3').html(doc_img);
   });
   $(document).on('click', '.bank-statement', function() {
      var doc_img = $(this).attr('doc-img');
      $('#bank_statement').html(doc_img);
   });


   $(document).on('click', '.btn-verify', function() {
      var id = $(this).attr('data-id');
      var order_id = $(this).attr('order-id');
      var status = $(this).attr('loan-status');
      $('#apply_id').val(id);
      $('#order_id').val(order_id);
      $('#application_status').val(status);
   });

   function verifyUser() {
      var data_id = $("input[name=apply_id]").val();
      var order_id = $("input[name=order_id]").val();
      var application_status = $("input[name=application_status]").val();
      var message = $("textarea[name=message]").val();

      $.ajax({
         url: "{{ route('loan.verify') }}",
         method: "POST",
         data: {
            'data_id': data_id,
            'order_id': order_id,
            'application_status': application_status,
            'message': message,
         },
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         beforeSend: function() {
            $('.loader-bg').show();
         },
         complete: function() {
            $('.loader-bg').hide();
         },
         success: function(result) {

            $('#closeButton1').click();
            Swal.fire('Successfully!', 'Loan Status Changed..', 'success');
            location.reload();
            table_schedule();


         }
      });

   }
</script>
@endsection