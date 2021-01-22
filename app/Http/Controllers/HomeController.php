<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;                        
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
        $id = Auth::id();
        $seekers = DB::table('request_infos')
                    ->join('users_tables', 'request_infos.request_from', '=', 'users_tables.user_id')
                    ->join('info_tables', 'users_tables.info_id', '=', 'info_tables.info_id')
                    ->join('complete_names', 'info_tables.name_id', '=', 'complete_names.name_id')
                    ->join('contact_tables', 'info_tables.contact_id', '=', 'contact_tables.contact_id')
                    ->join('complete_adds', 'info_tables.add_id', '=', 'complete_adds.add_id')
                    ->select('users_tables.*', 'info_tables.*', 'contact_tables.*','complete_names.*','complete_adds.*','request_infos.*')
                    ->where('request_infos.request_to',$id)
                    ->get();

        $donors = DB::table('users_tables')
                    ->join('info_tables', 'users_tables.info_id', '=', 'info_tables.info_id')
                    ->join('complete_names', 'info_tables.name_id', '=', 'complete_names.name_id')
                    ->join('contact_tables', 'info_tables.contact_id', '=', 'contact_tables.contact_id')
                    ->join('complete_adds', 'info_tables.add_id', '=', 'complete_adds.add_id')
                    ->select('users_tables.*', 'info_tables.*', 'contact_tables.*','complete_names.*','complete_adds.*')
                    ->where('users_tables.user_id','<>',$id)
                    ->get();

        return view('dashboard')->with('donors',$donors)->with('seekers',$seekers);
    }

    public function home()
    {
        return view('home');
    }

    public function admin()
    {
        return view('adminnav');
    }
}
