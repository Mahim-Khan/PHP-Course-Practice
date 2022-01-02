<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
</head>
<body>
	<form action="/insert.php" method="post">
		<p>
			<label for="firstname"> First Name		
			</label>
			<input type="text" name="firstname" id="firstname">
		</p>
		<p>
			<label for="lastname"> Last Name		
			</label>
			<input type="text" name="lastname" id="lastname">
		</p>
		<p>
			<label for="email"> Email		
			</label>
			<input type="text" name="email" id="email">
		</p>
		<input type="submit" value="Submit">
	</form>

</body>
</html>