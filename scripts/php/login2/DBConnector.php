<?php
$dbhost='mySQL23.webland.ch';        // Database host
$dbuser='tango_jasons_schule';         // Database username
$dbpass='jason____Maxim__Schulprojekt1231.';     // Database user password
$dbname='tango_jasons_schule';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>