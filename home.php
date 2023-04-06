<?php
session_start(); // start a new session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // user isn't logged in, redirect to login page
    header('Location: index.php');
    exit;
}

// user is logged in, show page content

require_once("database/fetchTickets.php");
$tickets = fetchTickets($_SESSION['userId']);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p>This is the homepage.</p>

    <form action="profilePage.php" method="post">
	    <input type="submit" name="submit" value="profile page">
    </form>
    <form action="createTicketPage.php" method="post">
	    <input type="submit" name="submit" value="create ticket">
    </form>

    <h2>ticket list </h2>
    <?php
        foreach($tickets as $ticket){
            $title = $ticket[1];
            $text = $ticket[2];
            $user_id = $ticket[3];
            $department = $ticket[5];
            $label = $ticket[7];
            $username = $ticket[9];
        
            echo "<div id='ticket'>";
            echo "<h3>".$title."</h3>";
            echo "<p>".$text."</p>";
            echo "<div id='ticketSocials'>";
                echo "<p>username: ".$username."</p>";    
                echo "<p>department: ".$department."</p>";    
                echo "<p>label: ".$label."</p>";    
            echo "</div>";
            echo "</div>";
        }
    ?>
    


    <a href="logout.php">Logout</a>
</body>
</html>
