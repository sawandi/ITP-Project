<?php
	
	session_start();

	require_once('connection.php');
	
	$loginusername = $_SESSION["username"];
	
	$sql = "SELECT UserId from userlogindetails where Username = '$loginusername'";
	$result = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_assoc($result);
	

?>


<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Update Login Details</title>
	
	<style>
		body
		{
			background:url(images/hdd.jpg);
			background-size:cover;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/updOwnerLogin.css">
	
</head>
	<body>
	
		<div id = "first">
		
			
			
		
		</div>
		
		<div id = "nav">
		
			<h3 >Update Login Info</h3>
		
			<form id ="editLoginForm"  action="" method="post">
			
				<!--<input type="password" name="IdNo" id ="id" placeholder = "Owner Id To Update" value = "<?php echo $row['UserId']?>" required readonly><br>-->
				
				<input type="text" name="uname" id ="uname" placeholder = "Current Username" value = "<?php echo $loginusername?>" required readonly><br>
				
				<input type="text" name="newusername" id="unid" placeholder = "Enter New User Name" required></br>

				<input type="password" name="newpw" id ="pwid" placeholder = "Enter New Password" required></br>
							
				<input type="password" name="pw" id ="pwid" placeholder = "Re-Enter Password" required></br>
				
				<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you sure?</b></font></br></br>
							
				<input type="submit" name="update" value="UPDATE">
			
			</form>
			
		</div>
		
	</body>

</html>	


<!--php code for update data from mysql database petowners table-->
<?php

	/*require_once('connection.php');
	
	$loginusername = $_SESSION["username"];
	
	$sql = "SELECT UserId from userlogindetails where UserName = '$loginusername'";
	$result = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_assoc($result);*/

	if(isset($_POST['update']))
	{
		require_once('connection.php');
		
		$id = $_POST['IdNo'];
		$newusername = $_POST['newusername'];
		$newpw = $_POST['newpw'];
		$cnpw = $_POST['pw'];
		
		/*echo $id;
		echo $newusername;
		echo $newpw; */
		
		$hashed_new = hash('sha512',$newpw);
		$hashed_confirm = hash('sha512',$cnpw);
		
		if($hashed_new == $hashed_confirm)
		{
			$sql1 = "UPDATE userlogindetails SET Username = '$newusername', Password = '$hashed_new' , UserType = 'Pet Owner' where Username = '$loginusername'";
			mysqli_query($con,$sql1);
			
			if($result)
			{
				?>
				
					<script>
					
							alert('Data Updated...!!');
							window.location = "ownerUserAcc.php";
								
					</script>";
				<?php			
			}
			else
			{
				/*echo "<script>
					
							alert('Data Not Updated...??');
						
					</script>";*/
				?>	
					
					<div id = "alert" class="alert alert-warning" role="alert">
						<strong>Warning!</strong> Data Not Updated...??
					</div>
				<?php
			}
			
		}
		else
		{
			
			//echo "These 2 paswords are not equal,Please re-enter??";
			?>
			
				<div id = "alert" class="alert alert-warning" role="alert">
					<strong>Warning!</strong> These 2 paswords are not equal,Please re-enter??
				</div>
			
			<?php
		}
		
		/*if($result)
		{
			echo "<script>
				
						alert('Data Updated...!!');
					
				</script>";
							
		}
		else
		{
			echo "<script>
				
						alert('Data Not Updated...??');
					
				</script>";
		}
		
		mysqli_close($con);*/
	}


?>