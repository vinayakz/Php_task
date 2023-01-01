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

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h2>User Panel</h2>
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
					<h3>product</h3>
					</div>
				         
		            <table class="table table-border table-hover">
			            <thead>
			              <tr>
			                <th>id</th>
			                <th>Product name</th>
			                <th>product Price</th>
			                <!-- <th>Select Product</th> -->
			              </tr>
			            </thead>
		       
						<?php
							$myproducts = array();
							$gn_query = "SELECT myproducts FROM logtask WHERE id='".$userID."'";
							$gn_task = mysqli_query($conn, $gn_query);
							$gn_task = mysqli_fetch_assoc($gn_task);
							if(!empty($gn_task['myproducts'])) {
								$myproduct = $gn_task['myproducts'];
								$myproduct = explode('|', $myproduct);
								$myproducts = $myproduct;
							}else {
								$myproducts = array();
							}

							$sql = "SELECT * FROM product";
							if($result = mysqli_query($conn, $sql)){
							if(mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_array($result)){
								$prodID = $row['id'];
								echo "<tr>";
								echo "<td>" . $row['id'] . "</td>";
								echo "<td>" . $row['product_name'] . "</td>";
								echo "<td>" . $row['product_price'] . "</td>";

								if(in_array($prodID, $myproducts)) {
									$checked = 'checked';
									$checkValue = 'gn1';
								}else {
									$checked = '';
									$checkValue = 'gn0';
								}

								echo "<td><form action='add-to-whish.php' name='form-".$prodID."' method='POST'>
											<input type='hidden' name='userID' value='".$userID."' />
											<input type='hidden' name='prodID' value='".$prodID."' />";
											?>
											<input type='checkbox' <?php echo $checked; ?> name='prod-check-<?php echo $prodID; ?>' value="<?php echo $checkValue; ?>" />
											<?php
								echo "<input type='submit' value='Add' /></form>
									  </td>";
								echo "</tr>";

							}
							echo "</table>";
							mysqli_free_result($result);
							} else{
							
							}
							} else{
							echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							} 
						?>

 							</tbody>
		            </table>
		           
		        </div> 
					<div id="menu2" class="tab-pane fade">
					<h3>VL</h3>
					<p></p>
					</div>	
	        </div>
        </div>
	</body>
</html>


