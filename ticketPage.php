<?php
        session_start();
        require_once('database/fetchTicket.php');
        require_once('database/connection.php');
        $db = getDatabaseConnection('database/');
        $ticketId = $_GET['ticketId'];
        $ticket = fetchTicket($db, $ticketId);

                $ticket_id = $ticket['ticketId'];
                $title = $ticket['title'];
                $text = $ticket['text'];
                $user_id = $ticket['creator'];
                $status = $ticket['status'];
                $department = $ticket['department'];
                $label = $ticket['label'];
                $assignedAgent = $ticket['assignedAgent'];
                $date = $ticket['date'];
                $username = $ticket['username'];
                $image = $ticket['image']; 


        require_once('database/fetchComments.php');
        $comments = fetchComments($ticket_id);

        
?>

<!DOCTYPE html>
<html>
<script src ="scripts/changeStatus.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src ="scripts/assignAgent.js"></script>
<script src ="scripts/departments.js"></script>

<head>
    <title>Homepage</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/ticketPage.css" rel="stylesheet">
</head>
<body>
    <?php include('header.php')?>

    <div class="ticket">
        <div class="ticketHeader">
            <h1><?php echo $title ?></h1>
            <p id='status'
                <?php
                    if($_SESSION['departments']){
                        if(in_array($department, $_SESSION['departments'])){
                            echo 'onclick="changeStatus('.$ticket_id.', this,'.$_SESSION['agent_id'].')"';
                        }
                    }
                ?>><?php echo $status;?></p>

        </div>
        <div class="ticketBody">
            <p><?php echo $text ?></p>
        </div>
        <div id="ticketSocials">
            <div style="display:flex;align-items:center" onclick="window.location.href='profilePage2.php?user_id=<?php echo $user_id?>'">
                <img class="profileIcon" src="<?php echo $image ?>"/>
                <span><?php echo $username ?></span>
            </div>    
            <span style="display:flex;align-items:center">department: 
                <div id='department' >
                    <span>
                    <?php
                        if(!$_SESSION['agent_id'] || !in_array($department, $_SESSION['departments'])){
                            echo $department;
                        }else{
                            echo '<select id="departmentSelect" class="profileTextbox" style="box-shadow:none" name="department">';

                            require_once('database/fetchDepartments.php');
                            $departments = fetchDepartments();

                            foreach($departments as $d){
                                $selected = '';
                                if($d == $department) $selected = "selected";
                                echo '<option onclick="changeTicketDepartment('.$ticket_id.','.$_SESSION['agent_id'].')" value="'.$d.'" '.$selected.'>'.$d.'</option>';
                            }
                        }
                        
                    ?>
                    </select>
                </div>
            </span>    
            <p><?php echo $label ?></p>   
        </div>
        <div class="assignAgent">

            <script >assignAgentUI(<?php echo $ticket_id?>,<?php echo $_SESSION['agent_id']?>)</script>

        </div>
        <div id='date'><?php echo $date ?></div>   
    </div>
    <h3>Comments</h3>
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
<script src ="scripts/date.js"></script>
</html>