@extends('layouts.admin')

@section('content')
    <div class="adminnav">
        <div class="container text-center">
            <div class="row align-center">
                <div class="col-sm-3">
                    <a href="/allusers" class="btn btn-sm-lg btn-info p-5">
                        <i class="fa fa-user fa-5x"></i><br>
                        <br>
                        All Users
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="/allrequests" class="btn btn-sm-lg btn-success p-5">
                        <i class="fa fa-list fa-5x"></i><br><br>
                        All Requests
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="/allhospitals" class="btn btn-sm-lg btn-warning p-5">
                        <i class="fa fa-hospital fa-5x"></i><br><br>
                        All Hospitals
                    </a>
                </div>
                <div class="col-sm-3">
                    <a href="/bloodbanks" class="btn btn-sm-lg btn-danger p-5">
                        <i class="fa fa-building fa-5x"></i><br><br>
                        Bloodbanks
                    </a>
                </p>
                </div>
            </div>
        </div>
    </div>
@endsection