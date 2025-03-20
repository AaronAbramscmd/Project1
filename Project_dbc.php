<?php
$type     = 'mysql';        // Type of database
$server   = 'localhost';    // Server the database is on
$db       = 'onlineexam';      // Name of the database
$port     = '3306';         // Port is usually 8889 in MAMP and 3306 in XAMPP
$charset  = 'utf8mb4';      // UTF-8 encoding using 4 bytes of data per character

$username = 'root';         // Enter your username here
$password = '';             // Enter your password here

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];                           // Set PDO options

// DO NOT CHANGE ANYTHING BENEATH THIS LINE
$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset"; // Create DSN
try {
    $pdo = new PDO($dsn, $username, $password, $options); // Create PDO object
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getCode()); // Re-throw exception
}
?>