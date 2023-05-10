<?php

foreach($comments as $comment){
    $text = $comment[1];
    $date = $comment[4];
    $username = $comment[5];

    echo '<div class="comment">';

    echo '<div class="commentUsername">'.$username.'</div>';
    echo '<div class="commentText">'.$text.'</div>';
    echo '<div class="commentDate">'.$date.'</div>';

    echo '</div>';
}

?>