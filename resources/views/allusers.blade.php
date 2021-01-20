@extends('layouts.app')

@section('content')
    
    @foreach($users['name'] as $value=>$name)
    <div class='container card '>
        <br><br>
        <div class='text-center'>
           <i class="fas fa-user fa-7x"></i><br><br>
           <h2>{{$users['name'][$value]->first_name}} {{$users['name'][$value]->mid_name}} {{$users['name'][$value]->last_name}}</h2><hr>
        </div>
            <h5><b>Blood Type</b>: {{$users['info'][$value]->blood_type}}</h5>
            <h5><b>Address</b>: House No. {{$users['add'][$value]->house_num}} {{$users['add'][$value]->street}} St. {{$users['add'][$value]->barangay}}, {{$users['add'][$value]->municipality}} City, {{$users['add'][$value]->province}}</h5>
            <hr>
            <h5><b>Contact Details</b></h5>
            <h5><b>Phone Number</b>: {{$users['contact'][$value]->contact_num}}</h5>
            <h5><b>Email Address</b>: {{$users['contact'][$value]->email}}</h5>
            <hr>
            <h5><b>Birthdate</b>: {{$users['info'][$value]->birthdate}}</h5>
            <h5><b>Gender</b>: {{$users['info'][$value]->gender}}</h5>
        <div class="button-container"><hr> 
            <form action="deleteuser" class='text-right' method="POST">
                @csrf
                @method('delete')
                <input type="hidden" name='id' value="{{$users['user'][$value]->user_id}}">
                <input type="submit" class="btn btn-danger" value="Delete Account">
            </form><br>
        </div>
    </div><br>
    @endforeach
@endsection