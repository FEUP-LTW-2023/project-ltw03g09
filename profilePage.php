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
    <h1>profile page </h1>

    <form action="database/updateProfile.php" method="post">
	<p>username: <input type="text" name="username" value=<?php echo $_SESSION['username']; ?>></p>
	<p>name: <input type="text" name="name" value=<?php echo $_SESSION['name']; ?>></p>
	<p>email: <input type="text" name="email" value=<?php echo $_SESSION['email']; ?>></p>
	<input type="submit" name="submit" value="update profile">
    </form>
    <p/>
    <p/>
    <form action="home.php" method="post">
	<input type="submit" name="submit" value="home">
    </form>
    <p/>
    <a href="logout.php">Logout</a>
</body>
</html>
