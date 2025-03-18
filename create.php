<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create an Account</title>
</head>
<body>
	<form action="loginorcreate.php" method="POST">
		<h2> Create an account </h2>
		<p> Email: <input type="text" name="email"></p>
		<p> First Name: <input type="text" name="fname"></p>
		<p> Last Name: <input type="text" name="lname"></p>
		<p> Password: <input type="password" name="password"></p>
		<p> Do you accept the terms and conditions <input type="checkbox" name="term"> </p>
		<p> <input type="submit" value="Create an account" name="Submit"></p>
	</form>

</body>
</html>