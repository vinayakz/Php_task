<?php
	session_start();
	if (isset($_SESSION['mylogin'])) {
		header("Location: page.php");	
	}else {
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>login</title>
		</head>
		<body>
			
				<div class="container">
					<form action="login.php" method="POST">
						<h2>Login Form</h2>
						<label>UserName:</label>
						<input type="text" name="username" placeholder="UserName" required><br/><br/>
						<label>PassWord:</label>
						<input type="password" name="password" placeholder="************" required><br/><br/>
						<input type="submit" name="send" value="login" />
					</form>
					<br>
					<a href="register.php">Don't have account? Click here to register.</a>
				</div>
		</body>
	</html>
<?php } ?>