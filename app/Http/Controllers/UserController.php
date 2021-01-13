<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompleteAdd;
use App\Models\CompleteName;
use App\Models\ContactTable;
use App\Models\InfoTable;
use App\Models\UsersTable;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/form');
    }

    public function idx()
    {
        $user_id = Auth::user()->id;
        $users = DB::table('users_tables')
                ->join('info_tables', 'users_tables.info_id', '=', 'info_tables.info_id')
                ->join('contact_tables', 'users_tables.info_id', '=', 'contact_tables.contact_id')
                ->join('complete_names', 'users_tables.info_id', '=', 'complete_names.name_id')
                ->join('complete_adds', 'users_tables.info_id', '=', 'complete_adds.add_id')
                ->select('users_tables.*', 'info_tables.*', 'contact_tables.*','complete_names.*','complete_adds.*')
                ->where('users_tables.info_id', $user_id)
                ->get();
        return view('userpage')->with('users',$users);
    }

    public function user()
    {
        $user_id = Auth::user()->id;
        $users = DB::table('users_tables')
                ->join('info_tables', 'users_tables.info_id', '=', 'info_tables.info_id')
                ->join('contact_tables', 'users_tables.info_id', '=', 'contact_tables.contact_id')
                ->join('complete_names', 'users_tables.info_id', '=', 'complete_names.name_id')
                ->join('complete_adds', 'users_tables.info_id', '=', 'complete_adds.add_id')
                ->select('users_tables.*', 'info_tables.*', 'contact_tables.*','complete_names.*','complete_adds.*')
                ->where('users_tables.info_id', $user_id)
                ->get();
        return view('uuser')->with('users',$users);
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
        $name = new CompleteName;
        $name->last_name = $request->lName;
        $name->mid_name = $request->mName;
        $name->first_name = $request->fName;
        $name->save();

        $add = new CompleteAdd;
        $add->province = $request->province;
        $add->municipality = $request->municipality;
        $add->barangay = $request->barangay;
        $add->street = $request->street;
        $add->house_num = $request->houseNo;
        $add->save();
        
        $contact = new ContactTable;
        $contact->contact_num = $request->num;
        $contact->email = $request->email;
        $contact->save();

        $nameid = DB::table('complete_names')->where('last_name', $request->lName)->value('name_id');
        $addid = DB::table('complete_adds')->where('house_num', $request->houseNo)->value('add_id');
        $contactid = DB::table('contact_tables')->where('contact_num', $request->num)->value('contact_id');

        $info = new InfoTable;
        $info->name_id = $nameid;
        $info->birthdate = $request->bday;
        $info->add_id = $addid;
        $info->gender = $request->gender;
        $info->contact_id = $contactid;
        $info->blood_type = $request->blood;
        $info->save();

        $infoid = DB::table('info_tables')->where('birthdate', $request->bday)->first()->info_id;
        $user = new UsersTable;
        $user->info_id = $infoid;
        $user->user_type = 'user';
        $user->user_photo = 'none';
        $user->save();

        return redirect('/home');
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
        $user_id = Auth::user()->id;
        $users = UsersTable::where('user_id', $user_id)
            ->first();
        $users->birthdate =$request->bday;
        $users->gender = $request->gender;
        $users->blood_type = $request->blood;
        $users->save();
        return redirect('/userpage');
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
