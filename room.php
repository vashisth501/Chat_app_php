<?php
// Let's Get the Room Name

$roomName = $_GET['roomname'];
// Connect to Database
include 'database_conn.php';

// Check wheter room exists
$sql = "SELECT * FROM `room` WHERE room_name = '$roomName' ";
$result = mysqli_query($conn,$sql);
if ($result){
//Check if room exists
    if (mysqli_num_rows($result)===0){
        echo "<script> alert('Please Try Creating a new room');
            </script>";
    }
}else{
    echo "Error :".mysqli_error($conn);
}
include 'chatbox.html';
?>
