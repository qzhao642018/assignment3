<?php
	$query= "SELECT * FROM customer;";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("query failed");
	}
	while($row=mysqli_fetch_assoc($result)){
		echo "<option value='";
		echo $row["cusID"]."'>";
		echo $row["cusID"];
		echo "</option>";
	}
	mysqli_free_result($result);
?>
