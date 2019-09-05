@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-4 h3"><i class="mdi mdi-calendar-remove"></i> &nbsp; Holidays List
                <a href="javascript:void(0)" data-toggle="modal" data-target="#add_holiday" class="btn btn-primary float-right">Add New</a></h2><hr>
                <div class="">
                    @foreach(collect($holidays->sortBy('day')->sortBy('month_no')->groupBy('month')) as $col)
                        @php $i = 0; @endphp
                        <h4 class="ml-3">{{$col->first()->month}}</h4>
                        <ul class="holidays_list">
                            @foreach($col as $h)
                                @php
                                ($i == 5)? $i = 1 : $i++ ;
                                ($i == 1)? $color = 'btn-primary': (($i == 2)? $color = 'btn-warning' : (($i == 3) ? $color = 'btn-success': (($i == 4)? $color = 'btn-danger': (($i == 5)? $color = 'btn-info': $color))));
                                @endphp
                                <li><a href="javascript:void(0)" class="{{$color}}">{{$h->day}}</a>
                                    <h5 class="text-uppercase text-gray mb-1">{{Carbon\Carbon::parse($h->date)->format('l')}}</h5>
                                    <h4>{{$h->holiday_name}}</h4>
                                </li>
                            @endforeach
                        </ul>
                        <hr>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="add_holiday">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Holiday</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="{{route('add.holiday')}}">
                    @csrf
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" name="date" required/>
                    </div>
                    <div class="form-group">
                        <label>Holiday Name</label>
                        <input type="text" class="form-control" name="holiday_name" required placeholder="Enter Holiday Name"/>
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