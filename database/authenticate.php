<?php

function authenticate($username, $password){
    
	$hash = password_hash($password, PASSWORD_DEFAULT);

	error_log("hash:".$hash);
	error_log(password_verify($password, $hash));
if(password_verify($password, $hash)) error_log("popo");

    require_once('connection.php');

    $db = getDatabaseConnection();

    $stmt = $db->prepare("SELECT user.* , agent.id AS agent_id, admin.id AS admin_id
		from user
		LEFT JOIN agent ON user.id = agent.user_id
		LEFT JOIN admin ON agent.id = admin.agent_id
		WHERE user.username = ?");
    $stmt->execute(array($username));
    $user = $stmt->fetch();

	$db = null;

    if($user && password_verify($password, $hash)){


		$_SESSION['username'] = $username;
		$_SESSION['loggedin'] = true;
		$_SESSION['name'] = $user['name'];
		$_SESSION['email'] = $user['email'];
		$_SESSION['userId'] = $user['id'];
		$_SESSION['image'] = $user['image'];

		$_SESSION['hierarchy'] = 'client';

		if ($user['agent_id'] !== null) {

			$_SESSION['hierarchy'] = 'agent';
			$_SESSION['agent_id'] = $user['agent_id'];

    		$db = getDatabaseConnection();
			$stmt2 = $db->prepare("SELECT department from agentDepartment where agent_id = ?");
			$stmt2->execute(array($_SESSION['agent_id']));
			$departments = $stmt2->fetchAll();
			

			foreach($departments as $department){
				$_SESSION['departments'][] = $department[0];
			}
		}

		if ($user['admin_id'] !== null) {
			$_SESSION['hierarchy'] = 'admin';
			$_SESSION['admin_id'] = $user['admin_id'];
		}

		
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
