<?php
function vl_my_login_check($username1, $password1){
	include 'mysqlconnect.php';

	$query1 = "SELECT * FROM admin WHERE username='".$username1."' AND password='".$password1."'";
		$task = mysqli_query($conn, $query1);

		if(mysqli_num_rows($task) > 0){
			$adminInfo = mysqli_fetch_row($task);
			$_SESSION['mylogin'] = $adminInfo[0];
				return 'thepage';
		}else{
			return 'tehindex';				
		}	
}
?>