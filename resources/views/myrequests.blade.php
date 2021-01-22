@extends('layouts.app')

@section('content')
    <div  class="container p-3">
        <div class="container p-2 rounded shadow">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 h5 w-100 bd-highlight">My Requests</div>
            </div>
        </div>

        <div class="container p-3 mt-4">
        @foreach($req as $val)
            @if($val->status=='Pending')
            <div class="card p-3 m-2 text-left">
            @elseif($val->status=='Denied')
            <div class="card p-3 m-2 text-left bg-dark text-light">
            @else
            <div class="card p-3 m-2 text-left bg-success text-light">
            @endif
                <p><b>Hospital Name:</b> {{$val->hospital->hos_name}}<br>
                <b>Branch:</b> {{$val->hospital->hos_branch}}<br>
                <b>Type of Blood Needed:</b> {{$val->req_blood}}<br>
                <b>Description/Notes:</b> {{$val->desc}}<br>
                <b>Status:</b> {{$val->status}}<br>
                <b>Donor:</b> {{$val->request_to}}</p>
                <form action="deletereq" method='POST'>
                    @csrf
                    @method('delete')
                    <input type="hidden" name='req_id' value="{{$val->req_id}}">
                    <input type="submit" value="Cancel" class="btn btn-danger">
                </form>
            </div>
            <br>
        @endforeach
        </div>
    </div>
@endsection