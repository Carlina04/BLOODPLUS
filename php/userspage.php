<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
	<?php 
		session_start();
		include ('connection.php');
	?>

	<div class="container">
		<form method = 'POST'>
				<input type='submit' name = 'logout' value = 'log out'>
		</form>
	</div>
</body>
</html>