<?php
/*
Template Name: mytest
*/
?>

<!DOCTYPE html>
<html>
	<head>
		<title>task</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <link href="css/hover.css" rel="stylesheet" media="all">
	</head>
	<body>
	<form action="http://bigguysfashion.magnoinfotech.com/mytest1/" method="POST">
		<div class="container">
		<div class="jumbotron">
				Username:<input type="email" name="username" value="" required><br/><br/>
				Password:<input type="password" name="password" value="" required><br/><br>
				Fullname:<input type="text" name="Fullname" value="" required><br/><br>
				Phone_no:<input type="tel" name="Number" value="" required><br/><br>
				<div class="Gender" >
					Gender :<input type="radio" name="Gender" id="male" value="male">
					<label for="male">Male</label> 
					<input type="radio" name="Gender" id="female" value="female" required><label for="female">Female</label> <br/><br>
				</div>
				<div>
					<label>Marital Status</label>
					<select name="mstatus" required >
					    <option value="">select </option>
					    <option value="single">Single</option>
					    <option value="married">Married</option>
				    </select>
				 </div>
				 <br/>DOB<input type="date" name="bday"  required><br/> <br/>

				 <input type="submit" name="send" value="Send Message">
				 </div>

		 </div>
	</form>
	</body>
</html>