<?php
session_start(); // start a new session

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // user isn't logged in, redirect to login page
    header('Location: index.php');
    exit;
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
</head>
<body>
    <?php include('header.php')?>
    <h1>Welcome, <?php echo $_SESSION['hierarchy']." ".$_SESSION['username']; ?>!</h1>
    <p>Welcome to our ticket submission platform!</p>
    <p>Submit tickets effortlessly and track their progress in real-time.</p>
    <p>Our dedicated team of agents provides prompt and reliable support.</p>
    <p>Join our community for a seamless ticketing experience.</p>
    <div class="mainInterface">
        
        <div class="interfaceButton" onclick="window.location.href = 'ticketListPage.php'">
            <p class="interfaceButtonString">ticket list</p>
        </div>
        <div class="interfaceButton" onclick="window.location.href = 'createTicketPage.php'">
            <p class="interfaceButtonString">create ticket</p>
        </div>

        <?php
            if($_SESSION['admin_id']){
                $html = <<<HTML
                    <div class="interfaceButton" onclick="window.location.href = 'changeRankPage.php'">
                        <p class="interfaceButtonString">change rank</p>
                    </div>
                    <div class="interfaceButton" onclick="window.location.href = 'assignDepartmentsPage.php'">
                        <p class="interfaceButtonString">assign departments</p>
                    </div>
                HTML;
                echo $html;
            }
        ?>
        
    </div>

    
    <?php include('footer.php')?>
</body>
</html>
