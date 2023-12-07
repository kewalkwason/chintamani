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
                           <h4>Search</h4>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                           <li class="breadcrumb-item" style="float: left;">
                              <a href="#!">Home</a>
                           </li>
                           <li class="breadcrumb-item" style="float: left;">
                              <a href="#!">Search</a>
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

                              <div>
                                 <h3>All loan List</h3>
                              </div>
                              <div class="my-3">
                                 <div class="no-b r-0">
                                    <div>
                                       <div class="col-md-12">
                                          <form action="#!" method="get">
                                             <div class="form-row">
                                                <div class="form-group col-md-4">
                                                   <label for="inputEmail4">Start Date</label>
                                                   <input type="date" class="form-control" name="from_date" id="inputEmail4" value="" required="">
                                                </div>
                                                <div class="form-group col-md-4">
                                                   <label for="inputPassword4">End Date</label>
                                                   <input type="date" class="form-control" name="to_date" id="inputPassword4" value="" required="">
                                                </div>
                                                <div class="form-group col-md-2">
                                                   <label for="inputPassword4">Select Executive</label>
                                                   <select name="executive_id" class="form-control">
                                                      <option value="all">All</option>
                                                      <option value="4">Vijay</option>
                                                      <option value="6">Gaurav</option>
                                                      <option value="7">Varsha</option>
                                                      <option value="9">Chamma</option>
                                                      <option value="10">Poonam</option>
                                                      <option value="12">Prashant</option>
                                                      <option value="14">Yashika</option>
                                                      <option value="16">Prashant</option>
                                                      <option value="22">Shalu</option>
                                                      <option value="23">Anjali</option>
                                                      <option value="24">Tanya</option>
                                                      <option value="25">Rupa</option>
                                                      <option value="26">Ruchi</option>
                                                      <option value="28">Kumari </option>
                                                      <option value="32">Ritu</option>
                                                      <option value="34">Sanjana</option>
                                                      <option value="35">Prerna </option>
                                                      <option value="36">Salu</option>
                                                   </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                   <label for="inputPassword6"><br></label><br>
                                                   <input type="submit" class="btn btn-primary" name="filter" value="Filter" id="inputPassword6">
                                                </div>

                                             </div>
                                          </form>

                                          <br>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div>
                                 <div>
                                    <div class="table-responsive">
                                       <table id="dom-table" class="table table-striped table-bordered nowrap">
                                          <thead class="bg-primary text-white">
                                             <tr>
                                                <th> <input type="checkbox" name=""> </th>
                                                <th>S.no</th>
                                                <th>Order ID</th>
                                                <th>Source</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email ID </th>
                                                <th>Salary </th>
                                                <th>Company </th>
                                                <th>Status </th>
                                                <th>Executive Name </th>
                                                <th>Action </th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td><input type="checkbox" name=""></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="view-application.php" class="btn btn-sm btn-danger"> View A</a>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td><input type="checkbox" name=""></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="view-application.php" class="btn btn-sm btn-danger"> View A</a>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td><input type="checkbox" name=""></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="view-application.php" class="btn btn-sm btn-danger"> View A</a>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td><input type="checkbox" name=""></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="view-application.php" class="btn btn-sm btn-danger"> View A</a>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td><input type="checkbox" name=""></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="view-application.php" class="btn btn-sm btn-danger"> View A</a>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td><input type="checkbox" name=""></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="view-application.php" class="btn btn-sm btn-danger"> View A</a>
                                                </td>
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