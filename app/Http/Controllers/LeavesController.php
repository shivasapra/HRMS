<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Leaves;

class LeavesController extends Controller
{
    public function index(){
        return view('leaves.index');
    }

    public function assign(){
        return view('leaves.assign');
    }

    public function add(){
        return view('leaves.add');
    }

    public function store(Request $request, Leaves $leave){
        $leave->employee_id = $request->employee_id;
        $leave->leave_type = $request->leave_type;
        $leave->from = $request->from;
        $leave->to = $request->to;
        $leave->no_of_days = Carbon::parse($request->from)->diffInDays(Carbon::parse($request->to))+1;
        $leave->pdf = $request->pdf;
        $leave->save();
        return redirect()->route('leave.applications');
    }

}
