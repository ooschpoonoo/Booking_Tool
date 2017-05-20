<?php
include "connect.php";

$name =$_POST['name'];
$capacity =$_POST['capacity'];
$result = mysql_query("INSERT INTO room (room_id, name, capacity) VALUES(DEFAULT,'$name','$capacity')", $conn);

$message =  $name." ".$capacity.", data added";

echo "<script type='text/javascript'>alert('$message');</script>";

?>