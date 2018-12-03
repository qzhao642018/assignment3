<!DOCTYPE html>
<html>
<body>
<h1> List All product not been purchased</h1>
<?php
	include 'connecttodb.php';
	$query="SELECT description FROM product WHERE NOT EXISTS (SELECT purchases.prodID FROM purchases WHERE product.prodID=purchases.prodID);";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("query failed");
	}
	while($row=mysqli_fetch_assoc($result)){
		echo $row['description'];
		echo '<br>';
	}
	mysqli_close($connection);

?>
