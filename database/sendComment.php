<?php

function sendComment($text, $ticket_id, $user_id){
    require_once('connection.php');
    $db = getDatabaseConnection();

    $query = "INSERT INTO Comment (text, ticket_id, user_id, date) VALUES (?,?,?,?)";


    $stmt = $db->prepare($query);
    $stmt->execute(array($text, $ticket_id, $user_id, time() * 1000 ));
    $tickets = $stmt->fetchAll();
    
}

session_start();

$text = $_POST['text'];
$ticket_id = $_POST['ticketId'];
$user_id = $_POST['userId'];

sendComment($text, $ticket_id, $user_id);
header('Location: ../ticketPage.php?ticketId='.$ticket_id)

?>