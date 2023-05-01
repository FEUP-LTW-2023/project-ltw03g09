<?php
    session_start(); // start a new session
    
    $ticketId = $_POST['ticketId'];
    $status = $_POST['status'];

    require_once('connection.php');

    $db = getDatabaseConnection();

    $query = 'UPDATE Ticket SET status = ? WHERE ticketId = ?';

    $stmt = $db->prepare($query);
    $stmt->execute(array($status, $ticketId));

?>