<?php

session_start(); // start a new session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // user isn't logged in, redirect to login page
    header('Location: index.php');
    exit;
}

$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$image = $_POST['image'];



require_once('connection.php');

$db = getDatabaseConnection();

$stmt = $db->prepare("UPDATE User SET username=?, name=?, email=?, image=? where username=?");
$stmt->execute(array($username, $name, $email, $image, $_SESSION['username'] ));
$user = $stmt->fetch();

$_SESSION['username'] = $username;
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['image'] = $image;


header('Location: ../profilePage.php')
?>
