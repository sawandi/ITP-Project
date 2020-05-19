<form method = "post">
<input type = 'submit' name = 'logout' value = "Logout"/>
</form>
<?php

	session_start();
	echo "Hello".$_SESSION["username"];
	
	if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location:userLogin.php");
	}

?>



<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>PET CARE Receptionist</title>
	
	<style>
		body
		{
			background:url(images/bunch.jpg);
			background-size:cover;
			background-repeat:repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/userDisplay.css">
	
</head>
	<body>
		
		
	
		
		<!--<a href = "ownerReg.php">Sign-up</a><br>
		<a href = "userLogin.php">Sign-in</a><br>
		<a href = "ownerUserAcc.php">View Profile</a><br>
		<a href = "editProf.php">Edit Owner Profile</a><br>
		<a href = "updateOwnerLogin.php">Edit Login Details</a><br>
		<a href = "deleteOwners.php">Delete owner details</a><br>
		<a href = "searchOwner.php">Search Owners</a><br>
		<a href = "view&DisablePetOwner.php">View and Disable Pet Owners</a><br>
		<a href = "viewOwnersList.php">View Owners List</a><br>
		
		<a href = "forgetLogin.php">Forget Login</a><br>
		
		<a href = "viewPets.php">View Login User Pets</a><br>
		<a href = "petProf.php">View Pet Profile</a><br>
		
		<a href = "vaccinate.php">Add Vaccination</a><br>
		<a href = "searchVaccination.php">Search Next Vaccination</a><br>
		<a href = "vaccinationUpdate.php">Update Vaccination Info</a><br>
		<a href = "deleteVaccination.php">Delete Vaccination Info</a><br>
		<a href = "viewVaccinateHistory.php">View Vaccination History</a><br>
		<a href = "viewVaccinationList.php">View Vaccination List</a><br>-->
				
	
	</body>
</html>