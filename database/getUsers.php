<?php

function getUsers($db){

    $stmt = $db->prepare('SELECT user.id AS user_id, user.username , user.image, agent.id AS agent_id, admin.id AS admin_id
    from user
    LEFT JOIN agent ON user.id = agent.user_id
    LEFT JOIN admin ON agent.id = admin.agent_id order by user.username');
    $stmt->execute();
    $users= $stmt->fetchAll();
    return $users;
}

function getAgents($db){
 
    $stmt = $db->prepare('SELECT agent.id as agent_id, user.username as username, user.image from agent, user
    where agent.user_id = user.id');
    $stmt->execute();
    $agents = $stmt->fetchAll();
    return $agents;   
}

function getAgentDepartments($db, $agent_id){
    $stmt = $db->prepare('SELECT AgentDepartment.department FROM AgentDepartment, agent
                        where AgentDepartment.agent_id = agent.id and
                        agent.id = ?');
    $stmt->execute(array($agent_id));
    $agentDepartments = $stmt->fetchAll();
    return $agentDepartments;
}

function getNotAgentDepartments($db, $agent_id){
    //$stmt = $db->prepare('select name from department except select department from agentDepartment where agent_id = ?');
    //$stmt->execute(array($agent_id));

    $query = 'select name from department where name not in (select department from agentdepartment where agent_id = ?)';
error_log($query);

    $stmt = $db->prepare($query);
    $stmt->execute(array($agent_id));

    $departments = $stmt->fetchAll();
    return $departments;
}

?>
