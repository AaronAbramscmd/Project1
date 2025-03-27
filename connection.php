<?php
$type		= 'mysql';		// Type of database
$server 	= 'localhost';	// Server the database is on
$db			= 'project';		// Name of the database
$port 		= '3306';		// Port is 3306 in XAMPP
$charset 	= 'utf8mb4';	// UTF-8 encoding using 4 bytes of data per character

$username 	= 'root';		// Enter YOUR uersname here
$password	= '';			// Enter YOUR password here

$options	= [								// Options for how PDO works
	PDO::ATTR_ERRMODE					=> PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE		=> PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES 			=> false,
];																  // Set PDO options

//DO NOT CHANGE ANYHTING BENEATH THIS LINE
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset"; // Create DSN
try {
	$pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
	throw new PDOException($e ->getMessage(), $e ->getcode());
	
}

?>