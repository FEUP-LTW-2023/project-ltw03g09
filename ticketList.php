<script src="scripts/goToTicketPage.js"></script>
<?php
            foreach($tickets as $ticket){
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
?>
                    <div class ='ticketBanner' id=$ticket_id onclick=goToTicketPage(<?php echo $ticket_id ?>)>
                        <div class='ticketHeader'>
                            <h3><?php echo $title ?></h3>
                            <p id='status'><?php echo $status ?></p>
                        </div>
                        <!--<p>$text</p>-->
                        <div id='ticketSocials'>
                            <p>username: <p id='username'><?php echo $username ?></p></p>    
                            <p>department: <p id='department'><?php echo $department ?></p></p>    
                            <p>label: <p id='label'><?php echo $label ?></p></p>   
                            <p>date: <p id='date'><?php echo $date ?></p></p>    
                            <!--<p>assignedAgent: <p id='asignedAgent'>$assignedAgent</p></p>-->
                        </div>
                    </div>
<?php
            }
?>
<script src ="scripts/date.js"></script>
