<?php

//variables
$localhost = "localhost";
$user = "root";
$password = "usbw";
$database = "institutions-address";

//create a database connection

$mysqli = new mysqli($localhost, $user, $password, $database);
if ($mysqli->connect_errno) { 
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

?>