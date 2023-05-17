<?php

$agent_id = (int) $_POST['agent_id'];
$department = $_POST['department'];

error_log("fjdkslaçfjdsaklçfdsaj");
error_log($agent_id);
error_log(gettype( (int) $agent_id));
error_log($department);

require_once('connection.php');
$db = getDatabaseConnection();


// a query devia ser assim mas por algum motivo nao funciona
// 
//$query = "delete from agentDepartment where agent_id = ? and department = ?";
//$stmt = $db->prepare($query);
//$stmt->execute(array($agent_id, $department));

$query = "delete from agentDepartment where agent_id =".$agent_id." and department = ?";

$stmt = $db->prepare($query);
$stmt->execute(array($department));

error_log("did it work");


?>