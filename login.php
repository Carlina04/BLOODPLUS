<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<title>Blood+ 	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet">
	
</head>
<body>
    <?php 
    session_start();
    include('connection.php');

        if(isset($_POST['login'])){

            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM userstable WHERE email = '$email' AND password = '$password'";

            $result = $conn->query($sql);
            if($row = $result->fetch_assoc()){

                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['info_id'] = $row['info_id'];
                $_SESSION['user_type'] = $row['user_type']; 
            }
            


        }
            if (isset($_SESSION['user_id'])) {
                if ($_SESSION['user_type'] == 'Admin') {
                        header( 'Location: registration.php');
                }else if($_SESSION['user_type'] == 'User'){
                        header('Location: home.php');
                }else{
                    echo 'Cannot LOGIN';
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



