<?php

function getUsers($db){
    $stmt = $db->prepare('SELECT * FROM User;');
    $stmt->execute();
    $users= $stmt->fetchAll();
    return $users;
}

?>
