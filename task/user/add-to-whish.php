<?php
	session_start();
	include 'mysqlconnect.php';

	if(isset($_SESSION['mylogin'])) {
		$prodID = $_POST['prodID'];
		$userID = $_POST['userID'];
		// $gnCheckbox = 'prod-check-'.$prodID;
		// $checkVal = $_POST['prod-check-'.$prodID.''];

		$query1 = "SELECT myproducts FROM logtask WHERE id='".$userID."'";
		$task = mysqli_query($conn, $query1);
		$task = mysqli_fetch_assoc($task);
		$task = $task['myproducts'];
		if(!empty($task)) {
			//if($checkVal=='gn0') {
				$OldProds = $task;
			// }else {
			// 	$OldProds = str_replace($prodID,"0",$task);				
			// }
		}else {
			$OldProds = '';
		}

		$OldProds .= $prodID.'|';

		$query = "UPDATE logtask SET myproducts='".$OldProds."' WHERE id='".$userID."'";
		$result = mysqli_query($conn, $query);
		header("Location: page.php");
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