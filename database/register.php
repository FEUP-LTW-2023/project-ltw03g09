<?php

$password = $_POST['password'];
$password2 = $_POST['password2'];

if($password != $password2) header('Location: ../registerPage.php?passwordMismatch=true');

$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$image = $_POST['image'];

require_once('connection.php');

$db = getDatabaseConnection();

$stmt = $db->prepare("SELECT * FROM user WHERE username = ?");
$stmt->execute(array($username));
$user = $stmt->fetch();

if(!$user){
    $stmt = $db->prepare("INSERT INTO user (username, name, password, email, image) VALUES (?,?,?,?,?)");
    $stmt->execute(array($username, $name, $password, $email, $image));
    $user = $stmt->fetch();

    require_once('authenticate.php');
    authenticate($username, $password);
    
}else{
    header('Location: ../registerPage.php?alreadyUser=true');
}
?>
