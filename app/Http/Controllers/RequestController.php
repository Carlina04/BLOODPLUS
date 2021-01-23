<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestInfo;
use App\Models\HospitalInfo;
use App\Models\User;
use App\Models\InfoTable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    public function req(Request $request)
    {
        //
        $don_id = $request->user_id;
        $don = User::find($don_id);
        $donblood = InfoTable::find($don_id);
        return view('request')->with('don',$don)->with('donblood',$donblood);
    }

    public function requests(Request $request)
    {
        //        
        $user_id = Auth::user()->id;
        $req = User::find($user_id)->requests;

        $id = Auth::id();
        $seekers = DB::table('request_infos')
                    ->join('users_tables', 'request_infos.request_from', '=', 'users_tables.user_id')
                    ->join('info_tables', 'users_tables.info_id', '=', 'info_tables.info_id')
                    ->join('complete_names', 'info_tables.name_id', '=', 'complete_names.name_id')
                    ->join('contact_tables', 'info_tables.contact_id', '=', 'contact_tables.contact_id')
                    ->join('complete_adds', 'info_tables.add_id', '=', 'complete_adds.add_id')
                    ->join('hospital_infos', 'request_infos.hos_admit_id', '=', 'hospital_infos.hos_id')
                    ->select('request_infos.desc as reqdesc','users_tables.*', 'info_tables.*', 'contact_tables.*','complete_names.*','complete_adds.*','request_infos.*','hospital_infos.*')
                    ->where('request_infos.request_to',$id)
                    ->get();

        return view('requests')->with('req',$req)->with('seekers',$seekers);
    }


    public function allreq()
    {
        //
        $req = RequestInfo::all();

        return view('allrequests')->with('req',$req);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
        $hosid = DB::table('hospital_infos')->where([
                                                    ['hos_name', $request->hos_name],
                                                    ['hos_branch', $request->branch]
                                                ])->first()->hos_id;

        $req = new RequestInfo;
        $req->request_from = Auth::user()->id;
        $req->hos_admit_id = $hosid;
        $req->req_blood = $request->don_blood;
        $req->desc = $request->desc;
        $req->status = 1;
        $req->request_to = $request->don_id;
        $req->save();

        return redirect('/myrequests');
    }

    public function declinereq(Request $request)
    {
        //        
        $req_id = $request->req_id;
        $req = RequestInfo::find($req_id);
        $req->status= 3;
        $req->save();

        return redirect('/dashboard');
    }

    public function acceptreq(Request $request)
    {
        //        
        $req_id = $request->req_id;
        $req = RequestInfo::find($req_id);
        $req->status= 2;
        $req->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $req_id = $request->req_id;
        $reqs = RequestInfo::find($req_id);
        $reqs->delete();

        return redirect('/myrequests');
    }
}
