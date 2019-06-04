<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'su clave';
$dbName = 'su data base';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection fallo: " . $db->connect_error);
}
?>