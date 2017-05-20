<?php
include "connect.php";


$id =$_POST["submit"];

echo $id;
echo $conn;

$result = mysql_query("INSERT INTO booking (booking_id, user_id, room_id, start_time, end_time) VALUES (DEFAULT,1,$id,'2017/05/11','2017/05/12')", $conn);
if(!$result){
	echo   mysql_error($conn);
}else{
	$message =  $id.", data added";
	echo "<script type='text/javascript'>alert('$message');</script>";
}


mysql_close($conn);
?>