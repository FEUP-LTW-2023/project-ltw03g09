<?php 

function assignAgent($agent, $ticket_id){
    $db = new PDO('sqlite:data.db');

    $query = "UPDATE Ticket SET assignedAgent = ?, status = 'assigned' WHERE ticketId = ?";

    $stmt = $db->prepare($query);
    $stmt->execute(array($agent, $ticket_id));

}

$agent = $_POST['agent'];
$ticket_id = $_POST['ticket_id'];

assignAgent($agent, $ticket_id);
header('Location: ../ticketPage.php?ticketId='.$ticket_id.'');

?>