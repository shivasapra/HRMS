@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-default mb-4 h3">Send Feedback</h2><hr>
                    <form method="POST" class="mt-4 col-md-6">
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
                                <button type="button" id="" class="btn btn-success">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection