<!DOCTYPE html>
<html>
<head>
    <title>REQUEST</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
		session_start();
		include ('connection.php');
	?>

	<div id="front" class="container text-center p-4">
    	<div class="container text-center front-sub">
			<h1>Request Form</h1>

			<form method="POST" action="requestform.php">
				<div class="form-group">	
					<label class="form-control text-left input-label p-0 m-0" for="reqblood">Needed Blood type</label>
					<select class="form-control" id="reqblood" name="reqblood" required>
						<option selected hidden>Choose...</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select>
				</div>
				<div class="form-group h6 mt-4 mb-0 row">
					<div class="col-6">
						<div class="form-group">
							<label class="form-control text-left input-label p-0 m-0" for="hos_name">Admitted Hospital</label>
							<input type="text" class="form-control" name="hos_name" placeholder="Name of Hospital" required>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
						<label class="form-control text-left input-label p-0 m-0" for="city">Hospital Branch</label>
						<input type="text" class="form-control" name="city" placeholder="Name of City"required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="form-control text-left input-label p-0 m-0" for="desc">Description/Notes:</label>
					<textarea name="desc" class="form-control text-justify p-10 m-0"></textarea>
				</div>
				<br>
				<button class="btn btn-primary w-50">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>