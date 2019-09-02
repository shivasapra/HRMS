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
                                    <select class="form-control" id="department" onchange="extractJobTitles(this)" name="department" required>
                                        <option value="">-- Select --</option>
                                        @foreach(App\DepartmentSettings::all() as $d)
                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Job Title*</label>
                                    <div id="job-append"></div>
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