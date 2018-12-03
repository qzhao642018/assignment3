<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Get customer info</title>
<link rel="stylesheet" href="Q1.css">
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h1 align="center"> CS3319 Assignment3</h1>

<div align="center" style="border:3px solid #6955a3;padding:30px">
<form action = "getpurchases.php" method="post">
        <?php
                include 'getcustomers.php';
        ?>
<input type="submit" value="Submit">
</form>
</br>
</div>
</br>
<div align="center" style="border:3px solid #6955a3; padding:30px">
<p> Q2 get the product list</p>
<form action = "getproduct.php" method="post">
	<select name="order">
		<option value="ASC">ascending</option>
		<option value="DESC">descending</option>
	</select>
	<select name="type">
		<option value="cost">price</option>
		<option value="description">description</option>
	</select>
	<input type="submit" value="submit">
</form>
</br>
</div>
</br>
<div align="center" style="border:3px solid #6955a3; padding:30px">
<p>Q3: insert new purchase</p>
<form action="addPurchase.php" method="post">
	<select name="cusID">
		<option value='1'> choose customer ID</option>
		<?php
		include 'selectCus.php';
		?>
	</select>
	<select name="prodID">
		<option value'1'> choose product ID</option>
		<?php
		include 'selectProd.php';
		?>
	</select>
	Quantity :<input type="text" name="Quantity"><br>
	<input type="submit" value="submit">
</form>
</div>
</br>

<div align="center" style="border:3px solid #6955a3; padding:30px">
<p>Q4: insert new customer if customer not exist(reload the main page to check if it is work)</p>
<form action="addcustomer.php" method="post">
	ID:<input type="text" name="cusID"><br>
	first name:<input type="text" name="first"><br>
	last name:<input type="text" name="last"><br>
	city:<input type="text" name="city"><br>
	phone:<input type="text" name="phone"><br>
	agent id:<input type="text" name="aid"><br>
	<input type="submit" value="add customer">
</form>
</div>
</br>

<div align="center" style="border:3px solid #6955a3; padding:30px">
<p>Q5: show the pervious number then update</p>
<form action="showNumber.php" method="post">
	<select name="cusID">
        <option value='1'> choose customer ID</option>
        <?php
        	include 'selectCus.php';
        ?>
	</select><br>	
	new number:<input type="text" name="phonenumber"><br>
	<p></p>
	<input type="submit" value="submit">
</form>
</div>
</br>
<div align="center" style="border:3px solid #6955a3; padding:30px">
<p>Q6: delete a customer</p>
<form action="customerdelete.php" method="post">
	<select name="cusID">
		<option value='111'> choose customer ID </option>
		<?php
			include 'selectCus.php';
		?>
	</select></br>
	<input type="submit" value="delete">
</form>
</div>
</br>
<div align="center" style="border:3px solid #6955a3; padding:30px">
<p>Q7: list the customers who bought over the quantity</p>
<form action="overQuantity.php" method="post">
	<input type="submit" value="check customers">
</form>
</div>
</br>
<div align="center" style="border:3px solid #6955a3; padding:30px">
<p>Q8: list the product not been purchased</p>
<form action="notPurchased.php" method="post">
	<input type="submit" value="check inventory">
</form>
</div>
</br>
<div align="center" style="border:3px solid #6955a3; padding:30px">
<p>Q9: Total revenue of select product</p>
<form action="getRevenue.php" method="post">
	<select name="prodID">
	<option value="111">choose product number</option>
	<?php
		include 'selectProd.php';
	?>
	</select><br>
	<input type="submit" value="submit">
</form>
</div>


</body>
</html>

