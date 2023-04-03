<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Trouble Tickets</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="layout.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    <link href="comments.css" rel="stylesheet">
    <link href="forms.css" rel="stylesheet">
  </head>
  <body>
    <h1>register</h1>
    <form action="database/register.php" method="post">
	USERNAME
	<input type="text" name="username" >
	<p/>PASSWORD
	<input type="password" name="password" >
	<p/>PASSWORD AGAIN
	<input type="password" name="password2" >
	<p/>NAME
	<input type="text" name="name" >
	<p/>EMAIL
	<input type="text" name="email" >
	<p/>
	<input type="submit" name="submit" value="login">
	<p/>
	<a href="index.php">login</a>
    </form>
  </body>
</html>

<?php

$passwordMismatch = $_GET['passwordMismatch'];
if($passwordMismatch) echo '<p>' . "passwords dont match" . '</p>';

$alreadyUser = $_GET['alreadyUser'];
if($alreadyUser) echo '<p>' . "There's already a user with that username" . '</p>';

?>
