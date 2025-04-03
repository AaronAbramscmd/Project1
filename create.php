<?php
session_start(); // Starts session

include "connection.php";  // Make sure the database connection is working properly



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create an Account</title>
	<link rel="stylesheet" type="text/css" href="CSS/color.css">
</head>
<body>
	<img src="Pictures/logo3.gif">
	<form action="addStudent.php" method="POST">
		<h2> Create an account </h2>
		<p> ID: <input type="number" name="id" placeholder="ID"> </p>
		<p> Email: <input type="text" name="email" placeholder="Email"></p>
		<p> First Name: <input type="text" name="fname" placeholder="First Name"></p>
		<p> Last Name: <input type="text" name="lname" placeholder="Last Name"></p>
		<p> Password: <input type="password" name="password" placeholder="Password"></p>
		<p> Do you accept the terms and conditions <input type="checkbox" name="term"> </p>
		<p> <input type="submit" value="Create an account" name="Submit"></p>
	</form>

</body>
</html>