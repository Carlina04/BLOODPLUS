@extends('layouts.app')

@section('content')
    <h1>List of Affiliated Hospitals</h1>
    <a href="/request">Back</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Hospital Name</th>
        <th scope="col">Hospital Branch</th>
        <th scope="col">Hospital Address</th>
        <th scope="col">Contacts</th>
        <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
    @foreach($hos as $val)
        <tr>
        <td>{{$val->hos_name}}</td>
        <td>{{$val->hos_branch}}</td>
        <td>{{$val->address->province}}, {{$val->address->municipality}}, {{$val->address->barangay}}, {{$val->address->street}}</td>
        <td>{{$val->contact->contact_num}}<br>{{$val->contact->email}}</td>
        <td>{{$val->desc}}</td>
        </tr>
    @endforeach
    </tbody>
@endsection