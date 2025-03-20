<?php
$password = '';
$message ='';
function is_password(string $password): bool
{
	if (
	    mb_strlen($password) >= 12
	    and preg_match('/[A-Z]/', $password)
	    and preg_match('/[a-z]/', $password)
	    and preg_match('/[0-9]/', $password)

	) {
		return true;
	}
	return false;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$password = $_POST['password'];
	$valid = is_password($password);
	$message = $valid ? 'Password is valid' :
			'password is not strong enough';
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Exam Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<form action="home.php" method="POST">
		<p>Email: <input type="text" name="email"></p>
		<p>Password: <input type="text" name="password"></p>
		<p><input type="submit" value="Login" name="name"></p>
	</form>

	<form action="create.php" method="POST">
		<p2> If you don't have an account click here </p2>
		<p><input type="submit" value="Create an account" name="account"></p>
	</form>
</body>

