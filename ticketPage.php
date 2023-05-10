<?php
        session_start();
        require_once('database/fetchTicket.php');
        require_once('database/connection.php');
        $db = getDatabaseConnection('database/');
        $ticketId = $_GET['ticketId'];
        $ticket = fetchTicket($db, $ticketId);


        $ticket_id = $ticket[0];
        $title = $ticket[1];
        $text = $ticket[2];
        $user_id = $ticket[3];
        $status = $ticket[4];
        $department = $ticket[5];
        $priority = $ticket[6];
        $label = $ticket[7];
        $assignedAgent = $ticket[8];
        $date = $ticket[9];
        $username = $ticket[10];

        require_once('database/fetchDepartmentAgents.php');
        $agents = fetchDepartmentAgents($department);

        require_once('database/fetchComments.php');
        $comments = fetchComments($ticket_id);


        
?>

<!DOCTYPE html>
<html>
<script src ="scripts/changeStatus.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src ="scripts/assignAgent.js"></script>


<head>
    <title>Homepage</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('header.php')?>

    <div class="ticket">
        <div class="ticketHeader">
            <h1><?php echo $title ?></h1>
            <p id='status' onclick="changeStatus(<?php echo $ticket_id ?>, this)"><?php echo $status ?></p>
        </div>
        <div class="ticketBody">
            <p><?php echo $text ?></p>
        </div>
        <div id="ticketSocials">
            <p>username: <?php echo $username ?></p>    
            <p>department: <div id='department'><?php echo $department ?></div></p>    
            <p>label: <?php echo $label ?></p>   
            <p>priority: <?php echo $priority ?></p>    
            <p>date: <?php echo $date ?></p>   
        </div>
        <div class="assignAgent">
            <?php
                require_once('database/fetchDepartmentAgents.php');
                $agents = fetchDepartmentAgents($department);

                echo '<script>const agents = ' . json_encode($agents) . ';</script>';
            ?>
            <script>
                const status = document.querySelector("#status").textContent;
                if(status === "open") assignAgentUI(<?php echo $ticketId ?>);    
                else document.querySelector('.assignAgent').innerHTML = "";
            </script>
        </div>
    </div>
    <h3>comments</h3>
    <div class="commentSection">
        <div class="comments">
            <?php include('commentList.php'); ?>
        </div>
        <form class="inputComment" action="database/sendComment.php" method="post">
            <input type="text" name="text" class="inputBoxComment" placeholder="comment here..."/>
            <input type="hidden" name= "ticketId" value="<?php echo $ticket_id ?>"/>
            <input type="hidden" name= "userId" value="<?php echo $_SESSION['userId']?>"/>
            <input type="submit" name="submit" value="send">
        </form>
    </div>
    
    <?php include('footer.php')?>
</body>
</html>