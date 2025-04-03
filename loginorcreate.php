<?php
session_start(); // Start session


 $_SESSION['FirstName'] = $_POST['fname']; // Stores the first name in the session

include "connection.php";  // Make sure the database connection is working properly


// Declare variables to hold the error messages
$IDerr = $FirstNameErr = $PasswordErr = "";
$ID = $FirstName = $Password = "";


// Check if form submited with POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Action vaule is set in the form
    if (isset($_POST['action'])) {
        // Makes sure ID isn't empty
        if (empty($_POST["ID"])) {
        $IDerr = "* ID is required";
    } else {
        // Looked this up on W3Schools
        $ID = trim($_POST['ID']); // Removes whitespaces and other characters from both sides
        $ID = stripcslashes($ID); // Removes backslashes
        
    }

    if (empty($_POST['fname'])) {
        $FirstNameErr = "* First Name is required";
    } else {
        $FirstName = trim($_POST['fname']);
        $FirstName = stripcslashes($FirstName);
       
    }

    if (empty($_POST["password"]) || mb_strlen($_POST['password']) < 8) {
        $PasswordErr = " * Password is required or less than 8 characters";
    } else {
        $Password = trim($_POST['password']);
        $Password = stripcslashes($Password);
        
    }

}
        // If no error can log in and goes to home page
        if (empty($IDerr) && empty($FirstNameErr) && empty($PasswordErr)) {
            if ($_POST['action'] == "login") {
                header("Location: home.php");
                exit();
            }
    }
     
    // If clicked create button will go to the create page
    elseif ($_POST['action'] == "create") {
        echo "Create Account";
        header("Location: create.php");
        exit();
            }
        }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exam Login</title>
    <link rel="stylesheet" type="text/css" href="CSS/sty.css">
    <style>
        .error {
    color: red;
    font-size: 18px;
}
    </style>
</head>
<span class="error"></span>
<body>
    <nav>
        <div class="logo"> 
            <img src="Pictures/logo3.gif">
        </div>
    </nav>

    <form action="loginorcreate.php" method="POST">
        <img src="Pictures/icon.png">
        <p>ID: <input type="text" name="ID" placeholder="ID">
        <span class="error"><br><?php echo $IDerr;?></span></p>

        <p>First Name: <input type="text" name="fname" placeholder="First Name">
        <span class="error"><br><?php echo $FirstNameErr; ?></span></p>

        <p>Password: <input type="password" name="password" placeholder="password">
        <span class="error"><br><?php echo "$PasswordErr"; ?></span></p>

        <p><button type="submit" name="action" value="login">Login</button></p>
        <p><button type="submit" name="action" value="create">Create an Account</button></p>
    </form>
</body>
</html>
