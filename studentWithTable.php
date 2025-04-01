<?php  
require 'connection.php';


$sql		= "SELECT *
			    FROM account;";
$statement 	= $pdo->query($sql);
$members 	= $statement -> fetchAll();
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
	  <p>
	  	<?php
	  	message();
	  	?>
	  </p>

</body>
</html>