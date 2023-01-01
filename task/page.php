<?php
	session_start();
	include 'mysqlconnect.php';

	if(isset($_SESSION['mylogin'])) {
		$userID = $_SESSION['mylogin'];
		$query1 = "SELECT * FROM logtask WHERE id='".$userID."'";
		$task = mysqli_query($conn, $query1);
		$userInfo = mysqli_fetch_row($task);

		echo "Welcome, ".$userInfo[4];
		echo "\n\n";
		echo "<a href='logout.php'>Logout</a>";
	}else {
		?>
		<script type="text/javascript">
			alert("Page is restricted. Please login to continue.");
			window.location.href="index.php";
		</script>
		<?php
		//header("Location: index.php");
	}
?>

