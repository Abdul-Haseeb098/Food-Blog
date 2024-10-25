<?php
// connection with database
$conn = new mysqli("localhost","root","","registration");

// check connection

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}