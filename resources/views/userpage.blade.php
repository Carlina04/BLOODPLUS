@extends('layouts.app')

@section('content')
    
    <div class='container text-center'>
        <i class="fas fa-user fa-7x"></i><br><br>
        @foreach($users as $value)
           <h2>{{$value->first_name}} {{$value->mid_name}} {{$value->last_name}}</h2>
           <h5>Blood Type: {{$value->blood_type}}</h5>
           <h5>Address: {{$value->house_num}} {{$value->street}} St. {{$value->barangay}},{{$value->municipality}} City,{{$value->province}}</h5>

        <div class="button-container">
                <form action="deleteuser" method="POST">
                        @csrf
                        @method('delete')
                        <input type="hidden" name='id' value="{{$value->user_id}}">
                        <input type="submit" class="btn btn-danger" value="Delete">
                </form>
                <form method="GET" action="/uuser">
                        <input type="hidden" name='id' value="{{$value->user_id}}">
                        <input type="submit" class="btn btn-success" value="Update">
                </form>
        </div>
        @endforeach
    </div>
        
@endsection