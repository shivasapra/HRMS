@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
{{--                    <h2 class="text-default mb-4 h3">Goals</h2>--}}
{{--                    <ul class="nav nav-tabs tabs-design">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link active" href="goals.php">Personal Goals</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="employee-goals.php">Employee Goals</a>--}}
{{--                        </li>--}us}
{{--                        <li class="nav-item">--}}
{{--                    <a class="nav-link" href="company-goals.php">Company Goals</a>--}}
{{--                    </li>--}}
{{--                    </ul>--}}
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <h3 class="mb-1">Personal Goals</h3>
{{--                            <h5 class="text-left text-gray mb-3">Goals for myself</h5>--}}
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_personal_goal">Add Goal</a>
                        </div>
                        @foreach(Auth::user()->goals as $g)
                            <div class="col-md-4">
                                <div class="jumbotron p-4 bg-light-gray">
                                    <h4>{{$g->title}}
                                        <span class="dropdown">
                                                <a href="javascript:void(0)" class="float-right dropdown-toggle after-none" data-toggle="dropdown">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
                                                    <ul class="dropdown-ul">
                                                        <li>
                                                            <a href="{{route('delete.goal',$g)}}">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </span>
                                    </h4><hr>
                                    <p>{{$g->description}}</p>
                                    <p class="mdi mdi-calendar mb-1 font-weight-bold"> {{Carbon\Carbon::now()->diffInDays($g->to)}} Days Left ({{$g->to}})</p>
                                    <p class="mdi mdi-eye mb-0 font-weight-bold">
                                        @if($g->visibility)
                                            Public
                                        @else
                                            Private
                                        @endif
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="add_personal_goal">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Personal Goal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" action="{{route('add.goal')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" placeholder="Enter Title" class="form-control" name="title" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description (optional)</label>
                                    <textarea placeholder="Enter Description" class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="from">From</label>
                                    <input type="date" name="from" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="to">To</label>
                                    <input type="date" name="to" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Visibility</label>
                                    <div>
                                        <div class="form-radio d-inline-block">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="visibility" id="visibility1" value="1" checked>Public
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-radio d-inline-block">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="visibility" id="visibility1" value="0">Private
                                                <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" id="" class="btn btn-success">Add Goal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection