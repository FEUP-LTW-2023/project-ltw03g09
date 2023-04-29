<?php
session_start(); // start a new session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // user isn't logged in, redirect to login page
    header('Location: index.php');
    exit;
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('header.php')?>
    <h1>Welcome, <?php echo $_SESSION['hierarchy']." ".$_SESSION['username']; ?>!</h1>
    <p>This is the homepage.</p>

    <div class="mainInterface">
        <div class="interfaceButton" onclick="window.location.href = 'clientPage.php'">
            <p class="interfaceButtonString">client stuff</p>
        </div>
        <div class="interfaceButton" onclick="window.location.href = 'agentPage.php'">
            <p class="interfaceButtonString">agent stuff</p>
        </div>
        <div class="interfaceButton" onclick="window.location.href = 'adminPage.php'">
            <p class="interfaceButtonString">admin stuff</p>
        </div>
    </div>

    
    <?php include('footer.php')?>
</body>
</html>
