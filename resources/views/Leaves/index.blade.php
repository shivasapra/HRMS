@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-default mb-4 h3">Leave Applications</h2>
                    <ul class="nav nav-tabs tabs-design">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('leave.applications')}}">Leave List</a>
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
                            <a class="nav-link" href="{{route('leave.assigned')}}">Assigned Leaves</a>
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-light-gray">
                            <tr>
                                <th>Sno.</th>
                                <th>Date Applied</th>
                                <th>Employee Name</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Leave Type</th>
                                <th>No. Of Days</th>
                                <th>Application</th>
                                <th>Status</th>
                                @if(Auth::user()->admin)
                                    <th>Action</th>
                                @endif
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
                                            <td class="test2">
                                                <a href="{{route('downloadPdf',$leave)}}" class="btn btn-primary btn-sm">Download</a>
                                                {{-- <input type="text" hidden value="{{$leave->id}}" class="leave_id">
                                                <button   type="button" onClick="Fun2(this);" class="btn btn-primary">View</button> --}}
                                            </td>
                                            <td>
                                                @if($leave->status == 0)
                                                    <label class="badge badge-red">Rejected</label>
                                                @elseif($leave->status == 1)
                                                    <label class="badge badge-success">Approved</label>
                                                @elseif($leave->status == 2)
                                                    <label class="badge badge-warning">In progress</label>
                                                @endif
                                                @if($leave->status != 2)
                                                    <br>{{$leave->comment}}
                                                @endif
                                            </td>
                                            @if(Auth::user()->admin)
                                                <td class="test">
                                                        <input type="text" hidden value="{{$leave->id}}" class="leave_id">
                                                        <button   type="button" onClick="Fun(this);" class="btn btn-icons btn-rounded btn-success">
                                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            @endif
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

    
    <a href="#" id="target2" style="display:none;" data-toggle="modal" data-target="#leave_view"></a>
    <a href="#" id="target" style="display:none;" data-toggle="modal" data-target="#leave_status"></a>
    <div id="status-modal"></div>
    <div id="view"></div>
@endsection
@section('scripts')
  <script>
    function Fun(temp){
		var leave_id = $(temp).parents('.test').find('.leave_id').val();
		
		var data = 
        '<div class="modal fade" id="leave_status">'+
            '<div class="modal-dialog modal-dialog modal-dialog-centered">'+
                '<div class="modal-content">'+
    
                    '<!-- Modal Header -->'+
                    '<div class="modal-header">'+
                        '<h4 class="modal-title">Leave Status</h4>'+
                        '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                    '</div>'+
    
                    '<!-- Modal body -->'+
                    '<div class="modal-body">'+
                        '<form action="" method="post">'+
                            '@csrf'+
                            '<div class="row">'+
                                '<div class="col-md-12">'+
                                    '<div class="form-group">'+
                                        // '<label for="status">Add Status</label>'+
                                        '<input type="text" hidden value="'+leave_id+'" name="leave_id">'+
                                        '<label for="status">Add Status</label>'+
                                        '<select class="form-control" name="status" required>'+
                                            '<option value="">--Select--</option>'+
                                            '<option value="1">Approved</option>'+
                                            '<option value="0">Rejected</option>'+
                                        '</select>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-12">'+
                                    '<div class="form-group">'+
                                        '<label>Comment</label>'+
                                        '<textarea placeholder="Enter Message" class="form-control" name="comment" style="height:70px;" required>'+
                                        '</textarea>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="col-md-12">'+
                                    '<button type="submit" class="btn btn-success">Save</button>'+
                                '</div>'+
                            '</div>'+
                        '</form>'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>';
	  $('#status-modal').html(data);
      
	  $('#target').click();
	}
</script>
@stop