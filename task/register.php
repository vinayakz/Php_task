<!DOCTYPE html>
	<html>
		<head>
			<title>Register</title>
		</head>
		<body>
			
				<div class="container">
					<form action="form.php" method="POST">
						<h2>Register Form</h2>
						<label>UserName:</label>
						<input type="text" name="Username" placeholder="UserName" required><br/><br/>
						<label>PassWord:</label>
						<input type="password" name="Password" placeholder="************" required><br/><br/>
						<label>Email ID:</label>
						<input type="text" name="Email" placeholder="Email ID" required><br/><br/>
						<label>Full name:</label>
						<input type="text" name="Fullname" placeholder="Full name" required><br/><br/>
						<label>Mobile:</label>
						<input type="text" name="Mobile" placeholder="Mobile number" required><br/><br/>
						<input type="submit" name="register" value="send" />
					</form>
				</div>
		</body>
	</html>