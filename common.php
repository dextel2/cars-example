<?php

$db_name = "cars";
$db_username = "root";
$db_password = "";
        
// Create a database connection handle $dbh

$dbh = new PDO('mysql:host=localhost;dbname='. $db_name, $db_username, $db_password);