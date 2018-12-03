<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>qzhao64 assignment3</title>
</head>
<body>
<?php
	include 'connecttodb.php';
?>
<h1> The ordering product list </h1>
<div style="background-color:lightblue">
	<?php
		if(isset($_POST["type"]) && isset($_POST["order"])){//get the user choose from mainpage.php
  	 		$query = "SELECT * FROM product ORDER BY " . $_POST["type"] . " " . $_POST["order"] ;   
   		}
   		$result = mysqli_query($connection,$query);
   
   		if (!$result) {
        		die("query get product failed.");
    		}
		while($row=mysqli_fetch_assoc($result)){
			echo '<li>';
			echo $row["description"] . " " . $row["cost"];
			echo '</li>';
		}
	mysqli_free_result($result);		
	?>
</div>
</body>
</html>
