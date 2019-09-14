@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-default mb-4 h3">Locations</h2>
                    <ul class="nav nav-tabs tabs-design">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('organisations.general.information')}}">General Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('organisations.locations')}}">Locations</a>
                        </li>
                        @if(Auth::user()->admin)
                            <a class="btn btn-primary float-right ml-auto" href="#" data-toggle="modal" data-target="#add_location">Add</a>
                        @endif
                    </ul>
                    <div class="row">
                        @foreach(App\Organisations::all() as $o)
                            <div class="col-md-4">
                                <div class="jumbotron p-4 bg-light-gray">
                                    <h4>{{$o->title}}
                                        <span class="dropdown">
                                        <a href="#" class="float-right dropdown-toggle after-none" data-toggle="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">
                                                    <ul class="dropdown-ul">
                                                        <li>
                                                            <a href="javascript:void(0)" onclick="edit(this)">Edit
                                                                <input type="hidden" id="org" value="{{$o}}">
                                                            </a>
                                                            <a href="{{route('organisation.delete',$o)}}">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                        </span>
                                    </h4><hr>
                                    <p>{{$o->address}}</p>
                                    <p class="mdi mdi-web mb-1 font-weight-bold"> {{$o->website}}</p>
                                    <p class="mdi mdi-phone mb-0 font-weight-bold"> {{$o->phone}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="add_location">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Location</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="POST" action="{{route('add.organisations')}}">
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
                                    <label>Address</label>
                                    <input type="text" placeholder="Enter Address" class="form-control" name="address" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Website Link</label>
                                    <input type="text" placeholder="Enter Website Link" class="form-control" name="website" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" placeholder="Enter Phone Number" class="form-control" name="phone" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" id="" class="btn btn-success">Add Location</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <button type="button" id="modalButton" data-toggle="modal" data-target="#editModal" style="display:none;"></button>
    <div id="modalDisplay"></div>

    
@endsection

@section('scripts')
    <script>
        function edit(temp){
            var object = JSON.parse($('#org').val());
            var data = 
            '<div class="modal fade" id="editModal">'+
                '<div class="modal-dialog modal-dialog modal-dialog-centered">'+
                    '<div class="modal-content">'+

                        '<!-- Modal Header -->'+
                        '<div class="modal-header">'+
                            '<h4 class="modal-title">Update Location</h4>'+
                            '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                        '</div>'+

                        '<!-- Modal body -->'+
                        '<div class="modal-body">'+
                            '<form method="POST" action="{{route("update.organisations",)}}">'+
                                '@csrf'+
                                '<div class="row">'+
                                    '<div class="col-md-12">'+
                                        '<div class="form-group">'+
                                            '<label>Title</label>'+
                                            '<input type="hidden" value="'+object["id"]+'" name="org_id">'+
                                            '<input type="text" placeholder="Enter Title" class="form-control" value="'+object["title"]+'" name="title" required/>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-12">'+
                                        '<div class="form-group">'+
                                            '<label>Address</label>'+
                                            '<input type="text" placeholder="Enter Address" class="form-control" value="'+object["address"]+'" name="address" required/>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-12">'+
                                        '<div class="form-group">'+
                                            '<label>Website Link</label>'+
                                            '<input type="text" placeholder="Enter Website Link" class="form-control" value="'+object["website"]+'" name="website" required/>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-12">'+
                                        '<div class="form-group">'+
                                            '<label>Phone Number</label>'+
                                            '<input type="text" placeholder="Enter Phone Number" class="form-control" value="'+object["phone"]+'" name="phone" required/>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="row">'+
                                    '<div class="col-md-12">'+
                                        '<button type="submit" id="" class="btn btn-success">Update</button>'+
                                    '</div>'+
                                '</div>'+
                            '</form>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';
            $('#modalDisplay').html(data);
            $('#modalButton').click();
        }
    </script>
@endsection