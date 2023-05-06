<?php

function fetchComments($ticket_id){

    require_once('database/connection.php');

    $db = getDatabaseConnection('database/');

    $query = "select comment.*, user.username from comment, user where ticket_id = ? and comment.user_id = user.id";

    $stmt = $db->prepare($query);
    $stmt->execute(array($ticket_id));
    $comments = $stmt->fetchAll();

    return $comments;

}

?>