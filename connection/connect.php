<?php

//main connection file for both admin & front end
$servername = "cc-rds-food-website.cbwwcgsuahye.eu-north-1.rds.amazonaws.com"; //server
$username = "admin"; //username
$password = "12345678"; //password
$dbname = "online_rest";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>