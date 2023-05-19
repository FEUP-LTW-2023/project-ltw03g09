<script src ="scripts/goToTicketPage.js"></script>
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
            
                $html = <<<HTML
                    <div class ='ticketBanner' id=$ticket_id onclick=goToTicketPage($ticket_id)>
                        <div class='ticketHeader'>
                            <h3>$title</h3>
                            <p id='status'>$status</p>
                        </div>
                        <p>$text</p>
                        <div id='ticketSocials'>
                            <p>username: <p id='username'>$username</p></p>    
                            <p>department: <p id='department'>$department</p></p>    
                            <p>label: <p id='label'>$label</p></p>   
                            <p>date: <p id='date'>$date</p></p>    
                            <!--<p>assignedAgent: <p id='asignedAgent'>$assignedAgent</p></p>-->
                        </div>
                    </div>
                HTML;
                echo $html;
            }
        ?>
<script src ="scripts/date.js"></script>