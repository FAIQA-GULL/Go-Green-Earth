<?php

$conn = new mysqli('localhost', 'root', '', 'mc190406567');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
