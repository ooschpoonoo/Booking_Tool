<?php 
$conn = mysql_connect("localhost", "root", "");


mysql_select_db("booking_tool_database");


if (!$conn)
	echo "error";
?>