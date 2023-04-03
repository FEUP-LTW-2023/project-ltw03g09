<?php

function authenticate($username, $password){
    
    echo "popo";
    require_once('connection.php');

    $db = getDatabaseConnection();
    echo "popo";

    $stmt = $db->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->execute(array($username, $password));
    $user = $stmt->fetch();
    echo $user[0];
	echo"USERNAME";

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
