<?php

    function agentCleanUp($agent_id){

        require_once('connection.php');
        $db = getDatabaseConnection();

        $stmt = $db->prepare("UPDATE Ticket SET assignedAgent = ?, status = 'open' WHERE assignedAgent = ?");
        $stmt->execute(array($agent_id, $agent_id));

        $stmt = $db->prepare('DELETE FROM agentDepartment WHERE agent_id = ?');
        $stmt->execute(array($agent_id));
    }

?>