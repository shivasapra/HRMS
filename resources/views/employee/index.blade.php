@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-default mb-4 h3">All Employee</h2>
                    <div class="table-responsive">
                        <table id="my_table" class="table table-bordered">
                            <thead class="bg-light-gray">
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Images</th>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Employment Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <th>{{$loop->index + 1}}.</th>
                                        <td><img src="{{asset($employee->avatar)}}" alt="" class="img-fluid"/></td>
                                        <td>{{$employee->unique_id}}</td>
                                        <td>{{$employee->first_name.' '.$employee->last_name}}</td>
                                        <td>{{$employee->JobDetails->job_title}}</td>
                                        <td>{{$employee->JobDetails->employment_status}}</td>
                                        <td><a href="{{route('employee.details')}}" class="btn btn-primary">View Details</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection