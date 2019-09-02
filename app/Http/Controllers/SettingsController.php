<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\JobtitleSettings;
use App\AllowanceSettings;
use App\DepartmentSettings;
use App\ServiceSettings;

class SettingsController extends Controller
{
    public function settings(){
        return view('settings')->with('job_titles', JobtitleSettings::all())
                                ->with('departments', DepartmentSettings::all())
                                ->with('services', ServiceSettings::all())
                                ->with('allowances', AllowanceSettings::all());
    }


    public function addDepartment(DepartmentSettings $d, Request $request){
        $d->name = $request->department;
        $d->save();
        return redirect()->back();
    }

    public function addService(ServiceSettings $s, Request $request){
        $s->name = $request->service;
        $s->charges = $request->charges;
        $s->save();
        return redirect()->back();
    }

    public function addAllowance(AllowanceSettings $a, Request $request){
        $a->name = $request->allowance;
        $a->save();
        return redirect()->back();
    }

    public function addJobtitle(JobtitleSettings $j, Request $request){
        $j->department_id = $request->department;
        $j->name = $request->job_title;
        $j->save();
        return redirect()->back();
    }



    public function deleteDepartment(DepartmentSettings $d){
        $d->delete();
        return redirect()->back();
    }

    public function deleteService(ServiceSettings $s){
        $s->delete();
        return redirect()->back();
    }

    public function deleteAllowance(AllowanceSettings $a){
        $a->delete();
        return redirect()->back();
    }

    public function deleteJobtitle(JobtitleSettings $j){
        $j->delete();
        return redirect()->back();
    }
}
