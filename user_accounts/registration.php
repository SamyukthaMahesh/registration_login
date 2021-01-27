<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>

	<div>
		<form action="registration.php" method="post">
			<div class="container">
				<h1>Registration</h1>
				<p>Fill up the form with correct values.</p>
				<label for="firstname"><b>First Name</b></label>
				<input type="text" name="firstname" required>
				<label for="lastname"><b>Last Name</b></label>
				<input type="text" name="lastname" required>
				<label for="email"><b>Email</b></label>
				<input type="email" name="email" required>
				<label for="phonenumber"><b>Phone Number</b></label>
				<input type="text" name="phonenumber" required>
				<label for="password"><b>Password</b></label>
				<input type="password" name="password" required>
			</div>
		</form>
	</div>

</body>
</html>
