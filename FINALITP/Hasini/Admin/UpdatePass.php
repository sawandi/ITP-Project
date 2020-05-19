<?php
session_start();
require_once('config.php');
echo $_SESSION["username"];

$username = $_SESSION["username"];
$pw = $_POST['pw'];

if($pw!=$_POST['confirmpw']){
	echo '<script>alert("Password and confirm password do not match");</script>';
} else {
	$upd = mysqli_query($conn,"Update userlogindetails set Password='$pw' where Username='$username'");
}


?>

<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title> Update Login Details</title>
	
	<style>
		body
		{
			background:url(images/images8.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/UpdatePass.css">
	
</head>
	<body>
	
	<form id ="regForm" onsubmit = "return formValidation()" action="" method="post">
		
				

			<div id ="nav">
			
				<h3><font color="white">Update Login Details<font/></h3>
				
				<lable>UserName</lable>
				<input type="text" name="username" id="unid" value="<?php echo $username; ?>"  placeholder = "UserName" >
				<br>
				<lable>Password</lable>
				<input type="password" name="pw" id ="pwid" value="<?php echo $pw; ?>"  placeholder = "Password" >
				<br>
				<lable>ConfirmPassword</lable>
				<input type="password" name="confirmpw" id="cpwid"   placeholder = "ConfirmPassword"><br>
				
				<!--<input type ="checkbox" name = "chkbx" required><font size = "4px",font color="white"><b>Are you Update details?</b></font>-->
					
				<input type="submit" id ="submit" name="update" value="Update Details">
				
			</div>

		</form>
		
		
	</body>
	
</html>
		
	
	
	
