<?php
    function fetchTicket($db, $ticketId){
        
        // require_once('connection.php');

        // $db = getDatabaseConnection();


        $query = 'SELECT ticket.*, user.username FROM ticket, user WHERE ticketId = ? and ticket.creator = user.id';

        $stmt = $db->prepare($query);
        $stmt->execute(array($ticketId));
        $ticket = $stmt->fetchAll()[0];

        return $ticket;

    }

?>