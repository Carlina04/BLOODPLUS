@extends('layouts.app')

@section('content')
    <div id="front" class="container text-center p-4">
    	<div class="container text-center front-sub">
            <h1>List of All Requests</h1>
            <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                <th scope="col">Requester ID</th>
                <th scope="col">Hospital Name</th>
                <th scope="col">Branch</th>
                <th scope="col">Type of Blood Needed</th>
                <th scope="col">Description/Notes</th>
                <th scope="col">Status</th>
                <th scope="col">Donor ID</th>
                </tr>
            </thead>
            <tbody>
            @foreach($req as $val)
                <tr>
                <td>{{$val->request_from}}</td>
                <td>{{$val->hospital->hos_name}}</td>
                <td>{{$val->hospital->hos_branch}}</td>
                <td>{{$val->req_blood}}</td>
                <td>{{$val->desc}}</td>
                <td>{{$val->status}}</td>
                <td>{{$val->request_to}}</td>
                </tr>
            @endforeach
            </tbody>
        </div>
    </div>
@endsection