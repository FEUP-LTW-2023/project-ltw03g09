<?php

function fetchDepartments(){
    require_once('connection.php');
    $db = getDatabaseConnection();

    $stmt = $db->prepare('SELECT * FROM Department');
    $stmt->execute();

    $result = $stmt->fetchAll();
    $departments = array();
    foreach($result as $r){
        $departments[] = $r[0];
    }
    return $departments;
}

?>
