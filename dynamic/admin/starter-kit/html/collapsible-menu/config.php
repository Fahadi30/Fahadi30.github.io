<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username,$password, "ebaitussalam" );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}//select a database to work with
?> 

