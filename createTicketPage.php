<?php

session_start(); // start a new session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // user isn't logged in, redirect to login page
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ticket page</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
    <?php include('header.php')?>
    <h1>Ticket page</h1>
    <p>This is where tickets are created</p>

    <form action="database/createTicket.php" method="post">  
	    <input type="text" name="title" class="profileTextbox" placeholder="title">
        <p/>
	    <input list="departments" name="department" class="profileTextbox" placeholder="department">
	    <input type="text" name="label" class="profileTextbox" placeholder="label (ex: #feupRulzzz)">
        <datalist id="departments">
            <?php
                foreach($_SESSION['departments'] as $department){
                    echo '<option value="'.$department.'"/>';
                }
            ?>
        </datalist>
        <p/>
        <textarea name="text" class="profileTextbox" rows="10" cols="50" placeholder="text"></textarea>
        <p/>
	    <input type="submit" name="submit" value="submit">
    </form>

    <form action="home.php" method="post">
	    <input type="submit" name="submit" value="home">
    </form>
    <?php include('footer.php')?>
</body>
</html