<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
