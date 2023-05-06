<?php
    function fetchTicket($db, $ticketId){
        
        // require_once('connection.php');

        // $db = getDatabaseConnection();


        $query = 'SELECT * FROM ticket WHERE ticketId = ?';




        $stmt = $db->prepare($query);
        $stmt->execute(array($ticketId));
        $ticket = $stmt->fetchAll()[0];

        return $ticket;

    }

?>