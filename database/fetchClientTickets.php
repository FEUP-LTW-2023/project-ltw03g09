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

//fetches tickets created by the client
//if client is agent also fetches tickets of agent's department
    /*$query = "select distinct ticket.*, user.username from ticket, agent,user
            where user.id = ticket.creator and (
                ticket.creator = ? or
                ticket.department = agent.department and 
                agent.user_id = ?
            )";
    $stmt = $db->prepare($query);
    $stmt->execute(array($user_id,$user_id));
    $tickets = $stmt->fetchAll();
    */
?>
