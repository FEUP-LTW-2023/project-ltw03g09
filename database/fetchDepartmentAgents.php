<?php

function fetchDepartmentAgents($department){
    $db = new PDO('sqlite:database/data.db');

    $query = "select agent.id, user.username from agent, user, agentDepartment
    where user.id = agent.user_id and
    agentDepartment.agent_id = agent.id and
    agentDepartment.department = ?";

    $stmt = $db->prepare($query);
    $stmt->execute(array($department));
    $agents = $stmt->fetchAll();

    return $agents;
}


?>