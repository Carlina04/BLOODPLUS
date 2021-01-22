<?php
    include ('register.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blood+</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet">
	
</head>
<body>

<div id="front" class="container text-center p-4">
    <div class="container text-center front-sub">
        <img src="img/logo.png" alt="logo" class="front-logo">
        <h3 class='app-name text-dark'><b>BLOOD+</b></h3>
    </div>
    <div class="container text-center p-4 front-sub">
        <form action="home-page.php">
            <div class="form-group">
                <label class="form-control text-left input-label p-0" for="">Email Address</label>
                <input class="form-control text-center" type="text" name="" id="">
            </div>
            <div class="form-group">
                <label class="form-control text-left input-label p-0" for="">Password</label>
                <input class="form-control text-center" type="text" name="" id="">
            </div>
            <div class="form-group">
                <input class="btn btn-primary px-4" type="submit" name="" value="Log In">
            </div>
            <p id="login-error" class="text-danger"></p>
        </form>
    </div>
   
    <div class="container-fluid padding text-center mt-5">
        <h6>New User? | 
            <button type="button" class="btn btn-primary btn-sm">Sign up</button>
            <button type="button" class="btn btn-outline-dark btn-sm" onclick="displayInfo(),window.location.href='#about'">Learn More</button>
        </h6>
    </div>
</div>

<div class='front-info' style="display:none">
<hr>
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
    <div class="container-fluid padding text-center">
        <hr>
        <h5>Find Donor Now | <button type="button" class="btn btn-primary text-light">Sign up</button></h5>
        <hr>
    </div>
</div>

<script>
    function displayInfo(){
        var find = document.querySelector(".front-info");
        find.style.display="block";
    }
</script>


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</html>



