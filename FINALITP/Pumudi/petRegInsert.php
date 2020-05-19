<?php



   require_once('connection.php');
	
	$petname = $_POST['petname'];
	$breed = $_POST['breed'];
	$colour = $_POST['colour'];
    $age = $_POST['age'];
    $gender=$_POST['gender'];
     $userId=$_POST['userId'];
	 $sp = $_POST['species'];

       
	
	
	
	
	
	$sql = "INSERT INTO pets(UserId,PetName,Breed,Age,Colour,Gender,Species,Status) VALUES ('$userId','$petname','$breed','$age','$colour','$gender','$sp','1')";
	mysqli_query($con,$sql);

       
//}
	
?>
	

	<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Pet Registration</title>
	
	<style>
		body
		{
			background:url(images/bunch.jpg);
			background-size:cover;
			background-repeat:repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/displayUserDetails.css">
	
</head>
	<body>
	
		<form id ="regForm"  action="" method="post">
		
			

			<div id ="nav">
			
				<h3>Pet Registration</h3>

				<lable for="petname"><b><?php echo $petname?><?php echo " "?>
				<br><br>
			
	
				<lable for="breed"><b><?php echo $breed?></b></lable>
				
			
				<br><br>
				<lable for="colour"><b><?php echo $colour?></b></lable>
                                <br><br>
                                <lable for="gender"><b><?php echo $gender?></b></lable>
                                <br><br>
				<lable for="species"><b><?php echo $sp?></b></lable>
                                <br><br>
                                
				
				
				<?php
				
					echo "<script>
				
						alert('Your details saved successfully');
					
						</script>";
							
				?>
					
			
				
				<!--<button id="btnpetprof" href = userprofile.php>User Profile</button>
                                <button id="btncancel" href = ownerReg.php>Back</button>-->

			</div>

		</form>
		
	</body>
	
</html>