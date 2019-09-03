@extends('layouts.app')
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
                            <a class="nav-link active" href="{{route('leave.add.view')}}">Add Leave</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('leave.assigned')}}">Assigned Leaves</a>
                        </li>
                    </ul>
                    <form method="POST"  action="{{route('leave.add')}}" class="mt-4 col-md-6">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Leave Type</label>
                                    <select class="form-control" name="leave_type">
                                        <option>---Select Leave Type----</option>
                                        <option value="MLA US">FMLA US</option>
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
                                    <label>Message</label>
                                    <textarea placeholder="Enter Message" id="" class="form-control summernote" name="pdf" style="height:100px;">
                                    </textarea>
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