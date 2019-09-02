@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body" id="load">
                    <h2 class="text-default mb-4 h3">Add Employee</h2>
                    <form method="post" id="myForm" enctype="multipart/form-data" action="{{route('employee.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>First Name*</label>
                                    <input type="text" id="first_name" placeholder="Enter First Name" class="form-control" name="first_name" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" id="middle_name" placeholder="Enter Middle Name" class="form-control" name="middle_name"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Last Name*</label>
                                    <input type="text" id="last_name" placeholder="Enter Last Name" class="form-control" name="last_name" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Department*</label>
                                    <select class="form-control" id="department" name="department" required>
                                        <option value="">-- Select --</option>
                                        <option value="Accountant">Accountant</option>
                                        <option value="Collection Manager">Collection Manager</option>
                                        <option value="HR Manager">HR Manager</option>
                                        <option value="HR Executive">HR Executive</option>
                                        <option value="Branch Marketing Manager (BMM)">Branch Marketing Manager (BMM)</option>
                                        <option value="Tele Marketing Manager (TMM)">Tele Marketing Manager (TMM)</option>
                                        <option value="Tele Marketing Supervisor (TMS)">Tele Marketing Supervisor (TMS)</option>
                                        <option value="Tele Marketing Executive (TME)">Tele Marketing Executive (TME)</option>
                                        <option value="Data Operator">Data Operator</option>
                                        <option value="OPC Supervisor">OPC Supervisor</option>
                                        <option value="OPC Executive">OPC Executive</option>
                                        <option value="Relationship Manager">Relationship Manager</option>
                                        <option value="MRD Executive">MRD Executive</option>
                                        <option value="Corporate Operations">Corporate Operations</option>
                                        <option value="Operations Head">Operations Head</option>
                                        <option value="Unit Manager">Unit Manager</option>
                                        <option value="Operation Team Manager">Operation Team Manager</option>
                                        <option value="Sr. Travel Consultant">Sr. Travel Consultant</option>
                                        <option value="Travel Consultant">Travel Consultant</option>
                                        <option value="Cheif Sale Officer">Cheif Sale Officer</option>
                                        <option value="Relational Manager">Relational Manager</option>
                                        <option value="Branch Manager">Branch Manager</option>
                                        <option value="Unit Manager">Unit Manager</option>
                                        <option value="Sale Team Manager">Sale Team Manager</option>
                                        <option value="Take Over Manager">Take Over Manager</option>
                                        <option value="Senior Holiday Consultant">Senior Holiday Consultant</option>
                                        <option value="Holiday Consultant">Holiday Consultant</option>
                                        <option value="Business Develop Manager">Business Develop Manager</option>
                                        <option value="Business Develop Executive">Business Develop Executive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Job Title*</label>
                                    <select class="form-control" id="job_title" name="job_title" required>
                                        <option value="">-- Select --</option>
                                        <option value="Accountant">Accountant</option>
                                        <option value="Collection Manager">Collection Manager</option>
                                        <option value="HR Manager">HR Manager</option>
                                        <option value="HR Executive">HR Executive</option>
                                        <option value="Branch Marketing Manager (BMM)">Branch Marketing Manager (BMM)</option>
                                        <option value="Tele Marketing Manager (TMM)">Tele Marketing Manager (TMM)</option>
                                        <option value="Tele Marketing Supervisor (TMS)">Tele Marketing Supervisor (TMS)</option>
                                        <option value="Tele Marketing Executive (TME)">Tele Marketing Executive (TME)</option>
                                        <option value="Data Operator">Data Operator</option>
                                        <option value="OPC Supervisor">OPC Supervisor</option>
                                        <option value="OPC Executive">OPC Executive</option>
                                        <option value="Relationship Manager">Relationship Manager</option>
                                        <option value="MRD Executive">MRD Executive</option>
                                        <option value="Corporate Operations">Corporate Operations</option>
                                        <option value="Operations Head">Operations Head</option>
                                        <option value="Unit Manager">Unit Manager</option>
                                        <option value="Operation Team Manager">Operation Team Manager</option>
                                        <option value="Sr. Travel Consultant">Sr. Travel Consultant</option>
                                        <option value="Travel Consultant">Travel Consultant</option>
                                        <option value="Cheif Sale Officer">Cheif Sale Officer</option>
                                        <option value="Relational Manager">Relational Manager</option>
                                        <option value="Branch Manager">Branch Manager</option>
                                        <option value="Unit Manager">Unit Manager</option>
                                        <option value="Sale Team Manager">Sale Team Manager</option>
                                        <option value="Take Over Manager">Take Over Manager</option>
                                        <option value="Senior Holiday Consultant">Senior Holiday Consultant</option>
                                        <option value="Holiday Consultant">Holiday Consultant</option>
                                        <option value="Business Develop Manager">Business Develop Manager</option>
                                        <option value="Business Develop Executive">Business Develop Executive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Employee Photo*</label>
                                    <input type="file" class="form-control" id="avatar" name="avatar" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Employment Status*</label>
                                    <input type="text" class="form-control" id="employment_status" placeholder="Enter Employment Status" name="employment_status" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h2 class="text-default mb-4 h4 mt-4">Create Login Details <i data-toggle="collapse" onclick="addRequired();" data-target="#show_login_details" class="menu-icon mdi mdi-plus btn btn-primary pl-2 pr-2"></i></h2>
                                </div>
                            </div>
                        </div>
                        <div id="show_login_details" class="collapse">
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="email" id="email" placeholder="Enter Email" class="form-control add" name="email"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Password*</label>
                                    <input type="password" id="password" placeholder="Enter Password" class="form-control add" name="password"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Confirm Password*</label>
                                    <input type="password" id="confirm_password" placeholder="Confirm Password" class="form-control add" name="confirm_password"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control add" id="status" name="status">
                                        <option value="">---Select---</option>
                                        <option value="enabled">Enabled</option>
                                        <option value="disabled">Disabled</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button id="button" type="submit" class="btn btn-sm btn-success">Add Employee</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {{-- <script>
        var i = 2;
        function addRequired(){
            if(i % 2 === 0  ){
                $('.add').attr('required','required');
            }else{
                $('.add').removeAttr('required' ,'required');
            }
            i = i + 1;
        }
    </script> --}}
{{-- <script> 
        $(document).ready(function() { 
            $('#myForm').ajaxForm(function(data) { 
                    swal({
                        title: `Employee Added Successfully` ,
                        text: `Employee Id: ${data['unique_id']} \n Name: ${data['first_name']} ${data['last_name']} `,
                        icon: `success`,
                    });
                    $("#load").load(" #load > *");
                    $("#load_body").load(" #load > *");
            }); 
        }); 
    </script>  --}}
    {{-- <script>
        
        function store(test){
            $('#form').ajaxForm(function() { 
                alert("Thank you for your comment!"); 
            }); 
            $.ajax({ 
                type: "POST",
                url: 'http://127.0.0.1:8000/employee/store',
                data: $("#form").serialize(),
                success: function(data) {
                    console.log(data);
                    $("#load").load(" #load > *");
                    swal({
                        title: `Employee Added Successfully` ,
                        text: `Employee Id: ${data['unique_id']} \n Name: ${data['first_name']} ${data['last_name']} `,
                        icon: 'success',
                    });

                }
            });   
        }
    </script> --}}
@endsection