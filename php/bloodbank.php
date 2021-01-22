<!DOCTYPE html>
<html>
<head>
    <title>BLOOD BANK</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
		session_start();
		include ('connection.php');
	?>

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

	<div class=" shadow-sm position-sticky p-3 bg-white d-flex justify-content-between container-fluid bloodbank-title">
		<div class="container d-flex h-100 justify-content-start">
			<img src="img/bbank.png" alt="imghere" class="h-100">
			<p class="h6 mx-3 my-0 align-self-center">  Blood Banks</p>
        </div>
        <div class="container d-flex h-100 justify-content-start">
			<input type="text"class="form-control mr-2">
			<button class="btn btn-success">Find</button>
        </div>
	</div>
    


    <script>

        function openNav() {
            document.getElementById("side").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("side").style.width = "0";
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
<?php include ('scripts.php'); ?>
</html>