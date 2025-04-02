<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Exam 1</title>
</head>
<body>
	<h1> Exam 1</h1>
	<form action="result.php" method="POST">
		<h2> Q1. What is the professor's name for CITA 355?</h2>
		<p> <input type="radio" name="Q1">Mufsafa Elfituri <br>
			<input type="radio" name="Q1">Mutfsafa Elfituri <br>
			<input type="radio" name="Q1">Elfituri Mustafa <br>		
			<input type="radio" name="Q1">I Dont Know </p>


		<h2> Q2. Which is the correct code for displaying text in PHP? </h2>
		<p> <input type="radio" name="question_2" value="echo"> echo <br>
        	<input type="radio" name="question_2" value="print"> print <br>
        	<input type="radio" name="question_2" value="$_print"> $_print <br>
        	<input type="radio" name="question_2" value="$_echo"> $_echo</p>

        	<input type="submit" name="submit" value="Submit Exam">
	</form>

</body>
</html>