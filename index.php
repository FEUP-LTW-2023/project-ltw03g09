<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Super Legit News</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="layout.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    <link href="comments.css" rel="stylesheet">
    <link href="forms.css" rel="stylesheet">
  </head>
  <body>
    <h1>trouble tickets </h1>
    <form action="index.php" method="post">
	<input type="text" name="username" >
	<input type="password" name="password" >
	<input type="submit" name="submit" value="login">
    </form>
    <a href="register.php">register</a>
  </body>
</html>

<?php
session_start(); // start a new session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "popo";
}

require_once('database/authenticate.php');
if($username && $password) authenticate($username, $password);


?>

