<?php
    session_start();

    require_once("database/fetchTickets.php");
    $tickets = fetchTickets($_SESSION['userId']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link href="css/style.css" rel="stylesheet">
    <script src ="scripts/filterTickets.js"></script>
</head>
<body>
    <?php include('header.php')?>
    <h1>here you can see the tickets</h1>
    <h2>ticket list </h2>
    <div class="ticketFilter">
        <h3>filter: </h3>
        <select id="filterQuery1" class="profileTextbox" onchange="createOptions(this.value)">
            <option value='' disabled selected>...</option>
            <option value='username'>username</option>
            <option value='department'>department</option>
            <option value='label'>label</option>
            <option value='status'>status</option>
        </select>
        <select id="filterQuery2" class="profileTextbox"
        onchange="filterTickets(document.getElementById('filterQuery1').value, document.getElementById('filterQuery2').value)">
            <option value='' disabled selected>...</option>
        </select>
	    <!--<input type="submit" name="submit" onclick="filterTickets(document.getElementById('filterQuery1').value, document.getElementById('filterQuery2').value)" value="filter">-->
    </div>
    <div class="existingFilters"></div>
    <div class="ticketList">
        <?php include('ticketList.php')?>
    </div>
    <?php include('footer.php')?>
</body>
</html>