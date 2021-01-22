<?php 
	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "bloodplus";
	//Connection 
	$conn = new mysqli($server, $username, $password, $db);
	
	    if(isset($_POST['logout'])){

            session_destroy();
            header("Location:login.php");
        }

?>

