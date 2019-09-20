@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-default mb-4 h3">Profile Details</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="image-circle-div"><img class="img-fluid" src="{{asset(Auth::user()->employee->avatar)}}" alt="Card image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 text-left">
                            <h2 class="text-primary">{{Auth::user()->employee->first_name.' '.Auth::user()->employee->last_name}}</h2>
                            <p class="text-gray">{{Auth::user()->employee->designation}}</p>
                            <h4>Employee ID: {{Auth::user()->employee->unique_id}}</h4>
                            <h4>Department: {{Auth::user()->employee->JobDetails->department}}</h4>
                            <h4>Employment Status: {{Auth::user()->employee->JobDetails->employment_status}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection