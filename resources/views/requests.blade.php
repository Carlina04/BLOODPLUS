@extends('layouts.app')

@section('content')
    <h1>List of Requests</h1>
    @foreach($req as $val)
    <div class="card">
        <p>Hospital Name: {{$val->hospital->hos_name}}<br>
        Branch: {{$val->hospital->hos_branch}}<br>
        Type of Blood Needed: {{$val->req_blood}}<br>
        Description/Notes: {{$val->desc}}</p>
    </div>
    <form action="deletereq" method='POST'>
            @csrf
            @method('delete')
            <input type="hidden" name='req_id' value="{{$val->req_id}}">
            <input type="submit" value="Cancel" class="btn btn-danger">
    </form>
    @endforeach
@endsection