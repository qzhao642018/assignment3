<!DOCTYPE html>
<html>
<body>
<h1> list the customers who bought over the quantity</h1>
<?php
	include 'connecttodb.php';
	$query="SELECT firstname,lastname,product.description,purchases.Quantity FROM (purchases INNER JOIN customer ON purchases.cusID=customer.cusID) 
	INNER JOIN product ON purchases.prodID=product.prodID WHERE purchases.Quantity > product.quantityonhand;";
	$result=mysqli_query($connection,$query);
	if(!$result){
		echo '<p> there is no over purchases</p>';
	}
	while($row=mysqli_fetch_assoc($result)){
		echo $row['firstname'];
		echo ' | ';
		echo $row['lastname'];
		echo ' | ';
		echo $row['description'];
		echo ' | ';
		echo $row['Quantity'];
		echo '<br>';
	}
	mysqli_close($connection);
?>



