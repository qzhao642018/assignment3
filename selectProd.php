<?php
	$query="SELECT * FROM product;";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("query failed");
	}
	while($row=mysqli_fetch_assoc($result)){
		echo "<option value='";
		echo $row["prodID"]."'>";
		echo $row["prodID"];
		echo "</option>";
	}
	mysqli_free_result($result);
?>
