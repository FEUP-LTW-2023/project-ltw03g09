<?php

$agent_id = $_POST['agent_id'];
$department = $_POST['department'];

error_log("fjdkslaçfjdsaklçfdsaj");
error_log('agent_id: '.$agent_id);
error_log(gettype($agent_id));
error_log('department: '.$department);

require_once('connection.php');
$db = getDatabaseConnection();



$query = "insert into agentDepartment values (?,?)";
error_log($query);

$stmt = $db->prepare($query);
$stmt->execute(array($agent_id, $department));

error_log("did it work");

?>