@extends('layouts.admin')

@section('content')
    <div class="container p-3">
        <div class="form-group">
            <a href="/adminnav">← Back to Navigation</a>
        </div>
    
        <div class="container p-2 rounded shadow">
            <div class="d-flex bd-highlight align-items-center">
                <div class="p-2 h5 w-100 bd-highlight">List of Requests</div>
            </div>
        </div>

        <div class="container p-3 mt-4 rounded shadow-sm">
            <table class="table table-bordered table-hover text-justify">
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
                @if($val->status=='Pending')
                <tr>
                @elseif($val->status=='Denied')
                <tr class="table-danger">
                @else
                <tr class="table-success">
                @endif
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