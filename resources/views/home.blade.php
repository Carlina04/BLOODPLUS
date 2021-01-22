@extends('layouts.app')

@section('content')

<div class='front-info'>
    <div class="container bg-danger text-center">
        <br>
        <br>
        <br>
    </div>

    <div class="container-fluid padding text-center">
        <div class="container">
            <img src="img/logoblood.png" alt="picture" style="width:50%;">
        </div>
    </div>

    <div class="container bg-danger text-center">
        <div class="row align-center p-5">
            <div class="col-sm-4">
                <a href="/dashboard" class="btn btn-sm-lg btn-light p-3">
                    <img class="app-info-icon" src="img/dashboard.png" alt="picture">
                </a>
                <h4>Dashboard</h4>
            </div>
            <div class="col-sm-4">
                <a href="/myrequests" class="btn btn-sm-lg btn-light p-3">
                    <img class="app-info-icon" src="img/checklist.png" alt="picture">
                </a>
                <h4>My Requests</h4>
            </div>
            <div class="col-sm-4">            
                <a href="/bloodbanks" class="btn btn-sm-lg btn-light p-3">
                    <img class="app-info-icon" src="img/bbank.png" alt="picture">
                </a>
                <h4>Blood Banks</h4>
            </div>
        </div>
    </div>

    <div id="about" class="container padding">
        <div class="app-info text-center">
            <div class="container">
                <h1 class="app-what">What is Blood+?</h1>
            </div>
            <hr>
            <div class="container">
                <p class="app-what-text text-justify">
               &nbsp&nbsp&nbsp&nbsp&nbsp This blood donation system caters to the appointment between the donor and the
patient. The system can provide different functions to fully meet what the users are
finding. The system connects those who seek blood and those who can donate blood.
Users will always get notified in every update on the appointment. Information about the
donor and the patient is kept secured in the system. Since most people carry their
phones, it ensures automatic tracking of the location which helps users find donors in an
easy way. The data is stored in a centralized server which cannot be accessed easily. <br>    
                </p>
            </div>
        </div>
    </div>
        
    <div class="container-fluid padding text-center">
        <div class="container">
            <img class="app-info-icon" src="img/find.png" alt="picture">
            <h4>Find Blood Faster</h4>
        </div>
        <div class="container my-5">
            <img class="app-info-icon" src="img/donate.png" alt="picture">
            <h4>Help Donate Blood</h4>
        </div>
    </div>
    <div class="container padding bg-danger">
        <div class="app-info text-center">
            <div class="container">
                <h1 class="app-what">Why Blood+?</h1>
            </div>
            <hr>
            <div class="container app-what-text text-justify">
                <p>
                &nbsp&nbsp&nbsp&nbsp&nbsp The system can accept posts all around the vicinity. The data in the system will be
stored within a time span. It will be deleted on the server after the time requirement.
Accessing the system must require an internet connection. The application is only
limited within Cebu City for now and sooner be expanded once the application becomes
stable enough to handle a very large amount of data from different parts of the country.    
                </p>
            </div>
        </div>
    </div>
</div>
 
@endsection
