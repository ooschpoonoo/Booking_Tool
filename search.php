<?php
include "connect.php";

$search_term =$_POST['search_value'];

$results = mysql_query("SELECT * FROM room WHERE name LIKE '%".$search_term."%' OR capacity like '%".$search_term."%'") or die(mysql_error());

if (mysql_num_rows($results) > 0){
	

	while($result = mysql_fetch_array($results)){
		echo "<p><h3>".$result['name']."</h3> Capacity: ".$result['capacity']."</p>";
	}

}
else{
	echo "No results";
	}


?>