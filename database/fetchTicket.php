<?php
    function fetchTicket($db, $ticketId){
        
        $query = 'SELECT ticket.*, user.username, user.image FROM ticket, user WHERE ticketId = ? and ticket.creator = user.id';

        $stmt = $db->prepare($query);
        $stmt->execute(array($ticketId));
        $ticket = $stmt->fetchAll()[0];

        return $ticket;

    }

?>