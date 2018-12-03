<!DOCTYPE html>
<html>
<head>
<title> qzhao64 assignment3</title>
</head>
<body>
	<?php
		include 'connecttodb.php';
		if(isset($_POST['cusID']) && isset($_POST['prodID']) && isset($_POST['Quantity']) ){
			$query="SELECT * FROM purchases;";
			$result=mysqli_query($connection,$query);
			if(!$result){
				die("query failed");
			}
			while($row=mysqli_fetch_assoc($result)){
				if($row['cusID']==$_POST['cusID'] && $row['prodID']==$_POST['prodID']){
					if($row['Quantity']>$_POST['Quantity']){
						echo '<script> alert("quantity too low");</script>';
						mysqli_free_result($result);
					}
						mysqli_free_result($result);
						$query = "UPDATE purchases SET Quantity=" . $_POST['Quantity'] . " WHERE prodID='" . $_POST['prodID'] ."' AND cusID='" . $_POST['cusID'] . "'";
   						$result = mysqli_query($connection,$query);
   						if (!$result) {
        						die("databases query failed.");
    						}
						echo '<script> alert("add successful!");</script>';
						exit;
				}
			}
                        mysqli_free_result($result);
                        $query = "INSERT INTO purchases(cusID, prodID, Quantity) VALUES('" . $_POST['cusID'] . "', '" . $_POST['prodID'] . "',".$_POST['Quantity'].");";
                        $result = mysqli_query($connection,$query);
			mysqli_close($connection);
			echo '<script> alert("add new purchase successful");</script>';
			exit;	
		}
	?>
</body>
</html>
