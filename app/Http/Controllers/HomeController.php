<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Organisations;
use App\Holidays;
use Carbon\Carbon;
use Auth;
Use App\Reports;
use App\Letters;
use App\EmployeeLetters;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(Carbon::now()->format('l, d F, Y'));
        return view('home');
    }

    public function addOrganisations(Request $request, Organisations $o){
        $o->title = $request->title;
        $o->address = $request->address;
        $o->phone = $request->phone;
        $o->website = $request->website;
        $o->save();

        return redirect()->back();
    }

    public function deleteOrganisation(Organisations $o){
        $o->delete();
        return redirect()->back();
    }

    public function updateOrganisations(Request $request){
        $o = Organisations::find($request->org_id);
        $o->title = $request->title;
        $o->address = $request->address;
        $o->phone = $request->phone;
        $o->website = $request->website;
        $o->save();

        return redirect()->back();
    }

    public function holidays(){
        return view('holidays')->with('holidays',Holidays::where('year',Carbon::now()->year)->get());
    }

    public function addHoliday(Request $request, Holidays $holiday){
        $holiday->date = $request->date;
        $holiday->holiday_name = $request->holiday_name;
        $holiday->day = explode('-',Carbon::parse($request->date)->format('d-M-Y'))[0];
        $holiday->month = explode('-',Carbon::parse($request->date)->format('d-F-Y'))[1];
        $holiday->year = explode('-',Carbon::parse($request->date)->format('d-M-Y'))[2];
        $holiday->month_no = explode('-',Carbon::parse($request->date)->format('d-m-Y'))[1];
        $holiday->save();

        return redirect()->back();
    }


    public function reports(){
        if(Auth::user()->admin){
            $reports = Reports::all();
        }else{
            $reports = Auth::user()->employee->Reports;
        }

        return view('reports')->with('reports',$reports);
    }

    public function addReport(Request $request, Reports $r){
        $r->employee_id = Auth::user()->employee->id;
        $r->job_title = Auth::user()->employee->JobDetails->job_title;
        $r->reporting_to = Auth::user()->employee->report_to_name;
        $r->description = $request->description;
        $r->save();

        return redirect()->back();
    }

    public function deleteReport(Reports $r){
        $r->delete();
        return redirect()->back();
    }

    public function profile(){
        return view('profile');
    }

    public function letters(){
        return view('letters');
    }

    public function addLetter(Letters $l, Request $request){
        $l->name = $request->name;

        $pdf = $request->pdf;
        $pdf_new_name = time().$pdf->getClientOriginalName();
        $pdf->move('uploads/pdf',$pdf_new_name);
        $l->pdf = 'uploads/pdf/'.$pdf_new_name;
        $l->save();
        return redirect()->back();
    }

    public function sendLetters(Request $request){
//        dd($request->all());

        if(!$request->has('users')){
            return view('selectEmployeeForLetter')->with('letters',collect($request->letters));
        }else{
            foreach($request->users as $e){
                foreach($request->letters as $l){
                   $el = new EmployeeLetters;
                   $el->employee_id = $e;
                   $el->letter_id = $l;
                   $el->save();
                }
            }
            return route('letters');
        }
    }
}
