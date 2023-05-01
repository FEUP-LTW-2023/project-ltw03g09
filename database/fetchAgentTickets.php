<?php

//fetches tickets of the agents' department 

function fetchAgentTickets($agent_id){
    $db = new PDO('sqlite:database/data.db');

    $query = "select ticket.* from ticket, department, agent
            where ticket.department = department.name and
            agent.department = department.name and
            agent.id = ?";

    $stmt = $db->prepare($query);
    $stmt->execute(array($agent_id));
    $tickets = $stmt->fetchAll();

    return $tickets;
}

?>
