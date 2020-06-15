<html>
	<script type="text/javascript">
		function check() {
    		var val = document.getElementById("checkbox").checked;
    		if (val== false)
    		{
    			alert("Accept our terms")
    			return false
    		}
    		return true 
		}
	</script>
	<style type="text/css">
		.logo{
			height: 70px;
			width: 70px;
			text-align: center;
		}


	</style>
	<head>
		<title>
			Registration Form
		</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous">
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body class="text-center" style="background-color:tomato;">
		<form  action="index.php" method="post" onsubmit="return check(this);">
			<h1> Registration Form </h1>
			<h2>Name</h2>
			<input type="text" name="name">
			<h2>Username</h2>
			<input type="text" name="username">
			<br>
			<h2>Email</h2>
			<input type="email" name="email">
			<br>
			<h2>Password</h2>
			<input type="password" name="password">
			<br>
			<h2>Telephone</h2>
			<input type="text" name="telephone">
			<br>
			<br>
			<h5> <input type="checkbox" id="checkbox">  Agree with our Terms & Conditions</h5> <br>
			<input type="submit" name="submit" value="Submit">
			<br>
			<br>
		</form>			
		<?php
		$server = "localhost";
		$username = "root";
		$password = "";
		$db = "details";
		$con = mysqli_connect($server,$username,$password,$db);

		if (!$con)
  		{
  			  die('Could not connect: ' . mysqli_error());
		}
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$username=$_POST['username'];
			$email=$_REQUEST['email'];
			$password=$_POST['password'];
			$telephone=$_POST['telephone'];
			
			$sql="INSERT INTO details (name, username, email, password, telephone) VALUES
			('$name','$username','$email','$password','$telephone')";
			if (!mysqli_query($con,$sql))
			{
			  die('Error: ' . mysqli_error($con));
			}
		}
			
		mysqli_close($con)
		?>
		</body>
</html>