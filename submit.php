<?php include('header.php');?>

<div id="content">

<p> Search Page</p>

<iframe name="void" style="display:none"></iframe>
<form action = "senddata.php" method = "POST" target="void">
	Room Name : <br> <input type = "text" name = "name"></br>
	Capacity : <br> <input type = "text" name = "capacity" </br>
	<input type = "submit" name = "submit" value = "Enter Data">
</form>
<form action = "search.php" method = "POST">
	Search : <br> <input type "text" name = "search_value"</br>
	<input type = "submit" name = "search" value = "Search">
</form>

</div>
<?php include('footer.php');?>

