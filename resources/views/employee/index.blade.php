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
                                <tr>
                                    <td>1</td>
                                    <td><img src="images/profile.jpg" alt="" class="img-fluid"/></td>
                                    <td>10555250</td>
                                    <td>Aaditya Nagarath</td>
                                    <td>Business Marketing Manager</td>
                                    <td>Full Time Permanent</td>
                                    <td><a href="{{route('employee.details')}}" class="btn btn-primary">View Details</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection