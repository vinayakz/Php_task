<?php
	session_start();
	include 'mysqlconnect.php';

	if(isset($_SESSION['mylogin'])) {
		$adminID = $_SESSION['mylogin'];
		$query1 = "SELECT * FROM admin WHERE id='".$adminID."'";
		$task = mysqli_query($conn, $query1);
		$adminInfo = mysqli_fetch_row($task);

		echo "Welcome, ".$adminInfo[1];
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
    
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h2>Admin Panel</h2>
			<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
			<li><a data-toggle="tab" href="#product">Menu 1</a></li>
			<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
			<li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
			</ul>

		</div>
		<div class="container" > 
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<h3>home</h3>
					<p></p>
				</div>
				
				<div id="product" class="tab-pane fade">
					<div>
						<h3>Product</h3>
						<a href="add.html">Add New Product</a>
					</div>

					<table class="table table-border table-hover">
						<thead>
							<tr>
							<th>id</th>
							<th>Product name</th>
							<th>product Price</th>
							<th>Update</th>
							<th>Select</th>
							</tr>
						</thead>

						<?php
							$sql = "SELECT * FROM product";
							if($result = mysqli_query($conn, $sql)){
							if(mysqli_num_rows($result) > 0){
							/*echo "<table>";
							echo "<tr>";
							echo "<th>id</th>";
							echo "<th>Product name</th>";
							echo "<th>Product Price</th>";
							echo "<th>Edit</th>";
							echo "<th>Delete</th>";
							echo "</tr>";*/
							while($row = mysqli_fetch_array($result)){
							echo "<tr>";
							echo "<td>" . $row['id'] . "</td>";
							echo "<td>" . $row['product_name'] . "</td>";
							echo "<td>" . $row['product_price'] . "</td>";
							echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
							/*echo "<td><a href=\"add.html\">Add New Data</a></td>";*/
							echo "<td><input type='checkbox' onclick=''></td>";
							echo "</tr>";
							}
							echo "</table>";
							// Free result set
							mysqli_free_result($result);
							} else{
							}
							} else{
							echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							} 
						?>
						<!-- <tr>
						<td><a href="add.html">Add New Data</a></td>
						</tr>-->	
						</tbody>
					</table>
				</div>
		         <div id="menu2" class="tab-pane fade">
						<h3>User Selected products </h3>
						<table class="table table-border table-hover">
				            <thead>
				              <tr>
				                <th>ProId</th>
				                <th>UserName</th>
				              </tr>
				            </thead>
				            <?php
							$vl_sql = "SELECT myproducts, fullname FROM logtask";
							if($vl = mysqli_query($conn, $vl_sql)){
							if(mysqli_num_rows($vl) > 0){
								while($row = mysqli_fetch_array($vl)){
							echo "<tr>";
							echo "<td>" . $row['myproducts'] . "</td>";
							echo "<td>" . $row['fullname'] . "</td>";
							echo "</tr>";
							}
							echo "</table>";
							mysqli_free_result($vl);
							} else{
							}
							} else{
							echo "ERROR: Could not able to execute $vl_sql. " . mysqli_error($conn);
							} 
						?>
				        </table>    
				</div>
	        </div>
        </div>
	</body>
</html>

