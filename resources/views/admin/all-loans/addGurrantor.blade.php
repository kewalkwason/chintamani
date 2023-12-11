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
                                    <h4>Add Guarantor</h4>
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
                                        <a href="#!"> Add Guarantor</a>
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
                                    <form class="row g-3" action="{{ route('add.new.gurrantor') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="items" data-group="test">
                                            <div class="card">
                                                <div class="card-body p-4">
                                                    <h5 class="mb-4">Guarantor Details</h5>
                                                    <div class="row g-3">
                                                        <div class="col-md-4">
                                                            <label for="input1" class="form-label">First Name :</label>
                                                            <input type="text" name="first_name" class="form-control shadow" id="input1" placeholder="First Name" value="{{old('first_name')}}">
                                                            @if ($errors->has('first_name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('first_name') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Last Name :</label>
                                                            <input type="text" name="last_name" class="form-control shadow" id="input2" placeholder="Last Name" value="{{old('first_name')}}">
                                                            @if ($errors->has('last_name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('last_name') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Email :</label>
                                                            <input type="text" name="official_mail" class="form-control shadow" id="input2" placeholder="Email Address" value="{{old('official_mail')}}">
                                                            @if ($errors->has('official_mail'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('official_mail') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Phone No. :</label>
                                                            <input type="text" name="phone_no" class="form-control shadow" minlength="10" maxlength="10" id="input2" placeholder="Enter Phone Number" value="{{old('phone_no')}}">
                                                            @if ($errors->has('phone_no'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone_no') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Alternate Email :</label>
                                                            <input type="text" name="alt_email" class="form-control shadow" id="input2" placeholder="Alternate Email Address" value="{{old('alt_email')}}">
                                                            @if ($errors->has('alt_email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('alt_email') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Alternate Phone No. :</label>
                                                            <input type="text" name="alt_phone_no" class="form-control shadow" id="input2" placeholder="Alternate Phone Number" value="{{old('alt_phone_no')}}">
                                                            @if ($errors->has('alt_phone_no'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('alt_phone_no') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Select Gender</label>
                                                            <select name="gender" class="form-control shadow">
                                                                <option value="">Select Gender</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Date of Birth :</label>
                                                            <input type="date" name="d_o_b" class="form-control shadow" id="input2" value="{{old('alt_phone_no')}}">
                                                            @if ($errors->has('d_o_b'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('d_o_b') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Profile Picture :</label>
                                                            <input type="file" name="profile_pic" class="form-control shadow" id="input2" >
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card-body p-4">
                                                    <h5 class="mb-4">Address Details</h5>
                                                    <div class="row g-3">
                                                        <div class="col-md-4">
                                                            <label for="input1" class="form-label">Staying Years :</label>
                                                            <input type="text" name="staying_years" class="form-control shadow" id="input1" placeholder="Staying Years">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Local Address :</label>
                                                            <input type="text" name="local_address" class="form-control shadow" id="input2" placeholder="Local Address">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">State :</label>
                                                            <input type="text" name="address_state" class="form-control shadow" id="input2" placeholder="Enter State">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">City :</label>
                                                            <input type="text" name="address_city" class="form-control shadow" id="input2" placeholder="Enter City">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Pin Code :</label>
                                                            <input type="text" name="pin_code" class="form-control shadow" id="input2" placeholder="Pin Code">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">House Type :</label>
                                                            <select name="house_type" class="form-control shadow">
                                                                <option value="">House Type</option>
                                                                <option value="1">Own/Parents</option>
                                                                <option value="2">Government Provider</option>
                                                                <option value="3">Rented</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body p-4">
                                                    <h5 class="mb-4">Employer Details</h5>
                                                    <div class="row g-3">
                                                        <div class="col-md-4">
                                                            <label for="input1" class="form-label">Salary/Incomes :</label>
                                                            <input type="text" name="take_home_salary" class="form-control shadow" id="input1" placeholder="Salary/Incomes">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Company Name :</label>
                                                            <input type="text" name="company_name" class="form-control shadow" id="input2" placeholder="Company Name">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Company Address :</label>
                                                            <input type="text" name="company_address" class="form-control shadow" id="input2" placeholder="Company Address">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Employment Type :</label>
                                                            <select name="emp_type" class="form-control shadow">
                                                                <option value="">Select an Option</option>
                                                                <option value="Private/LLP">Private/LLP</option>
                                                                <option value="Government">Government</option>
                                                                <option value="MNC">MNC</option>
                                                                <option value="Self Employed">Self Employed</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Salary Mode :</label>
                                                            <select class="form-control shadow" id="salary_mode" name="salary_mode">
                                                                <option value="">Select an Option</option>
                                                                <option value="Bank transfer">Bank transfer</option>
                                                                <option value="Cheque">Cheque</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Working Years :</label>
                                                            <input type="text" name="working_years" class="form-control shadow" id="input2" placeholder="Working Years">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Employee ID :</label>
                                                            <input type="file" name="emp_id" class="form-control shadow" id="input2" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body p-4">
                                                    <h5 class="mb-4">Documents</h5>
                                                    <div class="row g-3">
                                                        <div class="col-md-4">
                                                            <label for="input1" class="form-label">Pan Card No :</label>
                                                            <input type="text" name="pan_card_no" class="form-control shadow" id="input1" placeholder="Pan Card No">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Pan Card Photo :</label>
                                                            <input type="file" name="pan_front" class="form-control shadow" id="input2" placeholder="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Aadhar Card No :</label>
                                                            <input type="text" name="aadhar_card_no" class="form-control shadow" id="input2" placeholder="Aadhar Card No">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Aadhar Front Photo:</label>
                                                            <input type="file" name="aadhar_front" class="form-control shadow" id="input2" placeholder="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Aadhar Back Photo:</label>
                                                            <input type="file" name="aadhar_back" class="form-control shadow" id="input2" placeholder=" ">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Salary Slip 1:</label>
                                                            <input type="file" name="salary_slip1" class="form-control shadow" id="input2" placeholder=" ">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Salary Slip 2:</label>
                                                            <input type="file" name="salary_slip2" class="form-control shadow" id="input2" placeholder="Last Name">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Salary Slip 3:</label>
                                                            <input type="file" name="salary_slip3" class="form-control shadow" id="input2" placeholder="Last Name">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Cheque Upload:</label>
                                                            <input type="file" name="cheque_upload" class="form-control shadow" id="input2" placeholder="Last Name">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Cibil :</label>
                                                            <input type="file" name="cibil_upload" class="form-control shadow" id="input2" placeholder="Last Name">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Other Document:</label>
                                                            <input type="file" name="other_doc" class="form-control shadow" id="input2" placeholder="Last Name">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Bank Statement:</label>
                                                            <input type="file" name="bank_statement" class="form-control shadow" id="input2" placeholder="Last Name">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="input2" class="form-label">Banking Password:</label>
                                                            <input type="file" name="banking_password" class="form-control shadow" id="input2" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-dark px-5 rounded-0">Submit Now</button>
                                                    <button type="reset" class="btn btn-danger px-5 rounded-0"> <i class="fadeIn animated bx bx-refresh"></i> Clear All</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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