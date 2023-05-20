<?php 

    $department = $_POST['department'];
    $ticket_id = $_POST['ticket_id'];
    
    require_once('connection.php');
    $db = getDatabaseConnection();

    $stmt = $db->prepare('UPDATE ticket set department = ?, assignedAgent = NULL where ticketId = ?');
    $stmt->execute(array($department, $ticket_id));

?>