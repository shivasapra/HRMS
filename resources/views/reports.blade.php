@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                    <h2 class="text-default d-inline h3">Reports
                        </h2>
                    <h5 class="float-right text-primary">{{Carbon\Carbon::now()->format('d M, Y')}}
                        @if(!Auth::user()->admin)
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#add_report" class="btn btn-success float-right">Add Report</a>
                        @endif
                    </h5>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @if(Auth::user()->admin)
                                <h4 class="mb-3">Employees Daily Report</h4>
                            @endif
                            <div class="table-responsive">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Filter By</h4>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <input type="date" class="form-control" name="date"  required/>
                                        </div>
                                        @if(Auth::user()->admin)
                                            <div class="col-md-3 col-6">
                                                <input type="text" placeholder="Employee Name" class="form-control" name="employee_name" required/>
                                            </div>
                                        @endif
                                        <div class="col-md-3 col-6">
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
                                        <div class="col-md-3 col-6">
                                            <a href="#" class="btn btn-primary">SEARCH</a>
                                        </div>
                                    </div>
                                </form><hr class="mt-4 mb-4">
                                <table id="my_table" class="table table-bordered">
                                    <thead class="bg-light-gray">
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        @if(Auth::user()->admin)
                                            <th>Employee Name</th>
                                            <th>Job Title</th>
                                        @endif
                                        <th>Reporting To</th>
                                        <th class="w-350">Description</th>
                                        @if(Auth::user()->admin)
                                            <th>Action</th>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($reports->reverse() as $r)
                                            <tr>
                                                <th>{{$loop->index+1}}.</th>
                                                <td>{{$r->created_at->toDateString()}}</td>
                                                <td>{{$r->created_at->toTimeString()}}</td>
                                                @if(Auth::user()->admin)
                                                    <td>{{$r->employee->first_name.' '.$r->employee->last_name}}</td>
                                                    <td>{{$r->job_title}}</td>
                                                @endif
                                                <td>{{$r->reporting_to}}</td>
                                                <td>{{$r->description}}</td>
                                                @if(Auth::user()->admin)
                                                    <td><a href="{{route('report.delete',$r)}}" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                                @endif
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

    <div class="modal fade" id="add_report">
            <div class="modal-dialog modal-dialog modal-dialog-centered">
                <div class="modal-content">
        
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Report</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
        
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="POST" action="{{route('add.report')}}">
                            @csrf
                            <div class="form-group">
                                <label>Description</label><br>
                                <textarea name="description" id="" class="form-control" style="height:150px;"></textarea>
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
@endsection