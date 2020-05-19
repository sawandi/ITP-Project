<?php

	session_start();
	//echo "Hello";
	//echo " ";
	//echo $_SESSION["username"]; 
	
	$loginUsername = $_SESSION["username"]; 
	
	//echo $loginUsername;
	
	require_once('connection.php');
	
	$sql = "SELECT * from petowners p, userlogindetails u where u.Username = '$loginUsername' and u.UserId = p.UserId";
	$result = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	$userId  = $row['UserId'];
	$db_fname = $row['Fname'];
	$db_lname = $row['Lname'];
	$db_nic = $row['NIC'];
	$db_email = $row['Email'];
	$db_phone = $row['Phone'];
	$db_uname = $row['Username'];
	$db_pw = $row['Password'];
	$db_status = $row['Status'];
	




?>


<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Update Profile</title>
	
	<style>
		body
		{
			background:url(images/hdd.jpg);
			background-size:cover;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/updateProfile.css">
	
</head>
	<body>
	
		<div id = "first">
		
			
		
		</div>
	
		<form id ="updateForm"  action="editProf.php" method="post">
		
			<div id = "nav">
			
					<h3 >Update Profile Info</h3>
			
					
					<!--<input type="password" name="IdNo" id ="id" placeholder = "Owner Id To Update" value = "<?php echo $userId?>" readonly required><br>-->

					<input type="text" name="newfirstname" id ="newfnameid" placeholder = "Enter New First Name" value = "<?php echo $db_fname?>" required><br>
				
					<input type="text" name="newlastname" id="newlnameid" placeholder = "Enter New Last Name" value = "<?php echo $db_lname?>" required></br>
				
					<input type="text" name="newNIC" id = "newnicid" placeholder = "Enter New NIC" value = "<?php echo $db_nic?>" required></br>
				
					<input type="email" name="newemail" id="newemailid" placeholder = "Enter New Email" value = "<?php echo $db_email?>" required></br>

					<input type="text" name="newphoneno" id = "pnoid" placeholder = "Enter New Phone Number" value = "<?php echo $db_phone?>" maxlength = "10" required></br>
				
					<!--<input type="text" name="newusername" id="unid" placeholder = "Enter New User Name" value = "<?php echo $db_uname?>" required></br>

					<input type="password" name="newpw" id ="pwid" placeholder = "Enter New Password" value = "<?php echo $db_pw?>" maxlength = "15" required></br>
					
					<input type="password" name="pw" id ="pwid" placeholder = "Re-Enter Password"  maxlength = "15" required></br>-->
					
					<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you sure?</b></font></br></br>
					
					<input type="submit" name="update" value="UPDATE">
							
			</div>
		</form>
		
	</body>
</html>	


<!--php code for update data from mysql database petowners table-->
<?php

	
	
		if(isset($_POST['update']))
		{
			require_once('connection.php');
			
			//$id = $_POST['IdNo'];
			$newfname = $_POST['newfirstname'];
			$newlname = $_POST['newlastname'];
			$newNIC = $_POST['newNIC'];
			$newemail = $_POST['newemail'];
			$newphno = $_POST['newphoneno'];
			//$newusername = $_POST['newusername'];
			//$newpw = $_POST['newpw'];
			
			/*echo $id;
			echo $newfname;
			echo $newlname;
			echo $newNIC;
			echo $newemail;
			echo $newphno ;
			echo $newname;
			echo $newpw; */
			
			echo 
			
			
			
			$hashed = hash('sha512',$newpw);

			$query = "Update petowners SET Fname = '$newfname',Lname = '$newlname', NIC = '$newNIC', Email = '$newemail', Phone = '$newphno' where UserId = '$userId' ";
			$result = mysqli_query($con,$query);
		
			/*$sql1 = "UPDATE userlogindetails SET Username = '$newusername', Password = '$hashed' , UserType = 'Pet Owner' where UserId = '$id' ";
			mysqli_query($con,$sql1);*/
			
			if($result)
			{
				?>
					<script type = "text/javascript">
					
							alert('Data Updated...!!');
							window.location = "ownerUserAcc.php";
							
					</script>;
				<?php
								
			}
			else
			{
				?>
					<!--<script type = "text/javascript">
						
								alert('Data Not Updated...??');
								
					</script>;-->
					
					<div id = "alert" class="alert alert-warning" role="alert">
						<strong>Warning!</strong> Data Not Updated...??
					</div>
				<?php	
			}
			
			mysqli_close($con);
		}
	//}
	/*else
	{
		?>
			<script type = "text/javascript">
					
				alert('Sorry you are not a activate user now?? ');
							
			</script>;
		<?php
	}
	mysqli_close($con);*/
?>