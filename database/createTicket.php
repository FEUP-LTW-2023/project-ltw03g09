<?php
    session_start(); // start a new session

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        // user isn't logged in, redirect to login page
        header('Location: index.php');
        exit;
    }
    $title =        $_POST['title'];
    $text =         $_POST['text'];
    $department =   $_POST['department'];
    $label =        $_POST['label'];
    $date =         $_POST['date'];

    $userId = $_SESSION['userId'];

    require_once('connection.php');

    $db = getDatabaseConnection();

    $query = 'INSERT INTO Ticket (title, text, creator, department, label, status, date) VALUES (?, ?, ?, ?, ?, "open", ?)';

    $stmt = $db->prepare($query);
    $stmt->execute(array($title,$text,$userId,$department,$label, $date));
    
    header('Location: ../pages/ticketListPage.php');

?>