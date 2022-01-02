<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<?php
	 $conn = mysqli_connect("localhost","root","root","demo");
	 if ($conn == false) {
	 	die("Connection Failed ".mysqli_connect_error()
	 );
	 }
	 //$sql = " update persons set email ='fahim.cse@diu.edu.bd'
	  //where id = 1;
	 $sql = " delete from persons where id = 11;
	 ";
	 if(mysqli_query($conn, $sql))
	 {
	 	/*if(mysqli_num_rows($value) > 0 )
	 	{ 
	 		echo "<table>";
	 		echo "<tr>"; 
	 		echo "<th> Id </th>";
	 		echo "<th> First Name </th>";
	 		echo "<th> Last Name </th>";
	 		echo "<th> Email </th>";
	 		echo "</tr>";
	 		while ($row = mysqli_fetch_array($value)) {
	 			echo "<table>";
	 		echo "<tr>"; 
	 		echo "<td>" .$row['id'] ."</td>";
	 		echo "<td>" .$row['first_name'] ."</td>";
	 		echo "<td>" .$row['last_name'] ."</td>";
	 		echo "<td>" .$row['email'] ."</td>";
	 		echo "</tr>";
	 		}
	 		echo "</table>";

	 	}
	 	else
	 	{
	 		echo "No record found";

	 	}*/
	 	//echo "Updated";
	 	echo "Deleted";
	 }
	 else
	 {
	 	echo "".mysqli_error($conn);
	 }
	 mysqli_close($conn);
	?>
</body>
</html>