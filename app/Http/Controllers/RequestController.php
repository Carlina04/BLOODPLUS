<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestInfo;
use App\Models\HospitalInfo;
use App\Models\CompleteAdd;
use App\Models\InfoTable;
use App\Models\UsersTable;

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
        $addid = DB::table('complete_adds')->where('province', $request->city)->first()->add_id;
        $hosid = DB::table('hospital_infos')->where('hos_name', $request->hos_name)->first()->hos_id;

        $req = new RequestInfo;
        //$req->patient_info_id = $addid;
        $req->hos_admit_id = $hosid;
        $req->req_blood = $request->reqblood;
        $req->add_id = $addid;
        $req->desc = $request->desc;
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
    public function destroy($id)
    {
        //
    }
}
