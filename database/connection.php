<?php

function getDatabaseConnection(){
    $db = new PDO('sqlite:data.db');
    return $db;
}

?>
