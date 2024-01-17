<?php
$servername = "localhost";
$username = "mesmart_user1";
$password = "Trinity@1234$";
$db = "mesmart_trinity";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>