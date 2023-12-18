<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "rewto3112";
$dbname = "Airbnb";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
if(!$conn) {
    die("Database connection failed");
}