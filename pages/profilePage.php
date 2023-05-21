<?php
session_start(); // start a new session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // user isn't logged in, redirect to login page
    header('Location: ../index.php');
    exit;
}

$user_id = $_GET['user_id'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile page</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/profilePage.css" rel="stylesheet">
</head>
<body>
    <?php include('../templates/header.php')?>
    <h1>profile page </h1>

    <form class="bigSquare" style="display:grid; grid-template-columns: 1fr 1fr;padding: 1em;" action="../database/updateProfile.php" method="post">
	    <p>Username:</p> <input type="text" name="username" class="profileTextbox" value=<?php echo $_SESSION['username']; ?>>
	    <p>Name:</p><input type="text" name="name" class="profileTextbox" value=<?php echo $_SESSION['name']; ?>>
	    <p>Email:</p><input type="text" name="email" class="profileTextbox" value=<?php echo $_SESSION['email']; ?>>
	    <p>Image url:</p><input type="text" name="image" class="profileTextbox" value=<?php echo $_SESSION['image']; ?>>

	    <input type="submit" name="submit" value="update profile">
    </form>
    <?php include('../templates/footer.php')?>
</body>
</html>
