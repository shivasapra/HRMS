@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-default mb-1 h3">Employee Details</h2> <hr>
                    <div class="row mt-4">
                        <div class="col-md-3 border-right">
                            <div class="">
                                <div class="image-circle-div"><img class="img-fluid" src="{{asset('app/images/profile.jpg')}}" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center text-primary">Aaditya Nagarath</h3>
                                    <p class="text-center text-gray">Tele Marketing Executive</p>
                                    <div class="list-group mt-4 employee-details border">
                                        <a href="#personal-details" data-toggle="tab" class="list-group-item list-group-item-action active">Personal Details</a>
                                        <a href="#contact-details" data-toggle="tab" class="list-group-item list-group-item-action">Contact Details</a>
                                        <a href="#emergency-details" data-toggle="tab" class="list-group-item list-group-item-action">Emergency Contacts</a>
                                        <a href="#job" data-toggle="tab" class="list-group-item list-group-item-action">Job</a>
                                        <a href="#salary" data-toggle="tab" class="list-group-item list-group-item-action">Salary</a>
                                        <a href="#report-to" data-toggle="tab" class="list-group-item list-group-item-action">Report To</a>
                                        <a href="#qualifications" data-toggle="tab" class="list-group-item list-group-item-action">Qualifications / Documents</a>
                                        <a href="#allowance_services" data-toggle="tab" class="list-group-item list-group-item-action">Allowance / Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 p-0">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personal-details">
                                    <div class="">
                                        <div class="card-header">
                                            Personal Details
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>First Name*</label>
                                                            <input type="text" placeholder="Enter First Name" class="form-control disabled_attribute" name="first_name" value="Aaditya" required disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Middle Name</label>
                                                            <input type="text" placeholder="Enter Middle Name" class="form-control disabled_attribute" name="middle_name" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Last Name*</label>
                                                            <input type="text" placeholder="Enter Last Name" class="form-control disabled_attribute" name="last_name" value="Nagarath" required disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Employee ID</label>
                                                            <input type="text" placeholder="" class="form-control" name="employee_id" value="1526600" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Driving License Number</label>
                                                            <input type="text" placeholder="Enter Driving License Number" class="form-control disabled_attribute" name="driving_license_number" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>License Expiry Date</label>
                                                            <input type="date" placeholder="Enter License Expiry Date" class="form-control disabled_attribute" name="license_expiry_date" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Marital Status</label>
                                                            <select class="form-control disabled_attribute" name="martial_status" disabled>
                                                                <option>---Select---</option>
                                                                <option>Single</option>
                                                                <option>Married</option>
                                                                <option>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nationality</label>
                                                            <select class="form-control disabled_attribute" name="martial_status" disabled>
                                                                <option value="0">-- Select --</option>
                                                                <option value="1">Afghan</option>
                                                                <option value="2">Albanian</option>
                                                                <option value="3">Algerian</option>
                                                                <option value="4">American</option>
                                                                <option value="5">Andorran</option>
                                                                <option value="6">Angolan</option>
                                                                <option value="7">Antiguans</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Date of Birth</label>
                                                            <input type="date" class="form-control disabled_attribute" name="date_of_birth" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <div>
                                                                <div class="form-radio d-inline-block">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input disabled_attribute" name="optionsRadios" id="optionsRadios1" value="" checked disabled> Male
                                                                        <i class="input-helper"></i></label>
                                                                </div>
                                                                <div class="form-radio d-inline-block">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input disabled_attribute" name="optionsRadios" id="optionsRadios1" value="" disabled> Female
                                                                        <i class="input-helper"></i></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="button" id="remove_disabled_class" class="btn btn-success">Edit</button>
                                                            <button type="submit" id="save_details" class="btn btn-success" style="display:none;">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact-details">
                                    <div class="">
                                        <div class="card-header">
                                            Contact Details
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Address Street 1</label>
                                                            <input type="text" placeholder="Enter Address Street 1" class="form-control disabled_attribute" name="address_street_1" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Address Street 2</label>
                                                            <input type="text" placeholder="Enter Address Street 2" class="form-control disabled_attribute" name="address_street_2" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" placeholder="Enter City" class="form-control disabled_attribute" name="city" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>State/Province</label>
                                                            <input type="text" placeholder="Enter State/Province" class="form-control" name="state_province" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Zip/Postal Code</label>
                                                            <input type="text" placeholder="Enter Zip/Postal Code" class="form-control disabled_attribute" name="zip_postal_code" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <select class="form-control disabled_attribute" name="country" disabled>
                                                                <option value="0">-- Select --</option>
                                                                <option value="1">Afghan</option>
                                                                <option value="2">Albanian</option>
                                                                <option value="3">Algerian</option>
                                                                <option value="4">American</option>
                                                                <option value="5">Andorran</option>
                                                                <option value="6">Angolan</option>
                                                                <option value="7">Antiguans</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Home Telephone</label>
                                                            <input type="text" placeholder="Enter Home Telephone" class="form-control disabled_attribute" name="home_telephone" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Mobile</label>
                                                            <input type="text" placeholder="Enter Mobile" class="form-control disabled_attribute" name="mobile" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Work Telephone</label>
                                                            <input type="text" placeholder="Enter Work Telephone" class="form-control disabled_attribute" name="work_telephone" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Work Email</label>
                                                            <input type="text" placeholder="Enter Work Email" class="form-control disabled_attribute" name="work_email" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Other Email</label>
                                                            <input type="text" placeholder="Enter Other Email" class="form-control disabled_attribute" name="other_email" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="button" id="remove_disabled_class" class="btn btn-success">Edit</button>
                                                            <button type="submit" id="save_details" class="btn btn-success" style="display:none;">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="emergency-details">
                                    <div class="">
                                        <div class="card-header">
                                            Emergency Details
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" placeholder="Enter Name" class="form-control disabled_attribute" name="emergency_name" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Mobile</label>
                                                            <input type="text" placeholder="Enter Mobile" class="form-control disabled_attribute" name="mobile" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Relationship</label>
                                                            <input type="text" placeholder="Enter Relationship" class="form-control disabled_attribute" name="relationship" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="button" id="remove_disabled_class" class="btn btn-success">Edit</button>
                                                            <button type="submit" id="save_details" class="btn btn-success" style="display:none;">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="job">
                                    <div class="">
                                        <div class="card-header">
                                            Job Details
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Department</label>
                                                            <select class="form-control disabled_attribute" name="department" disabled required>
                                                                <option value="0">-- Select --</option>
                                                                <option value="0">Accountant</option>
                                                                <option value="0">Collection Manager</option>
                                                                <option value="0">HR Manager</option>
                                                                <option value="0">HR Executive</option>
                                                                <option value="0">Branch Marketing Manager (BMM)</option>
                                                                <option value="0">Tele Marketing Manager (TMM)</option>
                                                                <option value="0">Tele Marketing Supervisor (TMS)</option>
                                                                <option value="0">Tele Marketing Executive (TME)</option>
                                                                <option value="0">Data Operator</option>
                                                                <option value="0">OPC Supervisor</option>
                                                                <option value="0">OPC Executive</option>
                                                                <option value="0">Relationship Manager</option>
                                                                <option value="0">MRD Executive</option>
                                                                <option value="0">Corporate Operations</option>
                                                                <option value="0">Operations Head</option>
                                                                <option value="0">Unit Manager</option>
                                                                <option value="0">Operation Team Manager</option>
                                                                <option value="0">Sr. Travel Consultant</option>
                                                                <option value="0">Travel Consultant</option>
                                                                <option value="0">Cheif Sale Officer</option>
                                                                <option value="0">Relational Manager</option>
                                                                <option value="0">Branch Manager</option>
                                                                <option value="0">Unit Manager</option>
                                                                <option value="0">Sale Team Manager</option>
                                                                <option value="0">Take Over Manager</option>
                                                                <option value="0">Senior Holiday Consultant</option>
                                                                <option value="0">Holiday Consultant</option>
                                                                <option value="0">Business Develop Manager</option>
                                                                <option value="0">Business Develop Executive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Job Title</label>
                                                            <select class="form-control disabled_attribute" name="job_title" disabled required>
                                                                <option value="0">---Select---</option>
                                                                <option value="0">Accountant</option>
                                                                <option value="0">Collection Manager</option>
                                                                <option value="0">HR Manager</option>
                                                                <option value="0">HR Executive</option>
                                                                <option value="0">Branch Marketing Manager (BMM)</option>
                                                                <option value="0">Tele Marketing Manager (TMM)</option>
                                                                <option value="0">Tele Marketing Supervisor (TMS)</option>
                                                                <option value="0">Tele Marketing Executive (TME)</option>
                                                                <option value="0">Data Operator</option>
                                                                <option value="0">OPC Supervisor</option>
                                                                <option value="0">OPC Executive</option>
                                                                <option value="0">Relationship Manager</option>
                                                                <option value="0">MRD Executive</option>
                                                                <option value="0">Corporate Operations</option>
                                                                <option value="0">Operations Head</option>
                                                                <option value="0">Unit Manager</option>
                                                                <option value="0">Operation Team Manager</option>
                                                                <option value="0">Sr. Travel Consultant</option>
                                                                <option value="0">Travel Consultant</option>
                                                                <option value="0">Cheif Sale Officer</option>
                                                                <option value="0">Relational Manager</option>
                                                                <option value="0">Branch Manager</option>
                                                                <option value="0">Unit Manager</option>
                                                                <option value="0">Sale Team Manager</option>
                                                                <option value="0">Take Over Manager</option>
                                                                <option value="0">Senior Holiday Consultant</option>
                                                                <option value="0">Holiday Consultant</option>
                                                                <option value="0">Business Develop Manager</option>
                                                                <option value="0">Business Develop Executive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Employment Status</label>
                                                            <input type="text" placeholder="Enter Employment Status" class="form-control disabled_attribute" value="Full Time Permanent" name="employment_status" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Joined Date</label>
                                                            <input type="date" placeholder="Enter Joinded Date" class="form-control disabled_attribute" name="joined_date" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Location</label>
                                                            <select class="form-control disabled_attribute" name="location" disabled>
                                                                <option value="0">-- Select --</option>
                                                                <option value="1">Afghan</option>
                                                                <option value="2">Albanian</option>
                                                                <option value="3">Algerian</option>
                                                                <option value="4">American</option>
                                                                <option value="5">Andorran</option>
                                                                <option value="6">Angolan</option>
                                                                <option value="7">Antiguans</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <hr>
                                                        <h4 class="mb-3 mt-4">Employment Contract</h4>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Start Date</label>
                                                            <input type="date" placeholder="Enter Start Date" class="form-control disabled_attribute" name="start_date" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>End Date</label>
                                                            <input type="date" placeholder="Enter End Date" class="form-control disabled_attribute" name="end_date" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="button" id="remove_disabled_class" class="btn btn-success">Edit</button>
                                                            <button type="button" id="remove_disabled_class" class="btn btn-danger ml-2">Terminate Employee</button>
                                                            <button type="submit" id="save_details" class="btn btn-success" style="display:none;">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="salary">
                                    <div class="">
                                        <div class="card-header">
                                            Salary Details
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#export_salary" class="btn btn-success">Export</a></div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead class="bg-warning text-white">
                                                    <tr>
                                                        <th>Sr No.</th>
                                                        <th>Date</th>
                                                        <th>Employee ID</th>
                                                        <th>Name</th>
                                                        <th>Monthly Salary</th>
                                                        <th>Monthly Incentive</th>
                                                        <th>Total Paid</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>07/01/2019</td>
                                                        <td>FORBIT001</td>
                                                        <td>Mohd Aslam</td>
                                                        <td>17000</td>
                                                        <td>2000</td>
                                                        <td>19000</td>
                                                        <td><i class="menu-icon mdi mdi-check text-success h4"></i> Successed</td>
                                                        <td><a href="javascript:void(0)" data-toggle="modal" data-target="#salary_details" class="btn btn-primary">View Details</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>07/02/2019</td>
                                                        <td>FORBIT002</td>
                                                        <td>Ankit Mahajan</td>
                                                        <td>17000</td>
                                                        <td>2000</td>
                                                        <td>19000</td>
                                                        <td><i class="menu-icon mdi mdi-check text-success h4"></i> Successed</td>
                                                        <td><a href="javascript:void(0)" data-toggle="modal" data-target="#salary_details" class="btn btn-primary">View Details</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>07/03/2019</td>
                                                        <td>FORBIT003</td>
                                                        <td>Deepika Sharwan</td>
                                                        <td>17000</td>
                                                        <td>2000</td>
                                                        <td>19000</td>
                                                        <td><i class="menu-icon mdi mdi-check text-success h4"></i> Successed</td>
                                                        <td><a href="javascript:void(0)" data-toggle="modal" data-target="#salary_details" class="btn btn-primary">View Details</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>07/04/2019</td>
                                                        <td>FORBIT004</td>
                                                        <td>Vineet Chauhan</td>
                                                        <td>17000</td>
                                                        <td>2000</td>
                                                        <td>19000</td>
                                                        <td><i class="menu-icon mdi mdi-close text-danger h4"></i> Cancelled</td>
                                                        <td><a href="javascript:void(0)" data-toggle="modal" data-target="#salary_details" class="btn btn-primary">View Details</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>07/05/2019</td>
                                                        <td>FORBIT005</td>
                                                        <td>Mohd Zuber</td>
                                                        <td>17000</td>
                                                        <td>2000</td>
                                                        <td>19000</td>
                                                        <td><i class="menu-icon mdi mdi-check text-success h4"></i> Successed</td>
                                                        <td><a href="javascript:void(0)" data-toggle="modal" data-target="#salary_details" class="btn btn-primary">View Details</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>07/06/2019</td>
                                                        <td>FORBIT006</td>
                                                        <td>Chavi Sharma</td>
                                                        <td>17000</td>
                                                        <td>2000</td>
                                                        <td>19000</td>
                                                        <td><i class="menu-icon mdi mdi-close text-danger h4"></i> Cancelled</td>
                                                        <td><a href="javascript:void(0)" data-toggle="modal" data-target="#salary_details" class="btn btn-primary">View Details</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>07/07/2019</td>
                                                        <td>FORBIT007</td>
                                                        <td>Vikas Gupta</td>
                                                        <td>17000</td>
                                                        <td>2000</td>
                                                        <td>19000</td>
                                                        <td><i class="menu-icon mdi mdi-check text-success h4"></i> Successed</td>
                                                        <td><a href="javascript:void(0)" data-toggle="modal" data-target="#salary_details" class="btn btn-primary">View Details</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="report-to">
                                    <div class="">
                                        <div class="card-header">
                                            Report To
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>Add Supervisor</h3>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Name*</label>
                                                            <input type="text" placeholder="Enter Name" class="form-control disabled_attribute" name="name" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Select Supervisor *</label>
                                                            <select class="form-control disabled_attribute" name="select_supervisor" disabled>
                                                                <option>---Select---</option>
                                                                <option value="0">Accountant</option>
                                                                <option value="0">Collection Manager</option>
                                                                <option value="0">HR Manager</option>
                                                                <option value="0">HR Executive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="button" id="remove_disabled_class" class="btn btn-success">Edit</button>
                                                            <button type="submit" id="save_details" class="btn btn-success" style="display:none;">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="qualifications">
                                    <div class="jumbotron p-1">
                                    <div class="card p-0">
                                        <div class="card-header">
                                            Work Experience
                                            <a href="#" class="float-right btn btn-success" data-toggle="modal" data-target="#add_experience"><i class="menu-icon mdi mdi-plus mr-0"></i> ADD</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="media">
                                                        <img src="{{asset('app/images/buildings.png')}}" class="align-self-center mr-3" style="width:60px">
                                                        <div class="media-body text-left">
                                                            <h3>Travelport Pvt Ltd.</h3>
                                                            <h5 class="text-left mb-1">Tele Marketing Executive </h5>
                                                            <h5 class="text-gray text-left">May, 2016 to Dec, 2018</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="media">
                                                        <img src="{{asset('app/images/buildings.png')}}" class="align-self-center mr-3" style="width:60px">
                                                        <div class="media-body text-left">
                                                            <h3>Cox & Kings Pvt Ltd.</h3>
                                                            <h5 class="text-left mb-1">Tele Marketing Executive </h5>
                                                            <h5 class="text-gray text-left">May, 2014 to Dec, 2015</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="jumbotron p-1">
                                    <div class="card p-0">
                                        <div class="card-header">
                                            Skills
                                            <a href="#" class="float-right btn btn-success" data-toggle="modal" data-target="#add_skills"><i class="menu-icon mdi mdi-plus mr-0"></i> ADD</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="skills">
                                                        <li>HTML 5</li>
                                                        <li>CSS 3</li>
                                                        <li>Javascript</li>
                                                        <li>Jquery</li>
                                                        <li>SEO</li>
                                                        <li>Manual Testing</li>
                                                        <li>PHP</li>
                                                        <li>Python</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="jumbotron p-1">
                                        <div class="card p-0">
                                            <div class="card-header">
                                                Attachments
                                                <a href="#" class="float-right btn btn-success" data-toggle="modal" data-target="#upload_attachment"><i class="menu-icon mdi mdi-plus mr-0"></i> ADD</a>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <a class="example-image-link" href="{{asset('app/images/certificate.jpg')}}" data-lightbox="example-1"><img class="example-image img-fluid" src="{{asset('app/images/certificate.jpg')}}" alt="certificate"/></a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a class="example-image-link" href="{{asset('app/images/certificate.jpg')}}" data-lightbox="example-2"><img class="example-image img-fluid" src="{{asset('app/images/certificate.jpg')}}" alt="certificate"/></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="allowance_services">
                                    <div class="">
                                        <div class="card-header">
                                            Allowance & Services
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3>Allowence</h3>
                                                    <div class="form-group">
                                                        <div class="form-check form-check-flat d-inline-block">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">HRA
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-flat d-inline-block">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" checked="">Medical
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-flat d-inline-block">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">TA
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-flat d-inline-block">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">Insurance
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-flat d-inline-block">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">DA
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <h3>Services</h3>
                                                    <div class="form-group">
                                                        <div class="form-check form-check-flat d-inline-block">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">Bus
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-flat d-inline-block">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">Food
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-flat d-inline-block">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">TDS
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-flat d-inline-block">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" checked="">Security
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-flat d-inline-block">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">PF
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-flat d-inline-block">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">ESI
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- The Modal -->
    <div class="modal fade" id="add_experience">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Work Experience</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Organisation Name</label>
                                    <input type="text" placeholder="Enter Name" class="form-control" name="organisation_name"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" placeholder="Enter Mobile" class="form-control" name="designation"/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>From</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                    <select class="form-control" name="month">
                                        <option>---Select Month----</option>
                                        <option>Jan</option>
                                        <option>Feb</option>
                                        <option>Mar</option>
                                        <option>Apr</option>
                                        <option>May</option>
                                        <option>Jun</option>
                                        <option>Jul</option>
                                        <option>Aug</option>
                                        <option>Sep</option>
                                        <option>Oct</option>
                                        <option>Nov</option>
                                        <option>Dec</option>
                                    </select>
                                        </div>
                                        <div class="col-sm-6">
                                    <select class="form-control" name="month">
                                        <option>---Select Year----</option>
                                        <option>2008</option>
                                        <option>2009</option>
                                        <option>2010</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                    </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>To</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select class="form-control" name="month">
                                                <option>---Select Month----</option>
                                                <option>Jan</option>
                                                <option>Feb</option>
                                                <option>Mar</option>
                                                <option>Apr</option>
                                                <option>May</option>
                                                <option>Jun</option>
                                                <option>Jul</option>
                                                <option>Aug</option>
                                                <option>Sep</option>
                                                <option>Oct</option>
                                                <option>Nov</option>
                                                <option>Dec</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="month">
                                                <option>---Select Year----</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <button type="button" id="" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="add_skills">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Skills</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Enter Skill</label>
                                    <input type="text" placeholder="Enter Skill" class="form-control" name="skill"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" id="" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="upload_attachment">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload Attachment</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <input type="file" id="attachment" class="form-control" name="attachment" style="display:none;"/>
                                    <label for="attachment" class="custom-file-upload">
                                        <i class="mdi mdi-cloud-upload"></i>
                                        Upload File</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" id="" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="salary_details">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header text-center">
                    <h4 class="modal-title">Salary Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="">
                        <div class="col-md-12 text-center">
                            <h4>Forbcorp Pvt Ltd.</h4>
                            <h3>Pay slip for the period of <b class="text-primary">February 2019</b>
                            <button type="button" class="btn btn-icons btn-success float-right">
                                <i class="mdi mdi-download"></i>
                            </button>
                            </h3>
                            <hr>
                            <div class="row text-left mt-4 mb-4">
                                <div class="col-md-6">
                                    <p>Employee Id: FORBIT001 <br>
                                        Department: IT <br>
                                        Pay Date: 12/02/2019 <br>
                                        PF Account Number: -- </p>
                                </div>
                                <div class="col-md-6">
                                    <p>Name: Mohd. Aslam <br>
                                        Designation: Web Designer <br>
                                        Date of Joining: 24/01/2019 <br>
                                        Days Worked: 29 Days </p>
                                </div>
                            </div>
                            <div class="table-responsive">
                            <table class="table text-left table-p-10">
                                <thead class="border-top bg-light-gray">
                                <tr>
                                    <th>Earnings</th>
                                    <th class="border-right">Amount</th>
                                    <th>Deductions</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Basic Pay</td>
                                    <td class="border-right">15,000.00</td>
                                    <td>Bus Service</td>
                                    <td>1,500.00</td>
                                </tr>
                                <tr>
                                    <td>Medical Allowance</td>
                                    <td class="border-right">1,500.00</td>
                                    <td>Food Service</td>
                                    <td>2,000.00</td>
                                </tr>
                                <tr>
                                    <td>Insurance Allowance</td>
                                    <td class="border-right">1,500.00</td>
                                    <td>TDS</td>
                                    <td>6,00.00</td>
                                </tr>
                                <tr>
                                    <td>House Rent Allowance</td>
                                    <td class="border-right">4,000.00</td>
                                    <td>Provident Fund</td>
                                    <td>1,200.00</td>
                                </tr>
                                </tbody>
                                <tfooter>
                                    <tr class="font-weight-bold">
                                        <td>Total Earnings</td>
                                        <td class="border-right">22,000.00</td>
                                        <td>Total Deductions</td>
                                        <td>5,300.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="font-weight-bold text-danger text-right p-3" style="font-size:19px;">Net Pay: 16,700.00</td>
                                    </tr>
                                </tfooter>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="export_salary">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Export Salary Slip</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label>From</label>
                                <input type="month" class="form-control" min="2010-01" max="2019-12"/>
                            </div>
                            <div class="col-md-6">
                                <label>To</label>
                                <input type="month" class="form-control" min="2010-01" max="2019-12"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" id="" class="btn btn-success mt-3">Export</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection