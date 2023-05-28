<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: register.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="welcom.css">
</head>
<body class="">
    <div class="container">
            <a href="logout.php" class="btn btn-primary">Logout</a>
            <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
    </div>
</body>
</html>
