<?php
include 'mysqlconnect.php';

$input1 = $_POST['username'];
$input2 = $_POST['password'];
$input3 = $_POST['Fullname'];
$input4 = $_POST['Number'];
$input5 = $_POST['Gender'];
$input6 = $_POST['mstatus'];
$input7 = $_POST['bday'];
$today = date('Y-m-d H:i:s');


$query1 = "SELECT * FROM registrations WHERE username='".$input1."'";
$dfbgtse = mysqli_query($conn, $query1);

	if(mysqli_num_rows($task1) > 0){
	echo "<h1>Usermame or Email is already exists.</h1>";
	echo "<a href='index.html'><h1>Home</h1></a>";
	}else{

	
	$query = "INSERT INTO registrations(username, password, full_name, phone_no, gender, marital_status, dob, reg_date) values('".$input1."','".$input2."','".$input3."','".$input4."','".$input5."','".$input6."','".$input7."','".$today."')";
	$result = mysqli_query($conn, $query);



	if (mysqli_query($conn,$result)) {
		echo "<h1>Details Has Been Inserted...... </h1>";
		echo "<a href='index.html'><h1>Home</h1></a>";
	}else{
		echo "Error: " . $task . "<br>" . mysqli_error($conn);
	}
	
		
echo 'Username: '.$input1.'<br>';
echo 'Password: '.str_repeat('*', strlen($input2))."<br>";
echo 'Fullname: '.$input3."<br>";
echo 'Mob. No.: '.$input4."<br>";
echo 'Gender: '.$input5."<br>";
echo 'Dob: '.$input7."<br>";
echo 'Marital Status: '.$input6."<br/>";
	

}
mysqli_close($conn);

?>
