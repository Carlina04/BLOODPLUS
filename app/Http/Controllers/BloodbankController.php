<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\CompleteName;
use App\Models\CompleteAdd;
use App\Models\ContactTable;
use App\Models\BloodBankInfo;
use App\Models\BloodBanks;
use App\Models\bloodbank_stocks;
use DB;

class BloodbankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bbanks = DB::table('blood_banks')
                ->join('blood_bank_infos', 'blood_banks.bbank_info_id', '=', 'blood_bank_infos.bbank_info_id')
                ->join('contact_tables', 'blood_bank_infos.contact_id', '=', 'contact_tables.contact_id')
                ->join('complete_adds', 'blood_bank_infos.bbank_add', '=', 'complete_adds.add_id')
                ->join('bloodbank_stocks', 'blood_banks.bbank_bstock_id', '=', 'bloodbank_stocks.bbank_bstock_id')
                ->select('blood_banks.*', 'blood_bank_infos.*', 'contact_tables.*','bloodbank_stocks.*','complete_adds.*')
                ->get();

        $user_type= Auth::id();
        $type =DB::select("SELECT user_type FROM users_tables WHERE user_id = '$user_type'");

        return view('bloodbank')->with('bbanks',$bbanks)->with('type',$type);
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

        $addr_count=DB::table('complete_adds')->count();
        $contact_count=DB::table('contact_tables')->count();

        $bbank_info=new BloodBankInfo;  
        $bbank_info->descr = $request->description;
        $bbank_info->bbank_add = $addr_count;
        $bbank_info->contact_id = $contact_count;
        $bbank_info->save();

        $bbank_stocks=new bloodbank_stocks;  
        $bbank_stocks->A_neg = $request->A_neg;
        $bbank_stocks->A_pos = $request->A_pos;
        $bbank_stocks->B_neg = $request->B_neg;
        $bbank_stocks->B_pos = $request->B_pos;
        $bbank_stocks->O_neg = $request->O_neg;
        $bbank_stocks->O_pos = $request->O_pos;
        $bbank_stocks->AB_neg = $request->AB_neg;
        $bbank_stocks->AB_pos = $request->AB_pos;
        $bbank_stocks->save();

        $bbank_info_count=DB::table('blood_bank_infos')->count();
        $bbank_bstock_count=DB::table('bloodbank_stocks')->count();
       
        $bbank=new BloodBanks;  
        $bbank->bbank_name = $request->name;
        $bbank->bbank_info_id = $bbank_info_count;
        $bbank->bbank_bstock_id = $bbank_bstock_count;
        $bbank->save();

        return redirect('/bloodbanks');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
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
