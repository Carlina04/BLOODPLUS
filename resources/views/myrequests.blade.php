@extends('layouts.app')

@section('content')
    <div id="front" class="container text-center p-4">
        <div class="container text-center front-sub">
            <h1>My Requests</h1>
            @foreach($req as $val)
            <div class="card p-3 m-2 text-left">
                <p><b>Hospital Name:</b> {{$val->hospital->hos_name}}<br>
                <b>Branch:</b> {{$val->hospital->hos_branch}}<br>
                <b>Type of Blood Needed:</b> {{$val->req_blood}}<br>
                <b>Description/Notes:</b> {{$val->desc}}<br>
                <b>Status:</b> {{$val->status}}<br>
                <b>Donor:</b> {{$val->request_to}}</p>
            </div>
            <form action="deletereq" method='POST'>
                    @csrf
                    @method('delete')
                    <input type="hidden" name='req_id' value="{{$val->req_id}}">
                    <input type="submit" value="Cancel" class="btn btn-danger">
            </form>
            <br>
    @endforeach
        </div>
    </div>
@endsection