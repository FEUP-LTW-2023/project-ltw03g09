<?php

function fetchTickets($user_id){

    $db = new PDO('sqlite:database/data.db');

    $query = "select distinct ticket.*, user.username, user.image from ticket, agent, user, agentDepartment
            where user.id = ticket.creator and (
                ticket.creator = ? or
                ticket.department = agentDepartment.department and 
                agentDepartment.agent_id = agent.id and
                agent.user_id = ?
            )";

    $stmt = $db->prepare($query);
    $stmt->execute(array($user_id,$user_id));
    $tickets = $stmt->fetchAll();

    return $tickets;
}

?>