<?php 

// Includes navbar for easy use
include 'partials/menu.php';

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
    <script src="jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="login/main.css">
    <link rel="stylesheet" href="main.css">
    <title>Home</title>
</head>
    <div class="page-header">
		<h1>Hi, <b style="color:green;"><?php echo htmlspecialchars($_SESSION["username"]); ?>.<br></b> WIP Sollicitatie Systeem</h1>
	</div>

	<div class="page-info">
		<h4>Plan of action:</h4><br>
        <ul>
            <li>Create a loginsystem. ( DONE )</li>
            <li>Create a my profile page ( X )</li>
            <li>Create a system to upload files ( X )</li>
            <li>Create a system to upload job offers ( X )</li>
            <li>Style the pages ( X )</li>
        </ul>
        <br>
        <h4>Assignment:</h4>
        <p>We need to create a website for bit where they can upload assignments for people as a way to apply for the job.<br>
           It needs a loginsystem with a profile page and a way to upload files ofcourse. Bit also wants to see when someone<br>
           has downloaded/uploaded files etc. There can only be uploaded when the after a certain date. 
        </p>
	</div>

	<div class="footer">
		<a href="login/reset-password.php" class="btn btn-warning">Reset Your Password</a>
		<a href="login/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
	</div>
    <script src="js/main.js"></script>
</body>
</html>