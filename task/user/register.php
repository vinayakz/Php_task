<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- <script src="js/reg.js"></script> -->

	</head>
	<body>
		
			<div class="container">
				<form id="reg" action="" method="POST">
					<h2>Register Form</h2>
					<label>UserName:</label>
					<input type="text" id="uname" name="Username" placeholder="UserName" required><br/><br/>
					<label>PassWord:</label>
					<input type="password" id="psswd" name="Password" placeholder="************" required><br/><br/>
					<label>Email ID:</label>
					<input type="text" id="mail" name="Email" placeholder="Email ID" required><br/><br/>
					<label>Full name:</label>
					<input type="text" id="fname" name="Fullname" placeholder="Full name" required><br/><br/>
					<label>Mobile:</label>
					<input type="text" id="mobnum" name="Mobile" placeholder="Mobile number" required><br/><br/>
					<input type="submit" id="submit" name="register" value="send" />
				</form>
			</div>
	</body>
</html>

<script type="text/javascript">

    $("#submit").click(function() {
                var uname=$("#uname").val();
                var psswd=$("#psswd").val();
                var mail=$("#mail").val();
                var fname=$("#fname").val();
                var mobnum=$("#mobnum").val();
                var dataString =  'Username=' + uname+'&Password=' + psswd+'&Email=' + mail+'&Fullname=' + fname+'&Mobile=' + mobnum;
                if (uname==''||psswd==''||mail==''||fname==''||mobnum=='') {
                    alert("plz fill all fieldss")
                }else{

                $.ajax({
                    type: "POST",
                    url: "form.php",
                    data: dataString,
                    //dataType: "dataString",
                    success: function(result) {
                       alert("value r inserted");
                       location.reload(true);
                       header("Location: index.php");
                    }
                });
                }
                return false;

            });

</script>



	