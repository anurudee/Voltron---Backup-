<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'anurudee';
$dbPassword = 'ironport';
$dbName = 'ciscoamp_db';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>