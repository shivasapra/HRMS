<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Leaves;
use App\Employee;
use Carbon\Carbon;
use Auth;
class LeavesController extends Controller
{
    public function index(){
        if(Auth::user()->admin){
            $leaves = Leaves::where('comment',null)->get();
        }else{
            $leaves = Auth::user()->employee->Leaves->where('comment',null)->get();
        }
        return view('leaves.index')->with('leaves',$leaves);
    }

    public function assign(){
        return view('leaves.assign');
    }

    public function add(){
        return view('leaves.add');
    }

    public function assigned(){
        if(Auth::user()->admin){
            $leaves = Leaves::where('comment','!=',null)->get();
        }else{
            $leaves = Auth::user()->employee->Leaves->where('comment','!=',null)->get();
        }

        return view('leaves.assigned')->with('leaves',$leaves);
    }

    public function assignLeave(Request $request, Leaves $leave){
        $leave->employee_id = Employee::where('unique_id',$request->employee_id)->first()->id;
        $leave->leave_type = $request->leave_type;
        $leave->from = $request->from;
        $leave->to = $request->to;
        $leave->no_of_days = Carbon::parse($request->from)->diffInDays(Carbon::parse($request->to))+1;
        $leave->comment = $request->comment;
        $leave->status = 1 ;
        $leave->save();
        return redirect()->route('leave.applications');
    }

    public function addLeave(Request $request, Leaves $leave){
        $leave->employee_id = Auth::user()->employee->id;
        $leave->leave_type = $request->leave_type;
        $leave->from = $request->from;
        $leave->to = $request->to;
        $leave->no_of_days = Carbon::parse($request->from)->diffInDays(Carbon::parse($request->to))+1;
        $leave->pdf = $request->pdf;
        $leave->save();
        return redirect()->route('leave.applications');
    }

    


    public function EmployeeSearch(Request $request){
        if($request->ajax()){
            $output= "";
            $employees = Employee::where('first_name','LIKE','%'.$request->search."%")->get();
            if($employees){
                    foreach ($employees as $key => $product) {
                        $output.='<option onClick="EmployeeAssign(this)" value="'.$product->unique_id.'">'.$product->first_name.' '.$product->last_name.'</option>';
                    }
                return Response($output);
            }
        }
    }

    public function showPdf($id){
        $leave = Leave::find($id);
        return \PDF::loadHtml($leave->pdf)->stream();
    }

}
