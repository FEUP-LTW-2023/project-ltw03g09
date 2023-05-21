<?php
session_start(); // start a new session

// unset session variables
unset($_SESSION['username']);
unset($_SESSION['loggedin']);
unset($_SESSION['agent_id']);
unset($_SESSION['admin_id']);
unset($_SESSION['departments']);

session_destroy();


// redirect to login page
header('Location: index.php');
exit;
?>

