<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Trouble Tickets</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link href="layout.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    <link href="comments.css" rel="stylesheet">
    <link href="forms.css" rel="stylesheet">
  </head>
  <body>
    <h1>LOGIN</h1>
    <div class="blurred-line"></div>
    <div class="form-container">
      <form action="database/authenticate.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Login">
      </form>
    </div>
    <a href="pages/registerPage.php">Register</a>
  </body>
</html>



<?php
$invalidAuthentication = $_GET['invalid'];
if($invalidAuthentication) echo '<p>' . 'invalid username or password' . '</p>';
?>

