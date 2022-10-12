<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    
</body class="loggedin">
<nav class="navtop">
    <div>
        <h1>Website Title</h1>
        <a href="home.php"><i class="fa fa-home"></i>Home</a>
        <a href="profile.php"><i class="fa fa-user-circle"></i>Profile</a>
        <a href="logout.php"><i class="fa fa-sign-out-alt"></i>Logout</a>
    </div>
</nav>
<div class="content">
    <h2>Home Page</h2>
    <p>Welcome back, <?=$_SESSION['name']?>!</p>
</div>
</body>
</html>

