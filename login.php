<?php include ('register.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<title>Blood+ 	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet">
	<style type="text/css">
        .error {
            width: 92%; 
            padding: 10px;
            margin: 0px auto; 
            border: 1px solid #a94442; 
            color: #a94442; 
            background: #f2dede; 
            border-radius: 5px; 
            text-align: center;
      }   
    </style>
</head>
<body>
    <?php
    $errors = array(); 
    if (isset($_POST['login'])) {
      $_SESSION['email'] = $_POST['email'];
      $password = $_POST['password'];

      if (empty($username)) {
        array_push($errors, "Username is required");
      }
      if (empty($password)) {
        array_push($errors, "Password is required");
      }

      if (count($errors) == 0) {
        
        $query = "SELECT * FROM userstable WHERE email ='".$_SESSION['email']."' AND password = '$password'";
        $results = $conn->query($query);
        if ($results->num_rows == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
          array_push($errors, "Wrong username/password combination");
        }
      }
    }

    ?>
    <div id="front" class="container text-center p-4 position-relative">
        <div class="container text-center front-sub">
            <img src="img/logo.png" alt="logo" class="front-logo">
            <h3 class='app-name text-dark'><b>BLOOD+</b></h3>
        </div>
        <div class="container text-center p-4 front-sub">
            <form action="" method="POST">
                <?php include('error.php'); ?>
                <div class="form-group">
                    <label class="form-control text-left input-label p-0">Email Address</label>
                    <input class="form-control text-center" type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label class="form-control text-left input-label p-0">Password</label>
                    <input class="form-control text-center" type="password" name="password" required>
                </div>
                <div class="form-group">
                    <input class="btn btn-success px-4" type="submit" name="login" value="Log In">
                </div>
                <p id="login-error" class="text-danger"></p>
            </form>
        </div>
        <hr>
        <div class="container-fluid padding text-center mt-5">
            <h6>New User? | 
                <a href="registration.php" class="btn signup-btn text-light btn-sm">Sign up</a> 
                <button type="button" class="btn btn-outline-dark btn-sm">Learn More</button>
            </h6>
        </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</html>



