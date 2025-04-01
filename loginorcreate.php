<?php
session_start();
 $_SESSION['FirstName'] = $_POST['fname'];

include "connection.php";  // Make sure the database connection is working properly



$IDerr = $FirstNameErr = $PasswordErr = "";
$ID = $FirstName = $Password = "";



if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['action'])) {
        if (empty($_POST["ID"])) {
        $IDerr = "* ID is required";
    } else {
        $ID = trim($_POST['ID']);
        $ID = stripcslashes($ID);
        $ID = htmlspecialchars($ID);
    }

    if (empty($_POST['fname'])) {
        $FirstNameErr = "* First Name is required";
    } else {
        $FirstName = trim($_POST['fname']);
        $FirstName = stripcslashes($FirstName);
        $FirstName = htmlspecialchars($FirstName);
    }

    if (empty($_POST["password"]) || mb_strlen($_POST['password']) < 8) {
        $PasswordErr = " * Password is required or less than 8 characters";
    } else {
        $Password = trim($_POST['password']);
        $Password = stripcslashes($Password);
        $Password = htmlspecialchars($Password);
    }

}

        if (empty($IDerr) && empty($FirstNameErr) && empty($PasswordErr)) {
            if ($_POST['action'] == "login") {
                header("Location: home.php");
                exit();
            }
    }
     

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
