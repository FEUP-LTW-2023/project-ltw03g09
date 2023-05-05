<?php

//fetches tickets of the agents' department 

function fetchAgentTickets($agent_id){
    $db = new PDO('sqlite:database/data.db');

    $query = "select ticket.*, user.username from ticket, department, agent, user
            where ticket.department = department.name and
            agent.department = department.name and
            ticket.creator = user.id and
            agent.id = ?";

    $stmt = $db->prepare($query);
    $stmt->execute(array($agent_id));
    $tickets = $stmt->fetchAll();

    return $tickets;
}

?>
