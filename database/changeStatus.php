<?php
    session_start(); // start a new session
    
    $ticketId = $_POST['ticketId'];
    $status = $_POST['status'];

    require_once('connection.php');

    $db = getDatabaseConnection();

    error_log("FDSAKFÇLDJSAFDSA");
    error_log($ticketId);
    error_log($status);

    $query = 'UPDATE Ticket SET status = ?, assignedAgent = NULL WHERE ticketId = ?';

    $stmt = $db->prepare($query);
    $stmt->execute(array($status, $ticketId));

	//header('Location: ../ticketPage.php?ticketId='.$ticketId);

?>