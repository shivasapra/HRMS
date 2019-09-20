@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <h2 class="text-default h3 d-inline">Employee Attendance</h2>
                        <h5 class="float-right text-primary">Today: {{Carbon\Carbon::now()->format('d M, Y')}}</h5>
                    </div>
                    <div class="table-responsive">
                        <table id="my_table" class="table table-bordered">
                            <thead class="bg-light-gray">
                            <tr>
                                <th>Sr No.</th>
                                <th>Date</th>
                                <th>Employee Id</th>
                                <th>Employee Name</th>
                                <th>In Time</th>
                                <th>Out Time</th>
                                <th>Shift Hrs</th>
                                <th>Work Hrs</th>
                                <th>Ot Hrs</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection