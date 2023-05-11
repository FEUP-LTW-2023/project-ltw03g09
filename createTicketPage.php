<?php

session_start(); // start a new session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // user isn't logged in, redirect to login page
    header('Location: index.php');
    exit;

}

require_once('database/fetchDepartments.php');
$departments = fetchDepartments();

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
        <select id="departments" class="profileTextbox" name="department">
            <option value='' disabled selected>department</option>
            <?php
                foreach($departments as $department){
                    echo '<option value="'.$department.'"/>'.$department.'</option>';
                }
            ?>
        </select>
	    <input type="text" name="label" class="profileTextbox" placeholder="label (ex: #feupRulzzz)">
        <p/>
        <textarea name="text" class="profileTextbox" rows="10" cols="50" placeholder="text"></textarea>
        <p/>
        <input type="hidden" id="currentdate" name="date" readonly>
	    <input type="submit" name="submit" value="submit">
    </form>
    <script>
    var currentDate = new Date();
    var dateString = currentDate.toISOString();
    document.getElementById("currentdate").value = dateString;
  </script>
    <?php include('footer.php')?>
</body>
</html