<?php include('header.php');?>

<div id="content">

<p> Results Page</p>

<?php
include "connect.php";
$results = mysql_query("SELECT u.name as UserName, r.name as RoomName, b.start_time, b.end_time
						FROM booking b  
						INNER JOIN user u ON b.user_id = u.user_id 
						INNER JOIN  room r ON b.room_id = r.room_id")
						or die(mysql_error());

if (mysql_num_rows($results) > 0){
	
	echo "<table><tr><th>Booked By</th><th>Room By</th><th>Time Start By</th><th>Time End</th></tr>";
	while($result = mysql_fetch_array($results)){
		echo "<tr>";
		echo "<td>" . $result["UserName"]. "</td>";
		echo "<td>" . $result["RoomName"]. "</td>";
		echo "<td>" . $result["start_time"]. "</td>";
		echo "<td>" . $result["end_time"]. "</td>";
		echo "</tr>";
		
	}
	echo "</table>";
}
else{
	echo "No results";
	}


?>

</div>
<?php include('footer.php');?>