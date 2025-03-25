<?php
require 'Project_dbc.php';
$sql		= "SELECT *
			   FROM account;";
$statement	= $pdo ->query($sql);
$members 	= $statement ->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Data from databse</title>
</head>
<body>
	<?php foreach ($members as $key => $member) { ?>
		<p>
			<?php echo $member['StudentId'] ?>
			<?php echo $member['FirstName'] ?>
			<?php echo $member['LastName'] ?>
			<?php echo $member['Email'] ?>
			<?php echo $member['Password'] ?>
		</p>
	<?php } ?>

</body>
</html>