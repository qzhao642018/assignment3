<!DOCTYPE html>
<html>
</body>
<h1>customers before delete</h1>
<?php
	include 'connecttodb.php';
	$query="SELECT * FROM customer;";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("query failed");
	}
   	while($row = mysqli_fetch_assoc($result)) {
        	echo $row['cusID'];
       	 	echo $row['firstname'];
		echo $row['lastname'];
		echo '<br>';
   	}
	mysqli_close($connection);
?>

<h2>customers after delete</h2>
<?php
        include 'connecttodb.php';
	$query="DELETE FROM customer WHERE cusID= '".$_POST['cusID']."';";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("query failed");
	}
	mysqli_close($connection);
	include 'connecttodb.php';
        $query="SELECT * FROM customer;";
        $result=mysqli_query($connection,$query);
        if(!$result){
                die("query failed");
        }
        while($row = mysqli_fetch_assoc($result)) {
                echo $row['cusID'];
                echo $row['firstname'];
                echo $row['lastname'];
                echo '<br>';
        }
        mysqli_close($connection);
?>
</body>
</html>
