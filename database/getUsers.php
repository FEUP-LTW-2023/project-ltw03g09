<?php

function getUsers($db){

    require_once('connection.php');
    $stmt = $db->prepare('SELECT user.id AS user_id, user.username , agent.id AS agent_id, admin.id AS admin_id
    from user
    LEFT JOIN agent ON user.id = agent.user_id
    LEFT JOIN admin ON agent.id = admin.agent_id');
    $stmt->execute();
    $users= $stmt->fetchAll();
    return $users;
}

?>
