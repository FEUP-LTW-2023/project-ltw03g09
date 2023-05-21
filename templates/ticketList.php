<script src="../scripts/goToTicketPage.js"></script>
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
                $image = $ticket['image'];
?>
                    <div class ='ticketBanner' id=$ticket_id onclick=goToTicketPage(<?php echo $ticket_id ?>)>
                        <div class='ticketHeader'>
                            <h3><?php echo $title ?></h3>
                            <p id='status'><?php echo $status ?></p>
                        </div>
                        <!--<p>$text</p>-->
                        <div id='ticketSocials'>
                            <div style="display: flex;align-items:center" onclick="window.location.href='profilePage.php2?user_id=<?php echo $user_id?>'">
                                <img class="profileIcon" src="<?php echo $image?>"/>
                                <span id='username'><?php echo $username ?></span>
                            </div>
                            <span>department: <span id='department'><?php echo $department ?></span></span>    
                            <span>label: <span id='label'><?php echo $label ?></span></span>   
                            <!--<p>assignedAgent: <p id='asignedAgent'>$assignedAgent</p></p>-->
                        </div>
                        <span style="display:flex;justify-content:flex-end;" id='date'><?php echo $date ?></span>    
                    </div>
<?php
            }
?>
