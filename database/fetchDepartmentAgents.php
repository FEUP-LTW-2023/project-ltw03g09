<?php

function fetchDepartmentAgents($department){
    $db = new PDO('sqlite:data.db');

    $query = "select agent.id, user.username from agent, user, agentDepartment
    where user.id = agent.user_id and
    agentDepartment.agent_id = agent.id and
    agentDepartment.department = ?
    order by user.username";

    $stmt = $db->prepare($query);
    $stmt->execute(array($department));
    $agents = $stmt->fetchAll();


    return $agents;
}

if($_POST['runFunction']){
  echo json_encode(fetchDepartmentAgents($_POST['department']));
}  


?>