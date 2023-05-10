<?php

function fetchDepartmentAgents($department){
    $db = new PDO('sqlite:database/data.db');

    $query = "select agent.id, user.username from agent, user
    where user.id = agent.user_id and agent.department = ?";

    $stmt = $db->prepare($query);
    $stmt->execute(array($department));
    $agents = $stmt->fetchAll();

    return $agents;
}

?>