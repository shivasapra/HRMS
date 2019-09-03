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
                        @if(Auth::user()->admin)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('leave.assign.view')}}">Assign Leave</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('leave.add.view')}}">Add Leave Application</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('leave.assigned')}}">Assigned Leaves</a>
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-light-gray">
                            <tr>
                                <th>Sr No.</th>
                                <th>Date</th>
                                <th>Employee Name</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Leave Type</th>
                                <th>No of Days</th>
                                <th>Comment</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if($leaves->count()>0)
                                    <?php $i = 1; ?>
                                    @foreach($leaves as $leave)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$leave->created_at->toDateString()}}</td>
                                            <td>{{$leave->employee->first_name.' '.$leave->employee->last_name}}</td>
                                            <td>{{$leave->from}}</td>
                                            <td>{{$leave->to}}</td>
                                            <td>{{$leave->leave_type}}</td>
                                            <td>{{$leave->no_of_days}}</td>
                                            <td>{{$leave->comment}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection