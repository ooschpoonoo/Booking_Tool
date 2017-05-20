<?php include('header.php');?>

<div id="content">

<p> Results Page</p>

<?php
include "connect.php";

$search_term =$_POST['search_value'];

$results = mysql_query("SELECT * FROM room WHERE name LIKE '%".$search_term."%' OR capacity like '%".$search_term."%'") or die(mysql_error());

if (mysql_num_rows($results) > 0){
	
	echo "<table><tr><th>Name</th><th>Capacity</th><th>Book</th></tr>";
	while($result = mysql_fetch_array($results)){
		echo "<tr>";
		echo '<form action="book.php" method="POST">';
		echo "<td>" . $result["name"]. "</td>";
		echo "<td>" . $result["capacity"]. "</td>";
		echo '<td><input type="submit" name="submit" value="'. $result["room_id"] . '" /></td>';
		echo "</form>";
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

