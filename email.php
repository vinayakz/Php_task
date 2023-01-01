<?php
$con =mysqli_connect("localhost", "root", "password", "dbname");
if(!$con){
die('Could not connect database: '.mysqli_connect($con));
}
$vinoo_email = "vinoo160496@gmail.com";


$resutl = mysql_query($con,"SELECT * FROM registrations WHERE username ='".$input1."' ")or die(mysql_connect($con));
$reg = array();
while ($row = mysqli_fetch_array($resutl, MYSQL_ASSO))/*Fetch associative array.*/ {

			$reg[]= array(
			"username"=>$row['username'],
			"password"=>$row['password'],
			"full_name"=>$row['Fullname'],
			"phone_no"=>$row['Number'],
			"gender"=>$row['Gender'],
			"marital_status"=>$row['mstatus'],
			"dob"=>$row['bday'],
			);
}
$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
$headers .= 'From: '.$vinoo_email.''."\n";

$subject = 'MIME-Version: 1.0' . "\n";
$vinoo = $vinoo_email;
$connect = implode("\n", $reg);/*join elements of an array with a string*/
$mail($vinoo_email, $subject, $connect, $headers);
?>