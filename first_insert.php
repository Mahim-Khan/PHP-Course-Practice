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
	 $firstname = mysqli_real_escape_string ($conn , $_REQUEST['firstname']);
	 $lastname = mysqli_real_escape_string ($conn , $_REQUEST['lastname']);
	 $email = mysqli_real_escape_string ($conn , $_REQUEST['email']);

	 $sql = "insert into persons(
	 first_name,last_name,email) values('$firstname','$lastname','$email')
	
	 ";
	 if(mysqli_query($conn, $sql))
	 {
	 	echo "Record created. ";
	 }
	 else
	 {
	 	echo "".mysqli_error($conn);
	 }
	 mysqli_close($conn);
	?>
</body>
</html>