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
    <p>This is the homepage.</p>

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
                    <div class="interfaceButton" onclick="window.location.href = 'adminPage.php'">
                        <p class="interfaceButtonString">admin stuff</p>
                    </div>
                HTML;
                echo $html;
            }
        ?>
        
    </div>

    
    <?php include('footer.php')?>
</body>
</html>
