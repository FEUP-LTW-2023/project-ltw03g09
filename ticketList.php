<script src ="scripts/goToTicketPage.js"></script>
<?php
            foreach($tickets as $ticket){
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
                            <p>priority: <p id='priority'>$priority</p></p>    
                            <p>date: <p id='date'>$date</p></p>    
                            <!--<p>assignedAgent: <p id='asignedAgent'>$assignedAgent</p></p>-->
                        </div>
                    </div>
                HTML;
                echo $html;
            }
        ?>