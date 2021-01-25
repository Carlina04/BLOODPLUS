@extends('layouts.app')

@section('content')
<div class='container'>
        <div class="form-group">
                <a href="/home">← Home</a>
        </div>
    <div class='container card '>
    <br><br>
        
        @foreach($users as $value)
        <div class='text-center'>
           <i class="fas fa-user fa-7x"></i><br><br>
           <h2>{{$value->first_name}} {{$value->mid_name}} {{$value->last_name}}</h2><hr>
        </div>
           <h5><b>Blood Type</b>: {{$value->blood_type}}</h5>
           <h5><b>Address</b>: House No. {{$value->house_num}} {{$value->street}} St. {{$value->barangay}}, {{$value->municipality}} City, {{$value->province}}</h5>
        <hr>
        <h5><b>Contact Details</b></h5>
        <h5><b>Phone Number</b>: {{$value->contact_num}}</h5>
        <h5><b>Email Address</b>: {{$value->email}}</h5>
        <hr>
        <h5><b>Birthdate</b>: {{$value->birthdate}}</h5>
        <h5><b>Gender</b>: {{$value->gender}}</h5>
        <div class="button-container"><hr>
                <form class='text-center' method="GET" action="/updateuser">
                        <input type="hidden" name='id' value="{{$value->user_id}}">
                        <input type="submit" class="btn btn-success" value="Update">
                </form><hr>
                <form action="deleteuser" class='text-right' method="POST">
                        @csrf
                        @method('delete')
                        <input type="hidden" name='id' value="{{$value->user_id}}">
                        <input type="submit" class="btn btn-danger" value="Delete Account">
                </form><br>
        </div>
        @endforeach
    </div>
</div>
@endsection