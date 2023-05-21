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
    <link href="css/createTicketPage.css" rel="stylesheet"/>
</head>
<style>
::placeholder{
    color: #ddd; /*por algum motivo isto nao funciona no style.css*/
}
</style>
<body>
<?php include('header.php')?>
    <h1>Ticket creation</h1>
    <p>This is where tickets are created</p>

    <form class="bigSquare" action="database/createTicket.php" method="post">  
        <h2 style="align-self: center">Create a Ticket</h2>
	    <input type="text" name="title" class="profileTextbox" placeholder="title">
        <div style="display: flex;flex-direction: row;">
            <select id="departments" class="profileTextbox" name="department">
                <option value='' disabled selected>Department</option>
                <?php
                    foreach($departments as $department){
                        echo '<option value="'.$department.'"/>'.$department.'</option>';
                    }
                ?>
            </select>
            <input style="width: 100%" type="text" name="label" class="profileTextbox" placeholder="label (ex: #feupRulzzz)">
        </div>
        <textarea name="text" class="profileTextbox" rows="10" cols="50" placeholder="text"></textarea>
        <input type="hidden" id="currentdate" name="date" readonly>
	    <input style="align-self: flex-end;width: 20%" type="submit" name="submit" value="submit">
    </form>
    <script>
    var currentDate = Date.now();
    var dateString = currentDate;
    console.log(currentDate)
    document.getElementById("currentdate").value = dateString;
    </script>
    <?php include('footer.php')?>
</body>
</html>