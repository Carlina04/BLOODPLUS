@extends('layouts.app')

@section('content')
    
<div class="container">
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
