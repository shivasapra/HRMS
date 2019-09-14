@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Official Letters
                    <a class="btn btn-primary float-right ml-auto pull-right" href="javascript:void(0)" data-toggle="modal" data-target="#add_letter">Add</a>
                </div>
                <hr>
                <form id="form" action="{{route('send.letters')}}" method="post">
                    @csrf
                    <div class="card-body">
                        @foreach(App\Letters::all()->chunk(2) as $chunk)
                            <div class="row">
                                @foreach($chunk as $c)
                                    <div class="col-md-6">
                                        <div class="media">
                                            <div class="form-check form-check-flat d-inline-block input-lg">
                                                <label class="form-check-label">
                                                    <input type="checkbox" value="{{$c->id}}" name="letters[]" class="form-check-input">
                                                </label>
                                            </div>
                                            <img class="mr-3" src="{{asset('app/images/icon-pdf.png')}}" alt="pdf">
                                            <div class="media-body text-left align-self-center">
                                                <h3 class="mt-0 mb-1 h4">{{$c->name}}</h3>
    {{--                                            @php--}}
    {{--                                                $input = $c->name;--}}
    {{--                                                $pattern = '/([a-z])([A-Z])/e';--}}
    {{--                                                $replace = "'${1}_' . strtolower('${2}')";--}}
    {{--                                                $f = preg_replace($pattern, $replace, $input);--}}
    {{--                                            @endphp--}}
                                                <a href="{{asset($c->pdf)}}">{{strtolower(str_replace(' ', '_', $c->name))}}.pdf</a>
                                            </div>
                                        </div><hr>
                                    </div>
                              @endforeach
                            </div>
                        @endforeach
                        <div class="text-center">
                            <button type="button" onclick="check();"  class="btn btn-success">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add_letter">
        <div class="modal-dialog modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Letter</h4>
                </div>
                <form method="POST"  action="{{route('add.letter')}}" enctype="multipart/form-data">
                @csrf
                <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" placeholder="Enter Name" class="form-control" name="name" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="pdf">Letter</label>
                                <input type="file" class="form-control" name="pdf" required accept="application/pdf">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Add Letter</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function check(){
            checked = $("input[type=checkbox]:checked").length;
            if(!checked) {
                alert("You must select at least one letter.");
            }else{
                $('#form').submit();
            }

        }


    </script>
@endsection