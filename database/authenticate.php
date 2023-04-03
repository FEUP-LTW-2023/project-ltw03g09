<?php

function authenticate($username, $password){
    
    require_once('connection.php');

    $db = getDatabaseConnection();

    $stmt = $db->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->execute(array($username, $password));
    $user = $stmt->fetch();

    if($user){
	$_SESSION['username'] = $username;
	$_SESSION['loggedin'] = true;
	echo "logged in";
	header('Location: ../home.php');
	exit;
    }else{
	echo "invalid username or password";
	header('Location: ../index.php?invalid=true');
    }

}
session_start(); // start a new session

    $username = $_POST['username'];
    $password = $_POST['password'];

echo $username;
echo $password;
if($username && $password) authenticate($username, $password);
else header('Location: ../index.php');


?>
