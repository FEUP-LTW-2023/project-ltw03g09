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
    <h1>login</h1>
    <form action="database/authenticate.php" method="post">
	<input type="text" name="username" >
	<input type="password" name="password" >
	<input type="submit" name="submit" value="login">
    </form>
    <a href="database/register.php">register</a>
  </body>
</html>


<?php
$invalidAuthentication = $_GET['invalid'];
if($invalidAuthentication) echo '<p>' . 'invalid username or password' . '</p>';
?>

