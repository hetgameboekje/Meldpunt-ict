<?php

$host = "localhost";
$dbname = "leen_van_punt_test";
$username = "root";
$password = ""; // change me

$mysqli = new mysqli( $host, $username, $password, $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;