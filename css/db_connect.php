<?php

$host = "localhost";
$username = "2438132";
$password = "Eware@507478";
$database = "db2438132";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
