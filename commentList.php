<?php

foreach($comments as $comment){
    $text = $comment['text'];
    $date = $comment['date'];
    $username = $comment['username'];
    $image = $comment['image'];

    echo '<div class="comment">';

    echo '<div class="commentUser">';
    echo '<image src="'.$image.'" class="profileIcon"/>';
    echo '<div class="commentUsername">'.$username.'</div>';
    echo '</div>';
    echo '<div class="commentText">'.$text.'</div>';
    echo '<div class="commentDate" id="date">'.$date.'</div>';

    echo '</div>';
}

?>