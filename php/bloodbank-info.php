<!DOCTYPE html>
<html>
<head>
    <title>REQUEST BLOOD</title>
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

	<div class="d-flex shadow-sm position-sticky p-1 bg-white rounded justify-content-between align-items-center container-fluid registration-nav ">
		<div class="container d-flex justify-content-start">
				<button class="btn-lg btn border-radius-50 p-2"><i class="fas fa-chevron-circle-left"></i><span class="h6"> Back</span></button>
		</div>
	</div>

	<div class="position-sticky container bbank-info">
		<div class="row p-1 user-select-none">
			<div class="col-3 p-3 ">
				<img src="img/bbank.png" alt="imghere" class="w-100">
			</div>
			<div class="col-9 d-flex align-items-center">
				<p class="h4">Blood Bank Name</p>
			</div>
		</div>
	</div>
	<div class="container-fluid p-0">
		<div class="container py-1 px-3 border-top shadow-sm bg-dark text-light bbank-description-header" onclick="openInfo()">
			<p class="m-0 user-select-none"><i class="fa fa-info-circle mr-1 info-icon"></i>Information</p>
		</div>
		<div class="container border-bottom p-3 bbank-description" style="display:none">
			<div class="row">
				<div class="col-3">
					<p>Description : </p>
				</div>
				<div class="col-9">
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
					Dolores explicabo tenetur placeat voluptatem laudantium animi, 
					iure, autem illum, fugit beatae vel quasi sed ad id in velit 
					soluta! Quisquam, rerum!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<p>Address : </p>
				</div>
				<div class="col-9">
					<p>Something something Cebu City</p>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<p>Contacts : </p>
				</div>
				<div class="col-9">
					<p class="m-0">09562474116</p>
					<p class="m-0">bloodplus@gmail.com</p>
				</div>
			</div>
		</div>

		<div class="container bg-dark border-bottom pt-1"></div>
	</div>

	<div class="container-fluid px-4 my-4 pt-0 request-form">
		<table class="table text-center table-striped border-top-0 table table-borderless">
			<thead>
				<tr>
					<th scope="col">Blood Type</th>
					<th scope="col">Blood Bags Available</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">A</th>
					<td>50</td>
				</tr>
				<tr>
					<th scope="row">B</th>
					<td>25</td>
				</tr>
				<tr>
					<th scope="row">AB</th>
					<td>10</td>
				</tr>
			</tbody>
		</table>
	</div>

    <script>

        function openNav() {
            document.getElementById("side").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("side").style.width = "0";
        }

		function openInfo() {
            var info=document.querySelector(".bbank-description");
			var icon=document.querySelector(".info-icon");

			if(info.style.display=="none"){
				info.style.display="block";
				icon.style.color="#ff4f4f";
			}else{
				info.style.display="none";
				icon.style.color="white";
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
<?php include ('scripts.php'); ?>
</html>