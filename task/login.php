<?php
	session_start();
	include 'mysqlconnect.php';
	if(isset($_SESSION['mylogin'])) {
		//header("Location: page.php");
	}else {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query1 = "SELECT * FROM logtask WHERE username='".$username."' AND password='".$password."'";
		$task = mysqli_query($conn, $query1);

		if(mysqli_num_rows($task) > 0){
			$userInfo = mysqli_fetch_row($task);
			$_SESSION['mylogin'] = $userInfo[0];
			?>
			<script type="text/javascript">
				alert("Login Successfull.");
				window.location.href="page.php";
			</script>
			<?php
			//header("Location: page.php");
		}else {
			?>
			<script type="text/javascript">
				alert("Wrong Username or Password...!");
				window.location.href="index.php";
			</script>
			<?php
			//header("Location: index.php");
		}
	}
?>