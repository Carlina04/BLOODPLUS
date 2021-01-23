@extends('layouts.app')

@section('content')

<div class='container'>
  <div class="form-group">
    <a href="/dashboard">← Dashboard</a>
  </div>
<div class="container p-3">
  
  <div class="container p-2 rounded shadow">
    <div class="d-flex bd-highlight align-items-center">
      <div class="mr-auto p-2 bd-highlight h-auto">
        <h5>Requests</h5>
      </div>
      <div class="p-2 bd-highlight">
        <button class="btn btn-outline-dark seek-btn" onclick="displayContent(0)">My Requests</button>
      </div>
      <div class="p-2 bd-highlight">
        <button class="btn btn-outline-dark find-btn" onclick="displayContent(1)">Seeker Requests</button>
      </div>
    </div>
  </div>

  <div class="container mt-4 find-blood p-0">



  <div class="container mt-4 shadow-sm rounded donate-blood p-0" style="display: none">
   
    @if(count($seekers)>0)
      @foreach ($seekers as $seeker)
        @if($seeker->status=='Pending')
          <div class='container  mt-5 p-3 rounded shadow'>
        @else
          <div class='container  mt-5 p-3 rounded shadow' style='background-color:	#BEBEBE;'>
        @endif
            <div class='mt-3 d-flex justify-content-start p-2'>
              <p class='h6 m-0'><span class='text-secondary'>Requested By : </span>{{$seeker->first_name}} {{$seeker->last_name}}</p>
            </div>
            @if($seeker->status=='Pending')
              <p class='h6 m-0 p-2'><span class='text-secondary'>Status : </span>{{$seeker->status}}</p>
            @elseif($seeker->status=='Denied')
              <p class='h6 m-0 p-2'><span class='text-secondary'>Status : </span><span class='bg-danger p-1'>{{$seeker->status}}</span></p>
            @else
              <p class='h6 m-0 p-2'><span class='text-secondary'>Status : </span><span class='bg-success p-1'>{{$seeker->status}}</span></p>
            @endif
            
            
            <hr>

            <div class='mt-3 d-flex justify-content-start p-2'>
              <p class='h6 m-0'><span class='text-dark'>Patient Information</span></p>
            </div>

            <div class=' px-4'>
              <p class='h6 m-0 p-1'><span class='text-secondary'>Name : </span>{{$seeker->last_name}}, {{$seeker->first_name}} {{$seeker->mid_name}}</p>
              <p class='h6 m-0 p-1'><span class='text-secondary'>Age : </span>
                <?php
                  $birth= @value($seeker->birthdate);
                  $age = \Carbon\Carbon::parse($birth)->age;
                  echo $age;
                ?>
              </p>
              <p class='h6 m-0 p-1'><span class='text-secondary'>Gender : </span>
                <?php
                  if($seeker->gender==='m'){
                    echo "Male";
                  }else{
                    echo "Female";
                  }
                ?>
              </p>
              <p class='h6 m-0 p-1'><span class='text-secondary'>Hospital Admitted : </span>{{$seeker->hos_name}}</p>
              <div class='d-flex justify-content-start p-1'>
                <div class='mr-2'>
                  <p class='h6 m-0 text-secondary'>Contact Details : </p>
                </div>
                <div>
                    <p class='h6 m-0'>{{$seeker->contact_num}}</p>
                    <p class='h6 m-0'>{{$seeker->email}}</p>
                </div>
              </div>
              <p class='h6 m-0 p-1'><span class='text-secondary'>Blood Type Needed : </span>{{$seeker->req_blood}}</p>
              <div class='d-flex justify-content-start p-1'>
                <div class='mr-2'>
                  <p class='h6 m-0 text-secondary'>Description :</p>
                </div>
                <div>
                  <p class='h6 m-0'>{{$seeker->desc}}</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach

    @else
        <div class="container bg-light d-flex justify-content-center p-4">
            <h5>No Request</h5>
        </div>
    @endif
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

@endsection
