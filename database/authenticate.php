<?php

function authenticate($username, $password){
    
    require_once('database/connection.php');

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
	header('Location: home.php');
	exit;
    }else{
	echo "invalid username or password";
    }

}


?>
