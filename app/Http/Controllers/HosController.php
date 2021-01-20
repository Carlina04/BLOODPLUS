<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HospitalInfo;
use App\Models\CompleteAdd;
use App\Models\ContactTable;
use Illuminate\Support\Facades\DB;

class HosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hos = HospitalInfo::all();
        return view('hospitals')->with('hos',$hos);
    }

    public function allhos()
    {
        //
        $hos = HospitalInfo::all();
        return view('allhospitals')->with('hos',$hos);
    }

    public function addhos()
    {
        //
        return view('addhospital');
    }

    public function edithos(Request $request)
    {
        //
        $hos_id = $request->hos_id;
        $hos = HospitalInfo::find($hos_id);
        return view('edithospital')->with('hos',$hos);
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
        $add = new CompleteAdd;
        $add->province = $request->province;
        $add->municipality = $request->municipality;
        $add->barangay = $request->barangay;
        $add->street = $request->street;
        $add->house_num = 'N/A';
        $add->save();
        
        $contact = new ContactTable;
        $contact->contact_num = $request->num;
        $contact->email = $request->email;
        $contact->save();

        $addid = DB::table('complete_adds')->where('province', $request->province)->first()->add_id;
        $contactid = DB::table('contact_tables')->where('contact_num', $request->num)->first()->contact_id;

        $hos = new HospitalInfo;
        $hos->hos_name = $request->hos_name;
        $hos->hos_branch = $request->hos_branch;
        $hos->hos_add = $addid;
        $hos->hos_contact = $contactid;
        $hos->desc = $request->desc;
        $hos->save();

        return redirect('/allhospitals');
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
    public function update(Request $request)
    {
        //
        $hos_id = $request->hos_id;
        $hoss = HospitalInfo::find($hos_id);
        $hoss->hos_name = $request->hos_name;
        $hoss->hos_branch = $request->hos_branch;
        $hoss->desc = $request->desc;
        $hoss->save();

        $addid = DB::table('complete_adds')->where('add_id','=', $hoss->hos_add)->first()->add_id;
        $add = CompleteAdd::where('add_id',$addid)->first();
        $add->province = $request->address->province;
        $add->municipality = $request->address->municipality;
        $add->barangay = $request->address->barangay;
        $add->street = $request->address->street;
        $add->save();

        $contactid = DB::table('contact_tables')->where('contact_id','=', $hoss->hos_contact)->first()->contact_id;
        $contact = ContactTable::where('contact_id',$contactid)->first();
        $contact->contact_num = $request->contact->num;
        $contact->email = $request->contact->email;
        $contact->save();

        return view('/allhospitals');
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
        $hos_id = $request->hos_id;
        $hoss = HospitalInfo::find($hos_id);
        $hoss->delete();

        return redirect('/allhospitals');
    }
}
