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

// Part underneath here is how to retrieve data from db

// Create connection
$conn = mysqli_connect("localhost", "root", "", "leren");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT firstname,suffix,lastname,age,birthdate,country FROM users";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$flag = FALSE;
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['suffix'] = $row['suffix'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['age'] = $row['age'];
    $_SESSION['birthdate'] = $row['birthdate'];
    $_SESSION['country'] = $row['country'];
    $flag = TRUE;
}

$user = ($_SESSION["username"]);
$firstname = ($_SESSION["firstname"]);
$suffix = ($_SESSION["suffix"]);
$lastname = ($_SESSION["lastname"]);
$age = ($_SESSION["age"]);
$birthdate = ($_SESSION["birthdate"]);
$country = ($_SESSION["country"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/projects/Sollicitatie/public/login/main.css">
    <title>Test</title>
</head>
<body>
    <div class="wrapper">
        <div class="profile">
            <img class="profilepicture" src="http://localhost/projects/Sollicitatie/public/images/user.svg" alt="Sorry, the image couldnt be loaded.">
            <br>
            <b><?= $user ?></b>
            <br>
            Name: <?= $firstname." ".$suffix." ".$lastname ?> 
            <br>
            Age: <?= $age ?>
            <br>
            Birthdate: <?= $birthdate ?>
            <br>
            Country: <?= $country ?>
            <br>
            <img class="addfile" src="http://localhost/projects/Sollicitatie/public/images/add-file.svg" alt="Sorry, the image couldnt be loaded." onclick="upload()">
            <input type="file" id="my_file" style="display: none;">
            <a href="">
                <img class="showfile" src="http://localhost/projects/Sollicitatie/public/images/show-file.svg" alt="Sorry, the image couldnt be loaded.">
            </a>
        </div>
        <div class="profile-extension">
            <h1>Extra Info:</h1>
        </div>
    </div>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
    </form>

    <div class="footer">
		<a href="login/reset-password.php" class="btn btn-warning">Reset Your Password</a>
		<a href="login/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </div>
    
    <script src="http://localhost/projects/Sollicitatie/public/js/main.js"></script>
</body>
</html>