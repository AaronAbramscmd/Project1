<?php
require 'connection.php';
$sql = "INSERT INTO account(ID, FirstName, LastName, Email, Password)
		VALUES($_POST[id], '$_POST[fname]', '$_POST[lname]',
			'$_POST[email]','$_POST[password]');";
$statement = $pdo-> query($sql);
$members   = $statement -> fetchAll();




$sql2		=  "SELECT *
				FROM account;";
$statement  = $pdo->query($sql2);
$members    = $statement-> fetchAll();


header("Location: loginorcreate.php");
	exit();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Getting data from the database</title>
	  <style>
	  	table {
	  		width: 100%;
	  		border-collapse: collapse;
	  	}
	  	th, td {
	  		border: 1px solid black;
	  		padding: 8px;
	  		text-align: left;
	  	}
	  	th {
	  		background-color: #f2f2f2;
	  	}
	  </style>
</head>
<body>
	<h2>Student Information</h2>
	  <table>
	  	<thead>
	  		<tr>
	  			<th>ID</th>
	  			<th>First Name</th>
	  			<th>Last Name</th>
	  			<th>Email</th>
	  			<th>Password</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<?php foreach ($members as $member) { ?>
	  		<tr>
	  		  <td><?php echo $member['ID']; ?></td>
	  		  <td><?php echo $member['FirstName']; ?></td>
	  		  <td><?php echo $member['LastName']; ?></td>
	  		  <td><?php echo $member['Email']; ?></td>
	  		  <td><?php echo $member['Password']; ?></td>
	  		</tr>
	  		<?php } ?>
	  	</tbody>
	  </table>
</body>
</html>
