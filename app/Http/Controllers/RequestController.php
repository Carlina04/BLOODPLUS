<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestInfo;
use App\Models\HospitalInfo;
use App\Models\User;
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
        $user_id = Auth::user()->id;
        $req = User::find($user_id)->requests;

        return view('myrequests')->with('req',$req);
    }
    
    public function req()
    {
        //
        return view('request');
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
        $req->req_blood = $request->reqblood;
        $req->desc = $request->desc;
        $req->status = 1;
        $req->save();

        return redirect('/requests');
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

        return redirect('/requests');
    }
}
