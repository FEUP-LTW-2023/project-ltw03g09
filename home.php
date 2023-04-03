<?php
session_start(); // start a new session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // user isn't logged in, redirect to login page
    header('Location: index.php');
    exit;
}

// user is logged in, show page content
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>This is the homepage.</p>

    <ul>
	<li>username: <?php echo $_SESSION['username']; ?></li>
	<li>name: <?php echo $_SESSION['name']; ?></li>
	<li>email: <?php echo $_SESSION['email']; ?></li>
    </ul>

    <a href="logout.php">Logout</a>
</body>
</html>
