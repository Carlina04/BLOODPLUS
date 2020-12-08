<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blood+</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet">
	
</head>
<body onload="displayContent(0)">

<div id="side" class="side-panel bg-dark">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="position-relative h-100">
    <div class="container text-center">
      <img src="img/sample-pic.png" alt="" class="w-50">
      <p class="text-light p-2">Name of User</p>
    </div>
    <div class="side-panel-options p-1">
      <a href=""><i class="fas fa-home mx-2"></i>Home</a>
      <a href=""><i class="fas fa-bell mx-2"></i>Notifications</a>
      <a href=""><i class="fas fa-history mx-2"></i>History</a>
      <a href=""><i class="fas fa-university mx-2"></i>Blood Bank</a>
      <a href=""><i class="fas fa-cog mx-2"></i>Settings</a>
    </div>
  </div>
</div>


<div class="nav container-fluid text-light p-2 d-flex justify-content-between bg-dark ">
  <p class="openside m-0" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</p>
  <p class="center-text m-0 p-1"></p>
  <p></p>
</div>

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
  <div class="find-blood container-fluid h-100 p-0">
    <div class="container-fluid p-2 filter text-light bg-dark" style="height:100%">
      <div class="container filter-buttons p-0">
        <div class="container-fluid text-center h5 filter-text">
          <p>Donor Search</p>
          <hr>
        </div>
        <div class="row d-flex justify-content-between m-0">
          <div class="col-5">   
            <div class="form-group">
							<label>Location:</label>
							<select name="" class="form-control" required>
                <option selected hidden>Filter...</option>
                <option value=""></option>
							</select>
						</div>
          </div>
          <div class="col-4">
            <div class="form-group">
							<label>Blood Type :</label>
							<select name="" class="form-control" required>
                <option selected hidden>Filter...</option>
                <option value="A-">A-</option>
                <option value="A+">A+</option>
                <option value="B-">B-</option>
                <option value="B+">B+</option>
                <option value="O-">O-</option>
                <option value="O-">O+</option>
                <option value="AB-">AB-</option>
                <option value="AB+">AB+</option>
							</select>
						</div>
          </div>
          <div class="col-3 d-flex align-items-center pt-2">
            <input type="submit" class="btn form-control btn-primary" value="Filter" onclick="showFilter()">
          </div>
        </div>
      </div>
    </div>
    <div class="container filter-content" style="display:none">
        <button class="btn-sm btn btn-outline-danger border-0">content</button>
    </div>
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
  function openNav() {
    document.getElementById("side").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("side").style.width = "0";
  }

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

  function showFilter(){
    var filter = document.querySelector(".filter");
    var filterText = document.querySelector(".filter-text");
    var content = document.querySelector(".filter-content");

    filter.style.height="20%";
    filterText.style.display="none";

    content.style.height="80%";
    content.style.display="block";

  }

</script>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</html>



