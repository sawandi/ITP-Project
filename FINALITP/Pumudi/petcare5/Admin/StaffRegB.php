<?php
session_start();
require_once('config.php');
if(isset($_POST['signup'])){
	$username = $_POST['username'];
	
	
	$chk = mysqli_query($conn, "Select * from userlogindetails where Username='$username'");
	$nchk = mysqli_num_rows($chk);
	//$fld = mysqli_fetch_array($chk);
	//$userid = $fld['UserId'];

	if($nchk>=0){
		//$_SESSION['userid']=$userid;
		//header("Location: Admin/AdminHome.php");
		echo "<script>alert('UserName allready exit');</script>";
	} else {
		//echo "<script>alert('AAAA');window.location.href='MainHome.php';</script>";
		echo "<script>alert('Details save Successfully');window.location.href='MainHome.php';</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Staff Registration</title>
	
	<style>
		body
		{
			background:url(images/image8.jpg);
			background-size:100% 155%;
			background-repeat:no-repeat;
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/pwregisXY1.css">
	
</head>
	<body>
	
		<form id ="regForm" onsubmit = "return Validate()" action="StaffRegInsertY.php" method="post">
		
			

			<div id ="nav">
			
				<center><h3><font color="white">Staff Registration</center></font></h3>
				<!--<li><a href="Delete.php">Delete product item</a></li><br>-->
			
				
				<div class="horizontal-group">
				<div class="form-group left">
				<input type="text" name="firstname" id ="fnameid"   placeholder = "First Name" required>
				</div>
				<div class="form-group rigth">
				<input type="text" name="lastname" id="lnameid"   placeholder = "Last Name" required>
				</div>
				</div>
				
			<div class="horizontal-group">
			<div class="form-group left">
			<!--<label><font size="4em",font color="white",width="100px">UserType</font></label>-->
		
			<select name="usertype" id='state'>
			<!--<center><font size="4em"><b>UserType</b></font></center>-->
			
			<option>UserType</option>
			<option>Admin</option>
			<option>Receptionist</option>
			</select>
			</div>
			</div>
				<br>
				<div class="horizontal-group">
    <div class="form-group left">
      <center><label class="label-title"><font size="4em",font color="white">Gender</font></label></center>
        <div class="input-group">
            <label for="male">
                <input type="radio" name="gender" value="male" id="male"><font size="4em",font color="white">Male</font></label>
            <label for="female">
                <input type="radio" name="gender" value="female" id="female"><font size="4em",font color="white">Female</font></label>
        </div>
	</div>
	</div>
			<br>	
				<div class="horizontal-group">
				<div class="form-group left">
				<input type="text" name="NIC" id = "nicid" placeholder = "NIC NO" required>
				</div>
				
				<div class="form-group rigth">
				<input type="email" name="email" id="emailid" placeholder = "E-mail Address" required>
				</div>
				</div>
				
				<div class="horizontal-group">
				<div class="form-group left">
				<input type="text" name="phoneno" id = "pnoid"  placeholder = "Phone Number" required>
				</div>
				
				<div class="form-group rigth">
				<input type="text" name="qualification"  id="qualid" placeholder = "Qualification" required>
				</div>
				</div>

				<div class="horizontal-group">
				<div class="form-group left">
				<input type="text" name="username" id="unid" placeholder = "UserName" required>
				</div>

				<div class="form-group rigth">
				<input type="password" name="pw" id ="pwid" placeholder = "Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 	 required>
				</div>
				
				<div class="horizontal-group">
				<div class="form-group left">
				<input type="password" name="confirmpw" id="cpwid" placeholder = "ConfirmPassword" required><br>
				</div>
				</div>
				<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("pwid").value;
        var confirmPassword = document.getElementById("cpwid").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
	</script>
				<br>
				<br>
				<div class="horizontal-group">
				<div class="form-group rigth">
				<input type ="checkbox" name = "chkbx" required><font size = "4px",font color="white"><b>Are you sure?</b></font>
				</div>
				</div>
				
				<div class="horizontal-group">
				<div class="form-group rigth">
				<center><input type="submit" id ="submit" name="signup" value="Submit"></center>
				</div>
				</div>
				
								

			</div>

		</form>
	
									
		
	</body>
	
	
</html>
		
	
	
	
