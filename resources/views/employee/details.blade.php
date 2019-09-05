@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card load">
                <div class="card-body">
                    <h2 class="text-default mb-1 h3">Employee Details</h2> <hr>
                    <div class="row mt-4">
                        <div class="col-md-3 border-right">
                            <div class="">
                                <div class="image-circle-div"><img class="img-fluid" src="{{asset($employee->avatar)}}" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center text-primary">{{$employee->first_name.' '.$employee->last_name}}</h3>
                                    <p class="text-center text-gray">{{$employee->JobDetails->job_title}}</p>
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
                                            <form method="post" id="pd" action="{{route('employee.personalDetails.update',$employee)}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>First Name*</label>
                                                            <input type="text" placeholder="Enter First Name" class="form-control disabled_attribute" name="first_name" value="{{$employee->first_name}}" required disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Middle Name</label>
                                                            <input type="text" placeholder="Enter Middle Name" class="form-control disabled_attribute" name="middle_name" value="{{$employee->middle_name}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Last Name*</label>
                                                            <input type="text" placeholder="Enter Last Name" class="form-control disabled_attribute" name="last_name" value="{{$employee->last_name}}" required disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Employee ID</label>
                                                            <input type="text" placeholder="" class="form-control" name="unique_id" value="{{$employee->unique_id}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Driving License Number</label>
                                                            <input type="text" placeholder="Enter Driving License Number" value="{{$employee->driving_license_number}}" class="form-control disabled_attribute" name="driving_license_number" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>License Expiry Date</label>
                                                            <input type="date" placeholder="Enter License Expiry Date" value="{{$employee->license_expiry_date}}" class="form-control disabled_attribute" name="license_expiry_date" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Marital Status</label>
                                                            <select class="form-control disabled_attribute" name="marital_status" disabled>
                                                                <option value="">---Select---</option>
                                                                <option value="single" {{($employee->marital_status == 'single')? 'selected' : ''}}>Single</option>
                                                                <option value="married" {{($employee->marital_status == 'married')? 'selected' : ''}}>Married</option>
                                                                <option value="other" {{($employee->marital_status == 'other')? 'selected' : ''}}>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nationality</label>
                                                            <input type="text" name="nationality" value="{{$employee->nationality}}" class="form-control disabled_attribute" placeholder="Enter Nationality " disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Date of Birth</label>
                                                            <input type="date" class="form-control disabled_attribute" name="DOB" value="{{$employee->DOB}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <div>
                                                                <div class="form-radio d-inline-block">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input disabled_attribute" {{($employee->gender == 'Male')? 'checked' : ''}} name="gender" id="optionsRadios1" value="Male"  disabled> Male
                                                                        <i class="input-helper"></i></label>
                                                                </div>
                                                                <div class="form-radio d-inline-block">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input disabled_attribute" {{($employee->gender == 'Female')? 'checked' : ''}} name="gender" id="optionsRadios1" value="Female"  disabled> Female
                                                                        <i class="input-helper"></i></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-success remove_disabled_class">Edit</button>
                                                            <button type="submit" class="btn btn-success save_details" style="display:none;">Save</button>
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
                                            <form method="post" id="cd" action="{{route('employee.contactDetails.update',$employee)}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Address Street 1</label>
                                                            <input type="text" placeholder="Enter Address Street 1" class="form-control disabled_attribute" name="address_street_one" @if($employee->ContactDetails) value="{{$employee->ContactDetails->address_street_one}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Address Street 2</label>
                                                            <input type="text" placeholder="Enter Address Street 2" class="form-control disabled_attribute" name="address_street_two" @if($employee->ContactDetails) value="{{$employee->ContactDetails->address_street_one}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" placeholder="Enter City" class="form-control disabled_attribute" name="city" @if($employee->ContactDetails) value="{{$employee->ContactDetails->city}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>State/Province</label>
                                                            <input type="text" placeholder="Enter State/Province" class="form-control disabled_attribute" name="state" @if($employee->ContactDetails) value="{{$employee->ContactDetails->state}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Zip/Postal Code</label>
                                                            <input type="text" placeholder="Enter Zip/Postal Code" class="form-control disabled_attribute" name="postal_code" @if($employee->ContactDetails) value="{{$employee->ContactDetails->postal_code}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <input type="text" placeholder="Enter Country" class="form-control disabled_attribute" name="country" @if($employee->ContactDetails) value="{{$employee->ContactDetails->country}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Home Telephone</label>
                                                            <input type="text" placeholder="Enter Home Telephone" class="form-control disabled_attribute" name="home_phone" @if($employee->ContactDetails) value="{{$employee->ContactDetails->home_phone}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Mobile</label>
                                                            <input type="text" placeholder="Enter Mobile" class="form-control disabled_attribute" name="mobile" @if($employee->ContactDetails) value="{{$employee->ContactDetails->mobile}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Work Telephone</label>
                                                            <input type="text" placeholder="Enter Work Telephone" class="form-control disabled_attribute" name="work_phone" @if($employee->ContactDetails) value="{{$employee->ContactDetails->work_phone}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Work Email</label>
                                                            <input type="email" placeholder="Enter Work Email" class="form-control disabled_attribute" name="work_email" @if($employee->ContactDetails) value="{{$employee->ContactDetails->work_email}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Other Email</label>
                                                            <input type="email" placeholder="Enter Other Email" class="form-control disabled_attribute" name="other_email" @if($employee->ContactDetails) value="{{$employee->ContactDetails->other_email}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-success remove_disabled_class">Edit</button>
                                                            <button type="submit" class="btn btn-success save_details" style="display:none;">Save</button>
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
                                            <form method="post" id="cd" action="{{route('employee.emerContactDetails.update',$employee)}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" placeholder="Enter Name" class="form-control disabled_attribute" @if($employee->ContactDetails) value="{{$employee->ContactDetails->emergency_name}}" @endif name="emergency_name" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Mobile</label>
                                                            <input type="text" placeholder="Enter Mobile" class="form-control disabled_attribute" @if($employee->ContactDetails) value="{{$employee->ContactDetails->emergency_mobile}}" @endif name="emergency_mobile" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Relationship</label>
                                                            <input type="text" placeholder="Enter Relationship" class="form-control disabled_attribute" name="emergency_relationship" @if($employee->ContactDetails) value="{{$employee->ContactDetails->emergency_relationship}}" @endif disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-success remove_disabled_class">Edit</button>
                                                            <button type="submit" class="btn btn-success save_details" style="display:none;">Save</button>
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
                                            <form method="post" id="cd" action="{{route('employee.jobDetails.update',$employee)}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Department*</label>
                                                            <select class="form-control disabled_attribute" id="department" class="disabled_attribute form-control" onchange="extractJobTitles(this)" name="department" disabled required>
                                                                <option value="">-- Select --</option>
                                                                @foreach(App\DepartmentSettings::all() as $d)
                                                                    <option {{($employee->JobDetails->department == $d->name)?'selected':''}} value="{{$d->id}}">{{$d->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Job Title*</label>
                                                            <div id="job-append">
                                                                <select class="form-control disabled_attribute" id="job_title" name="job_title" disabled required>
                                                                    <option value="">{{$employee->JobDetails->job_title}}</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Employment Status</label>
                                                            <input type="text" placeholder="Enter Employment Status" class="form-control disabled_attribute" value="{{$employee->JobDetails->employment_status}}" name="employment_status" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Joined Date</label>
                                                            <input type="date" placeholder="Enter Joinded Date" class="form-control disabled_attribute" name="joined_date" value="{{$employee->JobDetails->joined_date}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Location</label>
                                                            <input type="text" placeholder="Enter Location" class="form-control disabled_attribute" name="location" value="{{$employee->JobDetails->location}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <hr>
                                                        <h4 class="mb-3 mt-4">Employment Contract</h4>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Start Date</label>
                                                            <input type="date" placeholder="Enter Start Date" class="form-control disabled_attribute" name="employment_contract_start_date" value="{{$employee->JobDetails->employment_contract_start_date}}" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>End Date</label>
                                                            <input type="date" placeholder="Enter End Date" class="form-control disabled_attribute" name="employment_contract_end_date" value="{{$employee->JobDetails->employment_contract_end_date}}" disabled/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-success remove_disabled_class">Edit</button>
                                                            <button type="submit" class="btn btn-success save_details" style="display:none;">Save</button>
                                                            <button type="button"  class="btn btn-danger ml-2">Terminate Employee</button>
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
                                            <form method="post" id="pd" action="{{route('employee.reportToDetails.update',$employee)}}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>Add Supervisor</h3>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Name*</label>
                                                            <input type="text" placeholder="Enter Name" class="form-control disabled_attribute" value="{{$employee->report_to_name}}" name="report_to_name" disabled/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Select Supervisor*</label>
                                                            <select class="form-control disabled_attribute" name="report_to_supervisor" disabled>
                                                                <option>---Select---</option>
                                                                @foreach(App\JobtitleSettings::all() as $j)
                                                                    <option value="{{$j->name}}">{{$j->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-success remove_disabled_class">Edit</button>
                                                            <button type="submit" class="btn btn-success save_details" style="display:none;">Save</button>
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
                                            @foreach($employee->WorkExperience->chunk(2) as $chunk)
                                                <div class="row">
                                                    @foreach($chunk as $we)
                                                        <div class="col-md-6">
                                                            <div class="media">
                                                                <img src="{{asset('app/images/buildings.png')}}" class="align-self-center mr-3" style="width:60px">
                                                                <div class="media-body text-left">
                                                                    <h3>{{$we->organisation_name}}</h3>
                                                                    <h5 class="text-left mb-1">{{$we->designation}} </h5>
                                                                    <h5 class="text-gray text-left">{{$we->from_month}}, {{$we->from_year}} to {{$we->to_month}}, {{$we->to_year}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div><br>
                                            @endforeach
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
                                                        @foreach($employee->skills as $skill)
                                                            <li>{{$skill->skills}}</li>
                                                        @endforeach
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
                                                @foreach($employee->attachments->chunk(4) as $chunk)
                                                <div class="row">
                                                    @foreach($chunk as $a)
                                                        <div class="col-md-3">
                                                            <a class="example-image-link" href="javascript:void(0)" data-lightbox="example-1"><img class="example-image img-fluid" src="{{asset($a->attachments)}}" alt="certificate"/></a>
                                                        </div>
                                                    @endforeach
                                                </div><br>
                                                @endforeach
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
                                            <form action="{{route('employee.services.allowances.update',$employee)}}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>Allowance</h3>
                                                        <div class="form-group">
                                                            @foreach (App\AllowanceSettings::all() as $a)
                                                                <div class="form-check form-check-flat d-inline-block">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" value="{{$a->id}}" {{($employee->Allowances->pluck('name')->contains($a->name))? 'checked' : ''}} name="allowances[]" class="form-check-input">{{$a->name}}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-3">
                                                        <h3>Services</h3>
                                                        <div class="form-group">
                                                            @foreach (App\ServiceSettings::all() as $s)
                                                                <div class="form-check form-check-flat d-inline-block">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" value="{{$s->id}}" {{($employee->Services->pluck('name')->contains($s->name))? 'checked' : ''}} name="services[]" class="form-check-input">{{$s->name}}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-success">Save</button>
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
                    <form method="POST" action="{{route('employee.workExperience.add',$employee)}}">
                        @csrf
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
                                    <select class="form-control" name="from_month">
                                        <option value="">---Select Month----</option>
                                        <option value="Jan">Jan</option>
                                        <option value="Feb">Feb</option>
                                        <option value="Mar">Mar</option>
                                        <option value="Apr">Apr</option>
                                        <option value="May">May</option>
                                        <option value="Jun">Jun</option>
                                        <option value="Jul">Jul</option>
                                        <option value="Aug">Aug</option>
                                        <option value="Sep">Sep</option>
                                        <option value="Oct">Oct</option>
                                        <option value="Nov">Nov</option>
                                        <option value="Dec">Dec</option>
                                    </select>
                                        </div>
                                        <div class="col-sm-6">
                                        <input type="text" maxlength="4" minlength="4" pattern="\d*" name="from_year" placeholder="Enter Year" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>To</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select class="form-control" name="to_month">
                                                <option value="">---Select Month----</option>
                                                <option value="Jan">Jan</option>
                                                <option value="Feb">Feb</option>
                                                <option value="Mar">Mar</option>
                                                <option value="Apr">Apr</option>
                                                <option value="May">May</option>
                                                <option value="Jun">Jun</option>
                                                <option value="Jul">Jul</option>
                                                <option value="Aug">Aug</option>
                                                <option value="Sep">Sep</option>
                                                <option value="Oct">Oct</option>
                                                <option value="Nov">Nov</option>
                                                <option value="Dec">Dec</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" maxlength="4" minlength="4" pattern="\d*" name="to_year" placeholder="Enter Year" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit"  class="btn btn-success">Save</button>
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
                    <form method="POST" action="{{route('employee.skills.add',$employee)}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Enter Skill</label>
                                    <input type="text" placeholder="Enter Skill" class="form-control" name="skills"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Save</button>
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
                    <form method="POST" action="{{route('employee.attachment.add',$employee)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <input type="file" id="attachment" class="form-control" name="attachments" accept="image/*" required style="display:none;"/>
                                    <label for="attachment" class="custom-file-upload">
                                        <i class="mdi mdi-cloud-upload"></i>
                                        Upload File</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" id="" class="btn btn-success">Save</button>
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
@section('scripts')
    <script>
        function extractJobTitles(temp){
            var did = temp.value;
            @foreach(App\DepartmentSettings::all() as $d)
                var fetched_id = JSON.parse({{$d->id}});
                if(did == fetched_id){
                    var data =
                    '<select class="form-control" id="job_title" name="job_title" required>'+
                        '<option value="">--Select--</option>'+
                        '@foreach($d->JobtitleSettings as $j)'+
                            '<option value="{{$j->id}}">{{$j->name}}</option>'+
                        '@endforeach'+
                    '</select>';
                }
            @endforeach
                $('#job-append').html(data);
            
                
        }
    </script>
    <script>
        $(document).ready(function() {
            $(".remove_disabled_class").click(function () {
                $('.disabled_attribute').removeAttr("disabled");
                $('.remove_disabled_class').hide();
                $('.save_details').toggle();
            })
        });
    </script>
    {{-- <script> 
        $(document).ready(function() { 
            $('#pd').ajaxForm(function(data) { 
                console.log(data);
                
                $(".load").load(" .load > *");
                swal({
                    title: `Personal Details Updated` ,
                    icon: `success`,
                });
            }); 
        }); 
    </script> --}}
@endsection