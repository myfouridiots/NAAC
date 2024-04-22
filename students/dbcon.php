<?php

// $con = mysqli_connect("localhost","root","","blog");

// if(!$con){
//     die('Connection Failed'. mysqli_connect_error());
// }

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "aqar";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


