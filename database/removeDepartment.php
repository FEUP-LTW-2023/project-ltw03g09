<?php

    $department = $_POST['department'];
    
    require_once('connection.php');
    $db = getDatabaseConnection();

    $stmt = $db->prepare('delete from department where name = ?');
    $stmt->execute(array($department));

    $stmt = $db->prepare('delete from agentDepartment where department = ?');
    $stmt->execute(array($department));

    $stmt = $db->prepare('delete from ticket where department = ?');
    $stmt->execute(array($department));




?>