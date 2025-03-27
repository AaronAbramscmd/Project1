<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        if ($_POST['action'] == "login") {
            header("Location: home.php");
        } elseif ($_POST['action'] == "create") {
            header("Location: create.html");
        }
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
</head>
<body>
    <nav>
        <div class="logo"> 
            <img src="Pictures/logo3.gif">
        </div>
    </nav>

    <form action="loginorcreate.php" method="POST">
        <img src="Pictures/icon.png">
        <p>ID: <input type="text" name="ID" placeholder="ID"></p>
        <p>Password: <input type="password" name="password" placeholder="password"></p>
        <p><button type="submit" name="action" value="login">Login</button></p>
        <p><button type="submit" name="action" value="create">Create an Account</button></p>
    </form>



</body>
</html>
