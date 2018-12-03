<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>qzhao64 assignment3</title>
</head>
<body>
<?php
	include'connecttodb.php';
?>
<h1> the purchase info by this customer</h1>
<div>
	<?php
		$current=$_POST["customers"];
		$query='SELECT description, purchases.Quantity FROM customer INNER JOIN purchases INNER JOIN product ON customer.cusID=purchases.cusID AND purchases.prodID=product.prodID WHERE purchases.cusID="'. $current .'"';
		$result=mysqli_query($connection,$query);
		if(!$result){
			die("query purchases failed");
		}
		while ($row=mysqli_fetch_assoc($result)){
			echo '<p>';
			echo $row["description"] . " " . $row["Quantity"];
			echo '</p>';
		}
		mysqli_free_result($result);
	?>	
</div>
</body>
</html>
