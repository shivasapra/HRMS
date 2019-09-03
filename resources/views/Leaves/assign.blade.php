@extends('layouts.app')
@section('styles')
    <style>
        .employee_html {
            background-color: #fff;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
        }
        .employee_html option {
            border-bottom: 1px solid #f4f4f4;
            padding: 7px 15px;
        }
        .employee_html option:hover{
            cursor: pointer;
            background-color:#54458b;
            color:#fff;
        }
    </style>
@stop
@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-default mb-4 h3">Leave Applications</h2>
                    <ul class="nav nav-tabs tabs-design">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('leave.applications')}}">Leave List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('leave.assign.view')}}">Assign Leave</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('leave.assigned')}}">Assigned Leaves</a>
                        </li>
                    </ul>
                    <form method="POST" action="{{route('leave.assign')}}" class="mt-4 col-md-6">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Employee Name*</label>
                                    <div class="dropdown">	<div id="myDropdown" class="dropdown-content">
                                        <input type="text" placeholder="Enter Employee Name" class="form-control employee-name" name="employee_id" onkeyup="EmployeeDataExtract(this)" id="myInput"  required/>
                                        <div class="employee_html"></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Leave Type</label>
                                    <select class="form-control" name="leave_type">
                                        <option>---Select Leave Type----</option>
                                        <option value="FMLA US">FMLA US</option>
                                        <option value="Maternity US">Maternity US</option>
                                        <option value="Paternity US">Paternity US</option>
                                        <option value="Vacation US">Vacation US</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>From Date</label>
                                        <input type="date" placeholder="" class="form-control" name="from" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>To Date</label>
                                    <input type="date" placeholder="" class="form-control" name="to" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Comment</label>
                                    <textarea name="comment" id="" class="form-control" style="height:170px;" required></textarea>
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
@endsection
@section('scripts')
<script>
    function EmployeeDataExtract(test){
        $value = test.value;
        $.ajax({
            type : 'get',
            url : '{{URL::to('searchEmployee')}}',
            data:{'search':$value},
            success:function(data){
                $(test).next(".employee_html").html(data);
            }
        });
    }

    function EmployeeAssign(temp){
        var div = $(temp).closest(".dropdown-content");
        div.find('.employee-name').val(temp.value);
        $(temp).closest(".employee_html").html('');
    }
    
</script>
@endsection