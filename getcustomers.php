<?php
   $query = "SELECT * FROM customer GROUP BY lastname;";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo " Q1:select a customer and get the customer's purchase </br>";
   echo "<table style='margin-left:auto; margin-right:auto;'>";
   echo "<tr><th>Select</th><th>Name</th><th>City</th><th>Phone</th><th>AgentID</th></tr>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td><input type="radio" name="customers" value="';
        echo $row["cusID"];
        echo '"></td><td>' . $row["lastname"] . " " . $row["firstname"] . "</td><td>" . $row["city"] . "</td><td>" . $row["phonenumber"] . "</td><td><tb>" . $row["agentID"] . "</td></tr>";
   }
   echo "</table>";
   mysqli_free_result($result);
?>
