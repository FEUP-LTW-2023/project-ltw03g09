<?php

    $department = $_POST['department'];
    
    require_once('connection.php');
    $db = getDatabaseConnection();

    $stmt = $db->prepare('insert into department values (?)');
    $stmt->execute(array($department));

    header('Location: ../adminPage.php');



?>