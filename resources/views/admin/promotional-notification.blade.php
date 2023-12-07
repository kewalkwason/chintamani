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
                           <h4>Promotional & Notification</h4>
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
                              <a href="#!"> Promotional & Notification</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="page-body">
               <div class="row">
                  <div class="col-lg-12">

                     <div>
                        <div>
                           <div class="items" data-group="test">

                              <div class="card">
                                 <div class="card-body">
                                    <form class="row g-3">
                                       <div class="col-md-8">
                                          <label for="input1" class="form-label">Select Excel File * :</label>
                                          <input type="file" class="form-control" name="">
                                       </div>


                                       <div class="col-md-3">
                                          <div class="mts100s">
                                             <button type="button" class="btn btn-dark px-5">Upload </button>
                                          </div>
                                       </div>


                                    </form>

                                 </div>
                              </div>


                              <div>
                                 <div>
                                    <div class="table-responsive">
                                       <table id="dom-table" class="table wtHolder table-striped table-bordered nowrap">
                                          <thead class="bg-primary text-white">
                                             <tr>
                                                <th>S.no</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Amount</th>
                                                <th>Date</th>

                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>01</td>
                                                <td>Bikash Sharma </td>
                                                <td>778298992</td>
                                                <td>ashaaggarwal57@gamil.com</td>
                                                <td>6000</td>
                                                <td>29-09-2023</td>

                                             </tr>

                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">SMS Section</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Email Section</a>
                        </li>

                     </ul>
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                           <select class="form-control border-input" name="smstype" id="smstype" onchange="selectmsgType(this)">
                              <option value="">--Select an option--</option>
                              <option>Promotion Message</option>
                              <option>Reminder messages</option>
                           </select>
                           <br>
                           <textarea type="text" class="form-control border-input" placeholder="Message" name="text" id="text" value="" autofocus=""></textarea>

                           <br>
                           <button class="btn btn-danger">Send Now</button>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                           <input type="text" class="form-control border-input" placeholder="Subject" name="subject" id="subject" value="" required="required" autofocus="">
                           <br>
                           <textarea type="text" class="form-control border-input" placeholder="Message" name="mailBody" id="mailBody" value="" required="required" autofocus=""></textarea>

                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <div id="styleSelector"></div>
   </div>
</div>
@endsection