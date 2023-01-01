<?php
//including the database connection file
include 'mysqlconnect.php';
    $input1 = $_POST['pname'];
    $input2 = $_POST['price']; 

    /*$query6 = "SELECT * FROM product WHERE product_name='".$input1."'";
    $task = mysqli_query($conn, $query6);

    if(mysqli_num_rows($task) > 0){
        echo "product already exists.";
    }else{*/
        $result1 = "INSERT INTO product(product_name,product_price) VALUES ('".$input1."','".$input2."')";
        $vl = mysqli_query($conn,$result1);
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='page.php'>View Result</a>";
    
?>