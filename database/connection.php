<?php

function getDatabaseConnection(){
    $db = new PDO('sqlite:database/data.db');
    return $db;
}

?>
