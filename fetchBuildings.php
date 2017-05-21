<?php 
try {

include "connect.php";
    // Prepare and execute query
$results = mysql_query("SELECT * FROM room")
						or die(mysql_error());

    // Returning array
    $events = array();

    // Fetch results
	if (mysql_num_rows($results) > 0){
	
		while($result = mysql_fetch_array($results)){
			$e = array();
			$e['id'] = $result['room_id'];
			$e['building'] =  $result['building'];;
			$e['title'] = $result['name'];
			$e['occupancy'] = $result['occupancy'];
			
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