<?php

function getDatabaseConnection($pre = ""){
    $db = new PDO('sqlite:' . $pre . 'data.db');
    return $db;
}

?>
