<?php

//main connection file for both admin & front end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "online_rest";  //database

// Create connection
$db = new mysqli($servername, $username, $password, $dbname); // connecting 

// Check connection
if ($db->connect_error) {       //checking connection to DB 
    die("Connection failed: " . $db->connect_error);
}

// Enable error reporting
$db->report_mode = MYSQLI_REPORT_ALL;

?>