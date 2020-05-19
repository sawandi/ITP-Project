<?php			
	
	require_once('conn.php');
	
	$UserId = $_POST['UserId'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$service = $_POST['service'];
	$petage = $_POST['petage'];
	$petgender = $_POST['petgender'];
	$adate = $_POST['adate'];
	$atime = $_POST['atime'];


							
				
	
	$sql = "INSERT INTO appoinments(UserId,firstname,lastname, email, service,petage,petgender,adate,atime) VALUES ('$UserId','$firstname','$lastname','$email','$service','$petage','$petgender','$adate','$atime')";
	mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>User Registration</title>
	
	<style>
		body
		{
			background:url(images/bunch.jpg);
			background-size:cover;
			background-repeat:repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/displayuser.css">
	
</head>
	<body>
	
		<form id ="regForm" onsubmit = "return formValidation()" action="ownerRegInsert.php" method="post">
		
			

			<div id ="nav">
			
				<!--<h3>Pet Owner Registration</h3>-->

				<lable for="firstname"><b><?php echo $fname?><?php echo " "?><?php echo $lname?></b></lable>
				<br><br>
		
			
				<br><br>
				<lable for="email"><b><?php echo $email?></b></lable>
				
				<?php
				
					echo "<script>
				
						alert('Your details saved successfully');
					
						</script>";
							
				?>
					
				<p id = "pr"><b>Please register your pet here...</b></p> 
				
				<button id="btnpet" href = petRegistration.php>PET REGISTRATION</button>

			</div>

		</form>
		
	</body>
	
</html>

		
	
	
	


