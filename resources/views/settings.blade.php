@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h2 class="text-default mb-4 h3">Settings</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="jumbotron p-4 bg-light-gray h-445">
                            <h3>Departments
                                <a href="javascript:void(0)" class="btn btn-success float-right" data-toggle="modal" data-target="#add_department">Add New</a>
                            </h3>
                            <div class="table-responsive mt-4">
                                <table class="table table-p-10">
                                    <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($departments as $d)
                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$d->name}}</td>
                                                <td>
                                                    <span class="dropdown">
                                                    <a href="#" class="btn btn-icons btn-rounded btn-primary dropdown-toggle after-none" data-toggle="dropdown">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
                                                        <ul class="dropdown-ul">
                                                            <li>
                                                                <a href="{{route('department.delete',$d)}}">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="jumbotron p-4 bg-light-gray h-445">
                            <h3>Job Titles
                                <a href="javascript:void(0)" class="btn btn-success float-right" data-toggle="modal" data-target="#add_job_title">Add New</a>
                            </h3>
                            <div class="table-responsive mt-4">
                                <table class="table table-p-10">
                                    <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($job_titles as $j)
                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$j->name}}</td>
                                                <td>{{$j->department->name}}</td>
                                                <td>
                                                    <span class="dropdown">
                                                    <a href="#" class="btn btn-icons btn-rounded btn-primary dropdown-toggle after-none" data-toggle="dropdown">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
                                                        <ul class="dropdown-ul">
                                                            <li>
                                                                <a href="{{route('job_title.delete',$j)}}">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </span>
                                                </td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="jumbotron p-4 bg-light-gray h-445">
                            <h3>Allowance
                                <a href="javascript:void(0)" class="btn btn-success float-right" data-toggle="modal" data-target="#allowance">Add New</a>
                            </h3>
                            <div class="table-responsive mt-4">
                                <table class="table table-p-10">
                                    <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allowances as $a)
                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$a->name}}</td>
                                                <td>
                                                    <span class="dropdown">
                                                    <a href="#" class="btn btn-icons btn-rounded btn-primary dropdown-toggle after-none" data-toggle="dropdown">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
                                                        <ul class="dropdown-ul">
                                                            <li>
                                                                <a href="{{route('allowance.delete',$a)}}">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="jumbotron p-4 bg-light-gray h-445">
                            <h3>Services
                                <a href="#javascript:void(0)"" class="btn btn-success float-right" data-toggle="modal" data-target="#service">Add New</a>
                            </h3>
                            <div class="table-responsive mt-4">
                                <table class="table table-p-10">
                                    <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Name</th>
                                        <th>Charges</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($services as $s)
                                            <tr>
                                                <td>{{$loop->index + 1}}</td>
                                                <td>{{$s->name}}</td>
                                                <td>
                                                    @if($s->charges)
                                                        {{$s->charges}}
                                                    @else
                                                        {{__('--')}}
                                                    @endif
                                                </td>
                                                <td>
                                                    <span class="dropdown">
                                                    <a href="#" class="btn btn-icons btn-rounded btn-primary dropdown-toggle after-none" data-toggle="dropdown">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
                                                        <ul class="dropdown-ul">
                                                            <li>
                                                                <a href="{{route('service.delete',$s)}}">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
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

<!-- The Modal -->
    <div class="modal fade" id="add_department">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Departments</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" action="{{route('department.add')}}">
                            @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Add New Department</label>
                                    <input type="text" placeholder="Enter Department Name" class="form-control" name="department" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" id="" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="add_job_title">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Job Title</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" action="{{route('job_title.add')}}">
                        @csrf   
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Select Department</label>
                                    <select name="department" id="" required class="form-control">
                                        <option value="">--Select--</option>
                                        @foreach($departments as $d)
                                            <option value="{{$d->id}}">{{$d->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Add Title</label>
                                    <input type="text" placeholder="Enter Job Title" class="form-control" name="job_title" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" id="" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="allowance">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Allowance</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" action="{{route('allowance.add')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Add Allowance</label>
                                    <input type="text" placeholder="Enter Allowance Name" class="form-control" name="allowance" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" id="" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="service">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Service</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" >
                    <form method="POST" action="{{route('service.add')}}">
                            @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Add Service</label>
                                    <input type="text" placeholder="Enter Service Name" class="form-control" name="service" required/>
                                </div>
                                <div class="form-group">
                                    <label>Charges</label>
                                    <input type="text" placeholder="Enter Charges" class="form-control" name="charges"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" id="" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop