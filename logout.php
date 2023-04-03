<?php
session_start(); // start a new session

// unset session variables
unset($_SESSION['username']);
unset($_SESSION['loggedin']);

// redirect to login page
header('Location: index.php');
exit;
?>

