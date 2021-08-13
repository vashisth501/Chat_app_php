<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "chatroom";

// Creating Connection with Database
$conn = mysqli_connect($servername,$username,$password,$database);

// Checking Connection is Established or not
if (!$conn){
    die("Failed to Connect".mysqli_connect_error());
}
?>