@extends('layouts.app')

@section('content')
    <h1>Request Sent!</h1>
    @foreach($req as $val)
    <div class="card">
        <p>Hospital Name: {{$val->hos_admit_id->hos_name}}<br>
        Branch: {{$val->branch}}<br>
        Type of Blood Needed: {{$val->req_blood}}<br>
        Description/Notes: {{$val->desc}}</p>
    </div>
    <!--<form action="deletereq" method='POST'>
            @csrf
            @method('delete')
            <input type="hidden" name='req_id' value="{{$val->id}}">
            <input type="submit" value="Delete" class="btn btn-danger">
    </form>-->
    @endforeach
@endsection