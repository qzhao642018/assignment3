<!DOCTYPE HTML>
<html>
<body>
<?php
	include 'connecttodb.php';
	$query="SELECT description,cost,SUM(purchases.Quantity) as t FROM product INNER JOIN purchases ON product.prodID=purchases.prodID 
	 WHERE purchases.prodID='".$_POST['prodID']."';";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("query failed");
	}
	while ($row=mysqli_fetch_assoc($result)){
		echo "the select item is :";
		echo $row['description'];
		echo '<br>';
		echo " the total revenue is: ";
		echo "$";
		echo $row['cost']*$row['t'];
	}
?>

