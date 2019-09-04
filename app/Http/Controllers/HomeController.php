<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Organisations;

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
        return view('holidays');
    }
}
