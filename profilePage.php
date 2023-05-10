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
    <title>Profile page</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('header.php')?>
    <h1>profile page </h1>

    <form action="database/updateProfile.php" method="post">
	    <p>username: <input type="text" name="username" class="profileTextbox" value=<?php echo $_SESSION['username']; ?>></p>
	    <p>name: <input type="text" name="name" class="profileTextbox" value=<?php echo $_SESSION['name']; ?>></p>
	    <p>email: <input type="text" name="email" class="profileTextbox" value=<?php echo $_SESSION['email']; ?>></p>
	    <p>image url: <input type="text" name="image" class="profileTextbox" value=<?php echo $_SESSION['image']; ?>></p>

	    <input type="submit" name="submit" value="update profile">
    </form>
    <p/>
    <p/>
    <form action="home.php" method="post">
	<input type="submit" name="submit" value="home">
    </form>
    <p/>
    <?php include('footer.php')?>
</body>
</html>
