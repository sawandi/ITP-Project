
<?php
session_start();
require_once('config.php');
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];	
	$hashed = hash('sha512',$password);
	$chk = mysqli_query($conn, "Select * from userlogindetails where Username='$username' && Password='$hashed'");
	$nchk = mysqli_num_rows($chk);
	$fld = mysqli_fetch_array($chk);
	$userid = $fld['UserId'];

	if($nchk==1){
		$_SESSION['userid']=$userid;
		header("Location: Admin/AdminHome.php");
	} else {
		echo "<script>alert('Invalid Username or Password');</script>";
	}
}
?>

<html>
<head>
<title>Login</title>

<link rel="stylesheet" type="text/css" href="styles/style3X.css">
<script src="Js/Login3.js"></script>
<style>
		body
		{
			background:url(images/image3.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
		}
	</style>
	
</head>
<body>
	<div class="login-box">
	
	<h1><b>Login</b></h1>
	<form method="post">
	<!--<p>UserType</p>
	<input type ="text" name="usertype" placeholder="Enter User Type" required/>-->
	<p>UserName</p>
	<input type="text" name="username" placeholder="Enter User Name" pattern="\w+" name="username" required/>
	<p>Password</p>
	<input type="password" name="password" placeholder="Enter Password"  required/>
	<input type="submit" name="submit" value="Login">
	

	</form>
	</div>
	
</body>
</html>
