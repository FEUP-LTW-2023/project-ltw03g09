<?php 

    require_once('connection.php');
    $db = getDatabaseConnection();


function changeRank($query, $vars,$db){

    $stmt = $db->prepare($query);
    $stmt->execute($vars);
}

$user_id = $_POST['user_id'];
$agent_id = $_POST['agent_id'];
$admin_id = $_POST['admin_id'];
$rank = $_POST['rank'];

error_log('user_id: '.$user_id);
error_log('agent_id: '.$agent_id);
error_log('admin_id: '.$admin_id);
error_log('rank: '.$rank);

require_once('agentCleanUp.php');

if($rank == "admin"){
    if(!$agent_id){
        changeRank('INSERT INTO agent (user_id) VALUES (?)', array($user_id),$db);
        $agent_id = $db->lastInsertId();
    }
    if(!$admin_id){
        changeRank('INSERT INTO admin (agent_id) VALUES (?)', array($agent_id),$db);
    }
} else if($rank == "agent"){
    if($admin_id){
        changeRank('DELETE from admin where id = ?',array($admin_id),$db);
    }else if(!$agent_id){
        changeRank('INSERT INTO agent (user_id) VALUES (?)', array($user_id),$db);
    }
}else{
        if($admin_id) changeRank('DELETE from admin where id = ?',array($admin_id),$db);
        if($agent_id) changeRank('DELETE from agent where id = ?',array($agent_id),$db);
        agentCleanUp($agent_id);
}

header('Location: ../pages/changeRankPage.php');

?>