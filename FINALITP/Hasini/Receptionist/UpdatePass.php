<?php
session_start();
require_once('config.php');


/*$id = $_SESSION['userid'];
$getdata = mysqli_query($conn, "Select * from userlogindetails where UserId='$id'");
$rows = mysqli_fetch_array($getdata);
$un = $rows['UserName'];
$pw = $rows['Password'];*/
	
	$loginUsername = $_SESSION["username"]; 
	
	$getdata = mysqli_query($conn,"SELECT * from userlogindetails where Username = '$loginUsername'");
	$rows = mysqli_fetch_array($getdata);
	$pw = $rows['Password'];
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
				<input type="text" name="username" id="unid" value="<?php echo $loginUsername; ?>"  placeholder = "UserName" >
				<br>
				<lable>Password</lable>
				<input type="password" name="pw" id ="pwid" value="<?php echo $pw; ?>"  placeholder = "Password" >
				<br>
				<lable>ConfirmPassword</lable>
				<input type="password" name="confirmpw" id="cpwid"   placeholder = "ConfirmPassword"><br>
				
				<input type ="checkbox" name = "chkbx" required><font size = "4px",font color="white"><b>Are you Update details?</b></font>
					
				<input type="submit" id ="submit" name="update" value="Update Details">
				
			</div>

		</form>
		
		
	</body>
	
</html>
		
	
	
	
