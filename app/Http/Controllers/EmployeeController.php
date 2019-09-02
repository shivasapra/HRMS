<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\JobDetails;
use App\ContactDetails;
use App\User;
use App\WorkExperience;
use App\Skills;
use App\Attachments;

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
        notification('Employee Added Successfully!!','Employee Id: '.$employee->unique_id.'\n'.'Name: '.$employee->first_name.' '.$employee->last_name,'success','Ok');
        return redirect()->back();
    }

    public function updatePD(Request $request,Employee $employee){
        $employee->first_name = $request->first_name;
        $employee->middle_name = $request->middle_name;
        $employee->last_name = $request->last_name;
        $employee->driving_license_number = $request->driving_license_number;
        $employee->license_expiry_date = $request->license_expiry_date;
        $employee->marital_status = $request->marital_status;
        $employee->nationality = $request->nationality;
        $employee->DOB = $request->DOB;
        $employee->gender = $request->gender;
        $employee->save();

        
        return redirect()->back();

    }

    public function updateCD(Request $request,ContactDetails $cd, Employee $employee){
        $cd->employee_id = $employee->id;
        $cd->address_street_one = $request->address_street_one;
        $cd->address_street_two = $request->address_street_two;
        $cd->city = $request->city;
        $cd->state = $request->state;
        $cd->postal_code = $request->postal_code;
        $cd->country = $request->country;
        $cd->home_phone = $request->home_phone;
        $cd->mobile = $request->mobile;
        $cd->work_phone = $request->work_phone;
        $cd->work_email = $request->work_email;
        $cd->other_email = $request->other_email;
        $cd->save();

        return redirect()->back();

    }

    public function updateECD(Request $request, Employee $employee){
        $cd = $employee->ContactDetails;
        $cd->emergency_name = $request->emergency_name;
        $cd->emergency_mobile = $request->emergency_mobile;
        $cd->emergency_relationship = $request->emergency_relationship;
        $cd->save();

        return redirect()->back();

    }

    public function updateJD(Request $request, Employee $employee){
        $jd = $employee->JobDetails;
        $jd->department = $request->department;
        $jd->job_title = $request->job_title;
        $jd->employment_status = $request->employment_status;
        $jd->joined_date = $request->joined_date;
        $jd->location = $request->location;
        $jd->employment_contract_start_date = $request->employment_contract_start_date;
        $jd->employment_contract_end_date = $request->employment_contract_end_date;
        $jd->save();

        return redirect()->back();

    }

    public function updateReportTo(Request $request, Employee $employee){
        $employee->report_to_name = $request->report_to_name;
        $employee->report_to_supervisor = $request->report_to_supervisor;
        $employee->save();

        return redirect()->back();
    }

    public function addWorkExperience(Employee $employee, Request $request, WorkExperience $we){
        $we->employee_id = $employee->id;
        $we->organisation_name = $request->organisation_name;
        $we->designation = $request->designation;
        $we->from_month = $request->from_month;
        $we->from_year = $request->from_year;
        $we->to_month = $request->to_month;
        $we->to_year = $request->to_year;
        $we->save();
        return redirect()->back();
    }

    public function addSkills(Employee $employee, Request $request, Skills $s){
        $s->employee_id = $employee->id;
        $s->skills = $request->skills;
        $s->save();
        return redirect()->back();
    }

    public function addAttachments(Employee $employee, Request $request, Attachments $a){
        $a->employee_id = $employee->id;

        $attachments = $request->attachments;
        $attachments_new_name = time().$attachments->getClientOriginalName();
        $attachments->move('uploads/employee',$attachments_new_name);
        $a->attachments = 'uploads/employee/'.$attachments_new_name;

        $a->save();
        return redirect()->back();
    }
}
