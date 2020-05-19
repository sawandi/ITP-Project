<?php

	//php code to delete data from mysql database

	if(isset($_POST['delete']))
	{
		require_once('connection.php');
		
		$vaccinateId = $_POST['dltVId'];
		
		$query = "DELETE FROM systamaticvaccinatedetails where VaccinateId = '$vaccinateId'";
		
		$result = mysqli_query($con,$query);
		
		
		if($result)
		{
			echo 'Data Deleted...!!';
		}
		else
		{
			echo 'Data Not Deleted...!!';
		}
		
		mysqli_close($con);
	}



?>



<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Delete Vaccinations</title>
	
	<style>
		body
		{
			background:url(images/images8.jpg);
			background-size:cover;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel = "stylesheet" type="text/css" href = "styles/deleteVaccination.css">
	<link rel = "stylesheet" type="text/css" href = "styles/main.css">
	
</head>
	<body>
	
			<div id = "side">
			
				<a href = "vaccinationUpdate.php">Update Vaccination Info</a></br><br>
				<a href = "vaccinate.php">Add Vaccination Info</a></br></br>
				<a href = "viewVaccination.php">View Vaccination Info</a></br><br>
				<a href = "searchVaccination.php">Search Vaccination Info</a></br><br>
				
			</div>
	
			<div class = "col-md-9" id = "output">
			
			</div>
		
			<script>
			
				$(document).ready(function(){
					
					$("#output").load("viewVaccinationListDelete.php");
					
					//delete
					
					$(document).on("click",".del",function()
					{
						var del = $(this);
						var dltVaccinateId =$(this).attr("data-id");
						$("#dltVId").val(dltVaccinateId);
						
					
					});
				});
			
			
			</script>
			
			<br><br>
	
			<div id = "nav">
			
				<h3 >Delete Vaccination details</h3>
			
				<form id ="deleteVaccinations"  action="deleteVaccination.php" method="post">
					
					<lable for = "deleteV">Vaccinate ID To Delete</lable><br><br>
					<input type = "text" name = "dltVId" id ="dltVId"  placeholder="Select Vaccinate Id" required readonly></br><br>
					
					<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you sure?</b></font></br>
					
					<input type = "submit" name = "delete" value = "DELETE DETAILS">	
					
		
				</form>
				
			</div>
			
			<!--<div id = "direction">
				</br></br>
				<h2><marquee direction = "right">*****YOU CAN DELETE VACCINATION INFO*****</marquee></h2>
				</br></br>
			</div>-->
			

	</body>

</html>	