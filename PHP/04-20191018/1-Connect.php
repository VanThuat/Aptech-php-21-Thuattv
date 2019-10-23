<?php

$servername = "localhost";
$username = "root";
$password ="";

// Create connection
$connect = mysqli_connect($servername, $username, $password);
// or
// $connect = new mysqli($servername, $username, $password);
// Or (không cần khai báo biến ban đầu)
// $connect = mysqli_connect ("localhost", "root", "");


// Check connection
if (!$connect) {
    die("Connection failed");
}
echo "Connected successfully";
?>