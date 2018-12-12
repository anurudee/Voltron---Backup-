<?php
 
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "anurudee";
 $dbpass = "ironport";
 $dbname = "ciscoamp_db";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}
 
?>