<?php

function authenticate($username, $password){
    
    require_once('connection.php');

    $db = getDatabaseConnection();

    $stmt = $db->prepare("SELECT user.* , agent.id AS agent_id, admin.id AS admin_id
		from user
		LEFT JOIN agent ON user.id = agent.user_id
		LEFT JOIN admin ON agent.id = admin.agent_id
		WHERE user.username = ? AND user.password = ?");
    $stmt->execute(array($username, $password));
    $user = $stmt->fetch();

    if($user){
		$_SESSION['username'] = $username;
		$_SESSION['loggedin'] = true;
		$_SESSION['name'] = $user[2];
		$_SESSION['email'] = $user[4];
		$_SESSION['userId'] = $user[0];

		$_SESSION['hierarchy'] = 'client';

		if ($user['agent_id'] !== null) {
			$_SESSION['hierarchy'] = 'agent';
			$_SESSION['agent_id'] = $user['agent_id'];
		}
		if ($user['admin_id'] !== null) {
			$_SESSION['hierarchy'] = 'admin';
			$_SESSION['admin_id'] = $user['admin_id'];
		}

		require_once('fetchDepartments.php');
		
		//this probably shouldnt be here
		$departments = fetchDepartments();
		//this should be a global variable. not a session variable
		$_SESSION['departments'] = $departments; 

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
