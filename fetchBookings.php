<?php 
try {

include "connect.php";
    // Prepare and execute query
$results = mysql_query("SELECT booking_id, u.name as UserName, r.name as RoomName, b.start_time, b.end_time
						FROM booking b  
						INNER JOIN user u ON b.user_id = u.user_id 
						INNER JOIN  room r ON b.room_id = r.room_id")
						or die(mysql_error());

    // Returning array
    $events = array();

    // Fetch results
	if (mysql_num_rows($results) > 0){
	
		while($result = mysql_fetch_array($results)){
			$e = array();
			$e['id'] = $result['booking_id'];
			$e['title'] =  $result['UserName'];;
			$e['start'] = $result['start_time'];
			$e['end'] = $result['end_time'];
			$e['allDay'] = false;

			// Merge the event array into the return array
			array_push($events, $e);

		}
	}

    // Output json for our calendar
    echo json_encode($events);
    exit();

} catch (PDOException $e){
    echo $e->getMessage();
}
?>