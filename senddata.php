<?php
include "connect.php";

$name =$_POST['name'];
$capacity =$_POST['capacity'];

echo $name." ".$capacity."<br/>";

$result = mysql_query("INSERT INTO room (room_id, name, capacity) VALUES(DEFAULT,'$name','$capacity')", $conn);

echo $name."data added";
?>