<?php
	session_start();
	if(isset($_SESSION['email'])){

    	header('location:home.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- Custom css for Admin login -->
<link rel="stylesheet" type="text/css" href="Styles/Admin.css">
</head>
<body>
	<div class="container">
		<form action="Admin_login.php" method="post">
			<center><h1>Admin Login</h1></center>
  		<div class="form-group">
   		 <label for="email">Email address:</label>
   	 <input type="email" class="form-control" placeholder="Enter email" name="email" id="email">
  		</div>
 	 <div class="form-group">
    	<label for="pwd">Password:</label>
    	<input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd">
  		</div>
  		<div class="form-group form-check">
  		</div>
  		<input type="submit" name="submit" class="btn btn-primary" value="Login">
		</form>
		</div>

</body>
</html>

<?php
	include('db/connection.php');
	if (isset($_POST['submit'])) {
		 $email=$_POST['email'];
		 $password=$_POST['password'];

		 	$query=mysqli_query($conn,"select * from admin_login where email='$email' AND password='$password' ");
		 	if ($query) {
		 		if (mysqli_num_rows($query)>0) {

		 			$_SESSION['email']=$email;
		 			header('location:home.php');
		 			
		 		}
		 		else{
		 			echo "<script> alert('Invalid Credentials')</script>";
		 		}
		 		
		 	}
	}	
?>