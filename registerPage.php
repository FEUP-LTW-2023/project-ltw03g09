<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Trouble Tickets</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="css/registerPage.css" rel="stylesheet">
    <link href="layout.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    <link href="comments.css" rel="stylesheet">
    <link href="forms.css" rel="stylesheet">
  </head>
  <body>
    <h1>REGISTER</h1>
    <div class="blurred-line"></div>
    <div class="form-container">
      <form action="database/register.php" method="post">
        <label for="username">USERNAME</label>
        <input type="text" name="username" id="username">
        <label for="password">PASSWORD</label>
        <input type="password" name="password" id="password">
        <label for="password2">PASSWORD AGAIN</label>
        <input type="password" name="password2" id="password2">
        <label for="name">NAME</label>
        <input type="text" name="name" id="name">
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email">
        <input type="submit" name="submit" value="REGISTER">
      </form>
    </div>
    <a href="index.php">LOGIN</a>
  </body>
</html>

<?php

$passwordMismatch = $_GET['passwordMismatch'];
if($passwordMismatch) echo '<p>' . "passwords dont match" . '</p>';

$alreadyUser = $_GET['alreadyUser'];
if($alreadyUser) echo '<p>' . "There's already a user with that username" . '</p>';

?>
