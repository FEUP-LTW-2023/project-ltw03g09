<?php
    session_start();

    require_once("../database/fetchTickets.php");
    $tickets = fetchTickets($_SESSION['userId']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/ticketListPage.css" rel="stylesheet">
    <script src="../scripts/filterTickets.js"></script>
</head>
<body>
    <?php include('../templates/header.php')?>
    <h1>Here you can see the tickets</h1>
    <h2>Ticket List</h2>
    <div class="ticketFilter">
        <h3>Filter:</h3>
        <select id="filterQuery1" class="profileTextbox" onchange="createOptions(this.value)">
            <option value='' disabled selected>...</option>
            <option value='username'>username</option>
            <option value='department'>department</option>
            <option value='label'>label</option>
            <option value='status'>status</option>
        </select>
        <select id="filterQuery2" class="profileTextbox" onchange="filterTickets(document.getElementById('filterQuery1').value, document.getElementById('filterQuery2').value)">
            <option value="" disabled selected>...</option>
        </select>
    </div>
    <div class="existingFilters"></div>
    <div class="ticketList">
        <?php include('../templates/ticketList.php')?>
    </div>
    <?php include('../templates/footer.php')?>
</body>
<script src="../scripts/date.js"></script>
</html>
