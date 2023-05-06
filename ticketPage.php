<?php
        require_once('database/fetchTicket.php');
        require_once('database/connection.php');
        $db = getDatabaseConnection('database/');
        $ticketId = $_GET['ticketId'];
        $ticket = fetchTicket($db, $ticketId);

        $ticket_id = $ticket[0];
        $title = $ticket[1];
        $text = $ticket[2];
        $user_id = $ticket[3];
        $status = $ticket[4];
        $department = $ticket[5];
        $priority = $ticket[6];
        $label = $ticket[7];
        $assignedAgent = $ticket[8];
        $date = $ticket[9];
        $username = $ticket[10];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('header.php')?>

    <div class="ticket">
        <div class="ticketHeader">
            <h1><?php echo $title ?></h1>
            <p><?php echo $status ?></p>
        </div>
        <div class="ticketBody">
            <p><?php echo $text ?></p>
        </div>
        <div id="ticketSocials">
            <p>username: <?php echo $username ?></p>    
            <p>department: <?php echo $department ?></p>    
            <p>label: <?php echo $label ?></p>   
            <p>priority: <?php echo $priority ?></p>    
            <p>date: <?php echo $date ?></p>   
        </div>
    </div>
    <div class="comments">
        
    </div>
    
    <?php include('footer.php')?>
</body>
</html>