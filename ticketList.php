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
                $image = $ticket['image'];
?>
                    <div class ='ticketBanner' id=$ticket_id onclick=goToTicketPage(<?php echo $ticket_id ?>)>
                        <div class='ticketHeader'>
                            <h3><?php echo $title ?></h3>
                            <p id='status'><?php echo $status ?></p>
                        </div>
                        <!--<p>$text</p>-->
                        <div id='ticketSocials'>
                            <div style="display: flex;align-items:center">
                                <img class="profileIcon" src="<?php echo $image?>"/>
                                <span id='username'><?php echo $username ?></span>
                            </div>
                            <span>department: <span id='department'><?php echo $department ?></span></span>    
                            <span>label: <span id='label'><?php echo $label ?></span></span>   
                            <span>date: <span id='date'><?php echo $date ?></span></span>    
                            <!--<p>assignedAgent: <p id='asignedAgent'>$assignedAgent</p></p>-->
                        </div>
                    </div>
<?php
            }
?>
<!--/*            <div class='ticketBanner' id=$ticket_id onclick=goToTicketPage($ticket_id)>
                <div class='ticketHeader'>
                    <h3>$title</h3>
                    <p id='status'>$status</p>
                </div>
                <p>$text</p>
                <div id='ticketSocials'>
                    <p><span>username:</span> <span id='username'>$username</span></p>
                    <p><span>department:</span> <span id='department'>$department</span></p>
                    <p><span>label:</span> <span id='label'>$label</span></p>
                    <p><span>priority:</span> <span id='priority'>$priority</span></p>
                    <p><span>date:</span> <span id='date'>$date</span></p>
                </div>
            </div>
        -->
</div>
