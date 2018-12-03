<!DCOTYPE html>
<html>
<body>
<?php
	include 'connecttodb.php';
	if(isset($_POST['cusID'])&& isset($_POST['last'])&& isset($_POST['phone'])){
	$query="SELECT * FROM customer;";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("query failed");
	}
	while($row=mysqli_fetch_assoc($result)){
		if($row['cusID']==$_POST['cusID']){
			echo '<script> alert("this customer already exist!");</script>';
			exit;
		}
	}
	mysqli_free_result($result);
	$query = "INSERT INTO customer(cusID, firstname, lastname, city, phonenumber,agentID) VALUES('" . $_POST['cusID'] . "' , '" . $_POST['first'] . "', '" . $_POST['last'] . "', '" . $_POST['city'] . "', '" . $_POST['phone'] . "','" . $_POST['aid'] . "')";
	$result=mysqli_query($connection,$query);
	echo '<script> alert("customer adding successful!");</script>';
	mysqli_close($connection);
	exit;
	}
	else{
		echo '<script> alert("please back to the main page and fill the form! ");</script>';
	}
?>
</body>
</html>
