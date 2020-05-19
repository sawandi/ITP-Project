<!--<span><h4 align = "right"><font color = "white"><a href = "../Home/MainHomePetOwner.php">Home<a></font><h4></span>-->
<form method = "post">
<input type = 'submit' name = 'logout' value = "Logout"/>

</form>
<?php

	//session_start();
	//echo "Hello".$_SESSION["petname"];
	
	if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location:../Home/MainHome.php");
	}

?>




<?php
			
				
	session_start();
	//echo "Hello";
	//echo " ";
	//echo $_SESSION["petname"]; 
	
	//$petname = $_SESSION["petname"]; 
	
	//echo $loginUsername;
	
	require_once('connection.php');
	
	$sql = "SELECT * from pets where PetId='$petId'";
	$result = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	$db_petname = $row['PetName'];
	$db_breed = $row['Breed'];
	$db_colour = $row['Colour'];
	$db_age = $row['Age'];
	$db_gender = $row['Gender'];
	$db_sp = $row['Species'];
        
       
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Pet Account</title>
	
	<style>
		body
		{
			background:url(images/prof.jpg);
			background-size:cover;
			background-repeat:repeat;
				   
		}
	</style>
	
	<!--<link http://getbootstrap.com/css/#grid >-->
	
	<link rel = "stylesheet" type="text/css" href = "styles/ownerProfpge.css">
	
</head>
	<body>
		<!---->
		
		<div class = "main">
	
			<h1 class = "well" id = "well"><?php echo $row['PetName']?></h1>
		
			
			
			
			<div>
				
					
					
					
					
					<div class ="list-group col-md-6 pull-right pad">
					
						<!--<p class="list-group-item highlight">Pet Nae<span class="pull-right"><?php echo "	"?><?php echo $row['PetName']?></span></p>
						<p class="list-group-item highlight">Breed<span class="pull-right"><?php echo "	"?><?php echo $row['Breed']?></span></p>
						<p class="list-group-item highlight">Colour<span class="pull-right"><?php echo "	"?><?php echo $row['Colour']?></span></p>
						<p class="list-group-item highlight">Age<span class="pull-right"><?php echo "	"?><?php echo $row['Age']?></span></p>
						<p class="list-group-item highlight">Gender<span class="pull-right"><?php echo "	"?><?php echo $row['Gender']?></span></p>
						<p class="list-group-item highlight">Species<span class="pull-right"><?php echo "	"?><?php echo $row['Species']?></span></p>-->
		  
						</br>
					<!--<h3>Pet Details</h3>-->
					
						<div id = "det">
							<center>
								<lable for = "petname"><b>Pet Name</b></lable>
								<input type = "text" value ="<?php echo $row['PetName']?>" readonly>
								
								<br>
								<lable for = "breed"><b>Breed</b></lable>
								<input type = "text" value ="<?php echo $row['Breed']?>" readonly>
								
								<br>
								<lable for = "colour"><b>Colour</b></lable>
								<input type = "text" value ="<?php echo $row['Colour']?>" readonly>
							
								<br>
                                                                <br>
								<lable for = "age"><b>Age</b></lable>
								<input type = "text" value = "<?php echo $row['Age']?>" readonly>
								

								<br>
								<lable for = "gender"><b>Gender</b></lable>
								<input type = "text" value = "<?php echo $row['Gender']?>" readonly>
								

								<br>
								<lable for = "species"><b>Species</b></lable>
								<input type = "text" value="<?php echo $row['Species']?>" readonly>
								
							<br>
                                
				
								
							</center>
							
						</div>
					
					<br>
					<div id="navi">
		
						<button><a href = "petUpdate.php">Edit Profile</a></button>
						
						
						
						<!--<input type = "button" onclick = "petUpdate.php" value = "Edit Profile">
						<input type = "button" onclick = "updateOwnerLogin.php" value = "Edit Login Info">-->
						
						<!--<a href = "petProf.php">Pet Profile</a><br>-->
						<!--<a href = "searchVaccination.php">Search Next Vaccination</a><br>
						<a href = "viewVaccinateHistory.php">View Vaccination History</a><br>-->
					</div>
				
				</div>
			
			<div>

		</div>
	
	</body>
</html>


			