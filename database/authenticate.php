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
		$_SESSION['name'] = $user[2];
		$_SESSION['email'] = $user[4];
		$_SESSION['userId'] = $user[0];

		require_once('fetchDepartments.php');
		
		$departments = fetchDepartments();
		$_GLOBALS['departments'] = $departments;

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

if($username && $password) authenticate($username, $password);
else header('Location: ../index.php');


?>
