<?php 
try {

include "connect.php";
    // Prepare and execute query
$results = mysql_query("SELECT booking_id, u.name as UserName,room_id, b.start_time, b.end_time
						FROM booking b  
						INNER JOIN user u ON b.user_id = u.user_id")
						or die(mysql_error());

    // Returning array
    $events = array();

    // Fetch results
	if (mysql_num_rows($results) > 0){
	
		while($result = mysql_fetch_array($results)){
			$e = array();
			$e['id'] = $result['booking_id'];
			$e['resourceId'] =  $result['room_id'];
			$e['title'] =  $result['UserName'];;
			$e['start'] = $result['start_time'];
			$e['end'] = $result['end_time'];
			
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