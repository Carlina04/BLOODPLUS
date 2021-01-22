<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CompleteName;
use App\Models\CompleteAdd;
use App\Models\ContactTable;
use App\Models\BloodBankInfo;
use App\Models\BloodBanks;
use App\Models\BloodBankStocks;
use DB;

class BloodbankInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $data = DB::table('blood_banks')
                ->join('blood_bank_infos', 'blood_banks.bbank_info_id', '=', 'blood_bank_infos.bbank_info_id')
                ->join('contact_tables', 'blood_bank_infos.contact_id', '=', 'contact_tables.contact_id')
                ->join('complete_adds', 'blood_bank_infos.bbank_add', '=', 'complete_adds.add_id')
                ->join('bloodbank_stocks', 'blood_banks.bbank_bstock_id', '=', 'bloodbank_stocks.bbank_bstock_id')
                ->select('blood_banks.*', 'blood_bank_infos.*', 'contact_tables.*','bloodbank_stocks.*')
                ->where('blood_banks.bbank_id',$request->id)
                ->get();

        if($request->condition==1){
            foreach($data as $data){
                DB::update("UPDATE blood_banks SET bbank_name = '$request->name' WHERE bbank_id = '$data->bbank_id'");
                DB::update("UPDATE blood_bank_infos SET descr = '$request->description' WHERE bbank_info_id = '$data->bbank_info_id'");
                DB::update("UPDATE complete_adds SET province = '$request->province',municipality = '$request->municipality',
                    street = '$request->street',house_num = '$request->houseNo',barangay = '$request->barangay'
                    WHERE add_id = '$data->bbank_add'");
                DB::update("UPDATE contact_tables SET contact_num = '$request->num',email = '$request->email'
                    WHERE contact_id = '$data->contact_id'");
                DB::update("UPDATE bloodbank_stocks SET A_neg = '$request->A_neg',A_pos = '$request->A_pos',B_neg = '$request->B_neg',
                    B_pos = '$request->B_pos',O_neg = '$request->O_neg',O_pos = '$request->O_pos',AB_neg = '$request->AB_neg',AB_pos = '$request->AB_pos'
                    WHERE bbank_bstock_id = '$data->bbank_bstock_id'");
                
            }
            
        }

        $info = DB::table('blood_banks')
                ->join('blood_bank_infos', 'blood_banks.bbank_info_id', '=', 'blood_bank_infos.bbank_info_id')
                ->join('contact_tables', 'blood_bank_infos.contact_id', '=', 'contact_tables.contact_id')
                ->join('complete_adds', 'blood_bank_infos.bbank_add', '=', 'complete_adds.add_id')
                ->join('bloodbank_stocks', 'blood_banks.bbank_bstock_id', '=', 'bloodbank_stocks.bbank_bstock_id')
                ->select('blood_banks.*', 'blood_bank_infos.*', 'contact_tables.*','bloodbank_stocks.*','complete_adds.*')
                ->where('blood_banks.bbank_id',$request->id)
                ->get();

        $id = Auth::id();
        $user_type=DB::select("SELECT user_type FROM users_tables WHERE user_id = '$id'");

        foreach($user_type as $type){
            if($type->user_type=="user"){
                return view('bloodbank-info-user')->with('info',$info);
            }else{
                return view('bloodbank-info')->with('info',$info);
            }
        }


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
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::delete("DELETE FROM blood_banks WHERE bbank_id = '$request->id'");
        return redirect('/bloodbanks');
    }
}
