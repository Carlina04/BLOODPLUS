@extends('layouts.app')

@section('content')
    <h1>List of Hospitals</h1>
    @foreach($hos as $val)
    <p>Hospital Name: {{$val->hos_name}}<br>
        Branch: {{$val->hos_branch}}<br>
        <!--Hospital Address: {{$val->hos_add}}<br>
        Contact: {{$val->hos_contact}}<br>-->
        Description: {{$val->desc}}</p>
    @endforeach
@endsection