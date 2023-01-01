<?php
	include 'mysqlconnect.php';

	$input1 = $_POST['Username'];
	$input2 = $_POST['Password'];
	$input3 = $_POST['Email'];
	$input4 = $_POST['Fullname'];
	$input5 = $_POST['Mobile'];


	$query1 = "SELECT * FROM logtask WHERE username='".$input1."'";
	$task = mysqli_query($conn, $query1);

	if(mysqli_num_rows($task) > 0){
		echo "Usermame already exists.";
	}else{
		$query = "INSERT INTO logtask(username,password,email,fullname,mobile) VALUES ('".$input1."','".$input2."','".$input3."','".$input4."','".$input5."')";
		$result = mysqli_query($conn, $query);
		echo "<a href='login.php'>Login</a>";
}		
?>