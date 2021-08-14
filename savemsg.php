<?php
// Connecting to database
include "database_conn.php";

// Get the values from post request
$msg = $_POST['text'];
$room = $_POST['room'];
$ip = $_POST['ip'];

//Insert data to database Table

$sql = "INSERT INTO `msgs` (`msgs`, `room_name`, `ip`, `stime`) VALUES ('$msg','$room','$ip', current_timestamp())";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>