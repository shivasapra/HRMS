@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-default mb-4 h3">Select Employee</h2>
                    <div class="table-responsive table-pagination-hide">
                        <form id="form" action="{{route('send.letters')}}" method="post">
                            @csrf
                            <table id="my_table" class="table table-bordered">
                                <thead class="bg-light-gray">
                                <tr>
                                    <th>Select</th>
                                    <th>Sr No.</th>
                                    <th>Images</th>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Employment Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach(App\User::where('admin',0)->get() as $user)
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-flat d-inline-block input-lg">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" value="{{$user->employee->id}}" name="users[]" class="form-check-input">
                                                    </label>
                                                </div>
                                            </td>
                                            <th>{{$loop->index+1}}.</th>
                                            <td><img src="{{$user->employee->avatar}}" alt="" class="img-fluid"/></td>
                                            <td>{{$user->employee->unique_id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->employee->JobDetails->job_title}}</td>
                                            <td>{{$user->employee->JobDetails->employment_status}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @foreach($letters as $l)
                                <input type="hidden" name="letters[]" value="{{$l}}">
                            @endforeach
                        </form>
                        <div class="col-md-12 mt-4 p-0">
                            <button onclick="check();" class="btn btn-success">Send</button>
                        </div>
                    </div>
                </div>
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