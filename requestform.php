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

	<div class="d-flex shadow-sm position-sticky p-1 bg-white rounded justify-content-between align-items-center container-fluid registration-nav ">
		<div class="container d-flex justify-content-end">
				<button class="btn-sm btn btn-outline-danger border-0">Cancel Request</button>
		</div>
	</div>

	<div class=" shadow-sm position-sticky p-3 bg-white container-fluid">
		<div class="container">
			<p class="requestform-request-text">Request To:</p>
		</div>
		<div class="container d-flex justify-content-start requestform-request">
			<img src="img/sample-pic.png" alt="imghere" class="requestform-donor-pic ml-3">
			<p class="h6 mx-3 align-self-center ">Donor's Name</p>
			<div class="container border-left requestform-request-bt mr-0">
				<p class="h6 requestform-request-text mx-0 p-0">Blood Type :</p>
				<h2 class="d-flex justify-content-center">A</h2>
			</div>
		</div>
	</div>

	<form class="" action="" method="post">
		<div class="container-fluid px-5 pt-0 request-form">
			<div class="form-group my-5">
				<p class="h6 py-3">Patient's Information<hr></p>
				<div class="form-group h6">
					<label>First Name</label>
					<input type="text" class="form-control" name="fName" placeholder="e.g. John" required>
				</div>
				<div class="form-group h6">
					<label>Middle Name</label>
					<input type="text" class="form-control" name="mName" placeholder="e.g. Brown" required>
				</div>
				<div class="form-group h6">
					<label>Last Name</label>
					<input type="text" class="form-control" name="lName" placeholder="e.g. Smith" required>
				</div>
			
				<div class="form-group h6 mt-4 mb-0 row">
					<div class="col-7">
						<div class="form-group">
						<label>Birthdate</label>
						<input type="date" class="form-control" name="bday" value="2020-11-18" min="1950-01-01" max="2020-11-18" required>
						</div>
					</div>
					<div class="col-5">
						<div class="form-group">
							<label>Gender</label><br>
							<select name="gender" class="form-control" required>
							<option selected hidden>Choose...</option>
							<option value="F">Female</option>
							<option value="M">Male</option>
							</select>
						</div>
					</div>
				</div>
			
				<div class="form-group h6 mt-2 mb-0">
					<label>Complete Address</label>
					<div class="container font-weight-normal">
						<div class="row">
							<div class="form-group col-3 py-2">
								<label>House No</label>
							</div>	
						<div class="form-group col-9 p-0">
							<input type="text" class="form-control" name="houseNo" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-3 py-2">
							<label>Street</label>
						</div>
						<div class="form-group col-9 p-0">
							<input type="text" class="form-control" name="street" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-3 py-2">
							<label>Barangay</label>
						</div>
						<div class="form-group col-9 p-0">
							<input type="text" class="form-control" name="barangay" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-3 py-2">
							<label>City</label>
						</div>
						<div class="form-group col-9 p-0">
							<input type="text" class="form-control" name="city" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-3 py-2">
							<label>Province</label>
						</div>
						<div class="form-group col-9 p-0">
							<input type="text" class="form-control" name="province" required>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>


		<div class="container-fluid bg-dark text-light mt-0 px-5 py-3 form-group request-form">
			<div class="form-group">
				<p class="h6 py-3 pl-0">Medical Information<hr class="bg-light"></p>
				<div class="form-group">
					<label>Admitted At	:</label><br>
					<select name="addmitted_at" class="form-control" required>
						<option selected hidden>Choose...</option>
						<option>. . .</option>
					</select>
				</div>
				<div class="form-group h6 d-flex align-items-center">
					<div class="container p-0">
						<label for="">Needed Blood Type : </label>
					</div>
					<div class="container p-0">
						<select name="" class="form-control" class="w-25" required>
							<option selected hidden>Choose...</option>
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
					<div class="container w-50"></div>
				</div>
				<div class="form-group h6">
					<label>Message :</label>
					<textarea name="" id="" cols="30" rows="10" class="form-control	"></textarea>
				</div>
			</div>
			<div class="form-group text-center my-5">
				<input type="submit" class="btn btn-primary" value="Request">
			</div>
		</div>
	</form>	
</body>
<?php include ('scripts.php'); ?>
</html>