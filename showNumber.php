<!DOCTYPE html>
<html>
</body>
<?php
	include 'connecttodb.php';
	$query="SELECT * FROM customer;";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("query failed");
	}
	while($row=mysqli_fetch_assoc($result)){
		if($row['cusID']==$_POST['cusID']){
			echo '<p> The old number is</p>';
			echo $row['phonenumber'];
			echo '<br>';
		}
	}
	mysqli_free_result($result);
	$query="UPDATE customer SET phonenumber='" . $_POST['phonenumber'] . "' WHERE cusID='" . $_POST['cusID'] . "'";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("query failed.");
	}
	mysqli_close($connection);
	include'connecttodb.php';
	echo '<p>new number update successful</p>';
	echo '<p>new number is</p>';
	$query="SELECT * FROM customer;";
	$result=mysqli_query($connection,$query);
	while($row=mysqli_fetch_assoc($result)){
		if($row['cusID']==$_POST['cusID']){
			echo $row['phonenumber'];
		}
	}
	mysqli_close($connection);
?>
</body>
</html>
