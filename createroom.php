<?php
//Here we are getting the Value Submitted by User
$createRoom = $_POST['room'];
// Checking for String Size
if (strlen($createRoom)>20 || strlen($createRoom)<2){
    echo "<script> alert('Please Enter a Name Between 2 to 20 Characters.');
     window.location = 'https://localhost/chatapp/Chat_app_php';
            </script>";
}
// Checking whether room name is alphanumeric
elseif (!ctype_alnum($createRoom)){
    echo "<script> alert('Please Enter AlphaNumeric Room Name');
          window.location = 'https://localhost/chatapp/Chat_app_php';
            </script>";
}
else {
    //Connection with Database
    include 'database_conn.php';
}
// Check if Room Already Exists
$sql = "SELECT * FROM `room` WHERE room_name ='$createRoom'";
$result = mysqli_query($conn , $sql);
if ($result){
    if (mysqli_num_rows($result)>0){
        echo "<script> alert('Please Enter a different room name this name is already in use.');
     window.location = 'https://localhost/chatapp/Chat_app_php';
            </script>";
    }
    else {
        $sql = "INSERT INTO `room` (`room_name`, `stime`) VALUES ('$createRoom', current_timestamp())";
        if (mysqli_query($conn,$sql)){
            echo "<script> alert('Your Room is now Ready You Can Chat Now.');
            window.location = 'https://localhost/chatapp/Chat_app_php/room.php?roomname=".$createRoom."';
            </script>";
        }
    }
}else{
    echo "Error: ".mysqli_error($conn);
}
?>