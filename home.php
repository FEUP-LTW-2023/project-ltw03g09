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
    <link href="css/style.css" rel="stylesheet">
    <script src ="scripts/filterTickets.js"></script>
</head>
<body>
    <?php include('header.php')?>
    <h1>Welcome, <?php echo $_SESSION['hierarchy']." ".$_SESSION['username']; ?>!</h1>
    <p>This is the homepage.</p>

    <form action="createTicketPage.php" method="post">
	    <input type="submit" name="submit" value="create ticket">
    </form>

    <h2>ticket list </h2>
    <div class="ticketFilter">
        <h3>filter: </h3>
        <select id="filterQuery1" class="profileTextbox">
            <option value='' disabled selected>...</option>
            <option value='username'>username</option>
            <option value='department'>department</option>
            <option value='label'>label</option>
        </select>
        <input type="text" placeholder="str" id='filterQuery2' class="profileTextbox"/>
	    <input type="submit" name="submit" onclick="filterTickets(document.getElementById('filterQuery1').value, document.getElementById('filterQuery2').value)" value="filter">
	    <input type="submit" name="submit" onclick="unfilterTickets()" value="unfilter">
        </select>
    </div>
    <div class="ticketList">
        <?php
            foreach($tickets as $ticket){
                $title = $ticket[1];
                $text = $ticket[2];
                $user_id = $ticket[3];
                $department = $ticket[5];
                $label = $ticket[7];
                $username = $ticket[9];
            
                $html = <<<HTML
                    <div id='ticket'>
                        <h3>$title</h3>
                        <p>$text</p>
                        <div id='ticketSocials'>
                            <p>username: <p id='username'>$username</p></p>    
                            <p>department: <p id='department'>$department</p></p>    
                            <p>label: <p id='label'>$label</p></p>   
                        </div>
                    </div>
                HTML;
                echo $html;
            }
        ?>
    </div>
    <?php include('footer.php')?>
</body>
</html>
