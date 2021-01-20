@extends('layouts.app')

@section('content')
    
<div class="container">
<div class='front-info'>
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
    <hr>
    <div class="container padding">
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
    <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="container-fluid bg-light text-light text-center homepage-content">
    <div class="row h-100">
        <div class="col-6 p-0">
        <button class="h-100 w-100 btn" onclick=" displayContent(0)">Find Blood</button>
        </div>
        <div class="col-6 p-0">
        <button class="h-100 w-100 btn" onclick=" displayContent(1)">Donate Blood</button>
        </div>
    </div>
    </div>

    <div class="container-fluid p-0 main-content">
     <div class="find-blood vh-100">
    
    </div>

  <div class="donate-blood text-center">
    <div class="container-fluid p-5 d-flex align-items-center justify-content-center">
    <p>You still need to register to become a Donor.</p>
    </div>
    <div class="container-fluid p-5 d-flex align-items-center justify-content-center">
      <button class="btn btn-primary">Register Now</button>
    </div>
  </div>
</div>

<script>

  function displayContent(num){
    var find = document.querySelector(".find-blood");
    var donate = document.querySelector(".donate-blood");

    find.style.display="none";
    donate.style.display="none";

    if (num==0) {
      find.style.display="block";
    }else{
      donate.style.display="block";
    }

  }

</script>
        </div>
    </div>
</div>
@endsection
