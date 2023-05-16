<?php

function getUsers($db){

    require_once('connection.php');
    $stmt = $db->prepare('SELECT user.id, user.username FROM User, Agent
                        where ;'
    );
    $stmt->execute();
    $users= $stmt->fetchAll();
    return $users;
}

?>
