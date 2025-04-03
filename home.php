<?php 
session_start();
include "connection.php";


if ($_POST['action'] == "login") {
    $_SESSION['FirstName'] = $_POST['fname'];  // Assuming 'fname' is the first name field
    header("Location: home.php");
    exit();
}

?>


	



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="CSS/style2.css">

</head>
<body>
	<nav>
		<ul>
			<li>  <a href="TestPage.php">Take Exam</a></li>
			<li> <a href="creators.php">Creators</a> </li> 
			<li2> <a href="logout.php">Logout</a> </li2>
			<li3> <img src="Pictures/logo3.gif">  </li3>
		</ul>
	</nav>
	<div class="greet">
	<h2><?php echo "Welcome, " . $_SESSION['FirstName']; ?></h2>
	</div>

	<div class="exam-cont">
		<a href="TestPage.php">
			<div class="exam"> 
				<img src="Pictures/exam.png" width="200px">
				<p> Click on me to take test </p> 
			</div>
		</a>
	</div>
	<div class="rectangle"></div>

</body>
</html>
