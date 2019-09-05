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
                        <a href="add-report.php" class="btn btn-sm btn-success mt-2">Add Report</a>
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
                                    <tr>
                                        <td>1</td>
                                        <td>01/05/2019</td>
                                        <td>06:32 PM</td>
                                        @if(Auth::user()->admin)
                                            <td>Trishnik Arora</td>
                                            <td>Tele Marketing Executive</td>
                                        @endif
                                        <td>Zuber</td>
                                        <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</td>
                                        @if(Auth::user()->admin)
                                            <td><a href="#" class="custom-circle-btn"><i class="mdi mdi-delete"></i></a></td>
                                        @endif
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
@endsection