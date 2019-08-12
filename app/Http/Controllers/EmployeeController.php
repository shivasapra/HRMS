<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\JobDetails;
use App\User;
use Auth;

class EmployeeController extends Controller
{
    public function add(){
        return view('employee.addEmployee');
    }

    public function index(){
        return view('employee.index');
    }

    public function details(){
        return view('employee.details');
    }

    public function store(Request $request, Employee $employee, JobDetails $job_details){

        if($request->email){
            $user = new User;
            $user->email = $request->email;
            $user->name = $request->first_name.$request->last_name;
            $user->password = bcrypt('password');
            $user->avatar = $request->avatar;
            $user->save();
            $employee->user_id = $user->id;
        }

        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->middle_name = $request->middle_name;

        if($request->hasFile('avatar')){
            $avatar = $request->avatar;
            $avatar_new_name = time().$avatar->getClientOriginalName();
            $avatar->move('uploads/profile',$avatar_new_name);
            $employee->avatar = 'uploads/profile/'.$avatar_new_name;
            $employee->save();
        }

        $test_employee = Employee::where('unique_id','FORB0001')->get();
        if ($test_employee->count()>0) {
            $latest = Employee::orderByDesc()->take(1)->get();
            $employee_prev_no = $latest[0]->unique_id;
            $unique_id = 'FORB000'.(substr($employee_prev_no,4,7)+1);
        }
        else{
            $unique_id = 'FORB0001';
        }

        $employee->unique_id = $unique_id;
        $employee->save();

        $job_details->employee_id = $employee->id;
        $job_details->department = $request->department;
        $job_details->job_title = $request->job_title;
        $job_details->employment_status = $request->employment_status;
        $job_details->save();
        
        return $employee;
    }
}
