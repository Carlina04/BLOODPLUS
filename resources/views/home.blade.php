@extends('layouts.app')

@section('content')

<div class='front-info'>
    <div class="container-fluid padding text-center">
        <div class="container">
            <img src="img/logoblood.png" alt="picture" style="width:50%;">
        </div>
    </div>

    <div class="container bg-danger text-center">
        <div class="row align-center p-5">
            <div class="col-4">
                <a href="/dashboard">
                    <img class="app-info-icon" src="img/dashboard.png" alt="picture">
                </a>
                <h4>Dashboard</h4>
            </div>
            <div class="col-4">
                <a href="/myrequests">
                    <img class="app-info-icon" src="img/checklist.png" alt="picture">
                </a>
                <h4>My Requests</h4>
            </div>
            <div class="col-4">            
                <a href="/bloodbanks">
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
                    Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequat. Duis aute 
                    irure dolor in reprehenderit in voluptate 
                    velit esse cillum dolore eu fugiat nulla 
                    pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia 
                        deserunt mollit anim id est laborum.    
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
                    Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequat.    
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequat.    
                </p>
            </div>
        </div>
    </div>
</div>
 
@endsection
