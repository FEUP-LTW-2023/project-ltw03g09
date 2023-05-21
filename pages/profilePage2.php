<?php
session_start(); // start a new session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // user isn't logged in, redirect to login page
    header('Location: ../index.php');
    exit;
}

$user_id = $_GET['user_id'];

require_once("../database/connection.php");
$db = getDatabaseConnection('../database/');
$stmt = $db->prepare('select * from user where id = ?');
$stmt->execute(array($user_id));
$user = $stmt->fetch(); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile page</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/visitProfilePage.css" rel="stylesheet">
</head>
<body>
    <?php include('../templates/header.php')?>
    <div class="profile-container">
            <img src="<?php echo $user['image']?>" alt="Profile picture">
            <div class="profile-info">
                <h1><?php echo $user['username']?></h1>
                <p><?php echo $user['name']?></p>
                <p><?php echo $user['email']?></p>
            </div>
    </div>
    <?php include('../templates/footer.php')?>
</body>
</html>
