<?php

//fetches tickets created by the client

function fetchClientTickets($user_id){
    $db = new PDO('sqlite:database/data.db');

    $query = "select ticket.*, user.username from ticket, user where ticket.creator = ? and user.id = ticket.creator";

    $stmt = $db->prepare($query);
    $stmt->execute(array($user_id));
    $tickets = $stmt->fetchAll();

    return $tickets;
}

?>
