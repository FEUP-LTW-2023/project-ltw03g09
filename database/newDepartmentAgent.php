<?php


    $department = $_POST['departments'];
    $agent_id = $_POST['agent_id'];

    error_log("JFDKLRIOETUREWOIP");
    error_log($agent_id);
    error_log($department);

    require_once('connection.php');
    $db = getDatabaseConnection();

    $stmt = $db->prepare('insert into agentDepartment values (?,?)');
    $stmt->execute(array($agent_id, $department));

    header('Location: ../adminPage.php');

?>