<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Organisations;
use App\Holidays;
use Carbon\Carbon;

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
    {   dd(Carbon::now()->format('l, d F, Y'));
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
}
