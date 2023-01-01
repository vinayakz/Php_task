<?php
/*
Template Name: mytest1
*/

//include get_template_directory_uri() . '/mysqlconnect.php';

$servername = "localhost";
$username = "everychi_test";
$password = "l{{NikTU#_DW";
$dbname = "everychi_test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$input1 = $_POST['username'];
$input2 = $_POST['password'];
$input3 = $_POST['Fullname'];
$input4 = $_POST['Number'];
$input5 = $_POST['Gender'];
$input6 = $_POST['mstatus'];
$input7 = $_POST['bday'];
$today = date('Y-m-d H:i:s');
echo 'Username: '.$input1.'<br>';
echo 'Password: '.str_repeat('*', strlen($input2))."<br>";
echo 'Fullname: '.$input3."<br>";
echo 'Mob. No.: '.$input4."<br>";
echo 'Gender: '.$input5."<br>";
echo 'Dob: '.$input7."<br>";

$query1 = "SELECT * FROM registrations WHERE username='".$input1."'";
$dfbgtse = mysqli_query($conn, $query1);

if(mysqli_num_rows($dfbgtse) > 0){
	echo "Usermame already exists.";
}else{
	echo "Not found";
	$query = "INSERT INTO registrations(username, password, full_name, phone_no, gender, marital_status, dob, reg_date) values('".$input1."','".$input2."','".$input3."','".$input4."','".$input5."','".$input6."','".$input7."','".$today."')";
	$result = mysqli_query($conn, $query);

	$to = "vinoo160496@gmail.com";
	$subject = "New Enquiry";
	$msg = '';
	$msg .= 'Hello Admin,' . "\r\n";
	$msg .= 'New User Enquiry. Here are the details.' . "\r\n";
	$msg .= 'Name ' . $input3 . "\r\n";
	$msg .= 'Username ' . $input1 . "\r\n";
	$msg .= 'Password ' . $input2 . "\r\n";
	$msg .= 'Phone No ' . $input4 . "\r\n";
	$msg .= 'Marital Status ' . $input6 . "\r\n";
	$msg .= 'Date of Birth ' . $input7 . "\r\n";
	$msg .= 'Gender ' . $input5 . "\r\n\r\n";
	$msg .= 'Thank you.' . "\r\n";

	$headers = '';
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'From: '.$input3.'<'. $input1 .'>' . "\r\n" . 'Reply-To: '. $input1;

	if (mail($to, $subject, $msg, $headers)) {
	echo("<p>Email successfully sent!</p>");
	}else {
	echo("<p>Email delivery failed…</p>");
	}
}


?>