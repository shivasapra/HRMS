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
        return view('employee.index')->with('employees',Employee::all());
    }

    public function details(Employee $employee){
        return view('employee.details')->with('employee',$employee);
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

        
        $avatar = $request->avatar;
        $avatar_new_name = time().$avatar->getClientOriginalName();
        $avatar->move('uploads/profile',$avatar_new_name);
        $employee->avatar = 'uploads/profile/'.$avatar_new_name;
        
        

        $test_employee = Employee::where('unique_id','FORB0001')->get();
        if ($test_employee->count()) {
            $latest = Employee::orderBy('id','desc')->first();
            $employee_prev_no = $latest->unique_id;
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

    public function storePD(Request $request,Employee $employee){
        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name;
        $employee->last_name = $request->last_name;
        $employee->driving_icense_number = $request->driving_icense_number;
        $employee->license_expiry_date = $request->license_expiry_date;
        $employee->marital_status = $request->marital_status;
        $employee->nationality = $request->nationality;
        $employee->DOB = $request->DOB;
        $employee->gender = $request->gender;
        $employee->save();

        return $employee;

    }
}
