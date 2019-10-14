<?php 

// Includes navbar for easy use
include '../partials/menu.php';

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	header("location: login/login.php");
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./login/main.css">
    <link rel="stylesheet" href="./css/main.css>">
    <title>Document</title>
</head>
<body>
    

    <div class="footer">
		<a href="login/reset-password.php" class="btn btn-warning">Reset Your Password</a>
		<a href="login/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
	</div>
    <script src="js/main.js"></script>
</body>
</html>