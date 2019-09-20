@extends('layouts.app')
@section('content')
    @if(!Auth::user()->admin)
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-default mb-4 h3">Send Feedback</h2><hr>
                    <form method="POST" action="{{route("add.feedback")}}" class="mt-4 col-md-6">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{asset('app/images/user-feedback.jpg')}}" alt="user feedback" class="img-fluid mb-5"/>
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold">Send Your Feedback</label>
                                    <textarea name="feedback" id="" class="form-control" style="height:150px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" id="" class="btn btn-success">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <h3 class="mb-1">Feedbacks</h3>
                            <hr>
                        </div>

                        @foreach(App\Feedbacks::all() as $f)
                            <div class="col-md-4">
                                <div class="jumbotron p-4 bg-light-gray">
                                    <h4>{{$f->user->name}}
                                        <span class="dropdown">
                                                <a href="javascript:void(0)" class="float-right dropdown-toggle after-none" data-toggle="dropdown">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
                                                    <ul class="dropdown-ul">
                                                        <li>
                                                            <a href="{{route('delete.feedback',$f)}}">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </span>
                                    </h4><hr>
                                    <p>{{$f->feedback}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endif
@endsection