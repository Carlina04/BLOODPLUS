<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
	<?php 
		session_start();
		include ('connection.php');
		echo "<form method = 'POST'>
				<input type='submit' name = 'logout' value = 'log out'>
			 </form>
		";
		echo "WELCOME USER";
	?>
</body>
</html>