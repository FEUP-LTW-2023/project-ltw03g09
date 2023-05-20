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
            <p>username: <?php echo $username ?></p>    
            <p>department: 
                <div id='department'>
                    <span>
                    <?php
                        if(!$_SESSION['agent_id']){
                            echo $department;
                        }else{
                            echo '<select id="departmentSelect" class="profileTextbox" name="department">';

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
            </p>    
            <p>label: <?php echo $label ?></p>   
            <p>date: <div id='date'><?php echo $date ?></div></p>   
        </div>
        <div class="assignAgent">

            

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
<script src ="scripts/date.js"></script>
</html>