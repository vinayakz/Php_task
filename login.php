<?php

include 'mysqlconnect.php';

$data = $_POST["Name"];
echo 'Name: '.$data.'<br>';

$query1 = "SELECT * FROM Test WHERE Name='".$data."'";
$dfbgtse = mysqli_query($conn, $query1);


?>