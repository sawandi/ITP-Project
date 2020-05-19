
<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Delete Pet Owners</title>
	
	<style>
		body
		{
			background:url(images/images8.jpg);
			background-size:100% 500%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel = "stylesheet" type="text/css" href = "styles/deleteOwners.css">
	
	
</head>
	<body>
	
			<a href = "view&DisablePetOwner.php"><font color = "black">View & Disable PetOwners</font></a><br>
			<a href = "searchOwners.php"><font color = "black">Delete Pet Owners</font></a>
		
			<div class = "col-md-9" id = "output">
			
			</div>
		
			<script>
			
				$(document).ready(function(){
					
					$("#output").load("viewOwnersList.php");
					
					//delete
					
					$(document).on("click",".del",function()
					{
						var del = $(this);
						var dltOwnerId =$(this).attr("data-id");
						$("#dltOId").val(dltOwnerId);
						
					
					});
				});
			
			
			</script>
			
			<br><br>
	
			<div id = "nav">
			
				<h3 >Delete Pet Owners details</h3>
			
				<form id ="deleteVaccinations"  action="" method="post">
					
					
					<input type = "text" name = "dltOId" id ="dltOId"  placeholder = "Select Owner Id to delete" required readonly></br><br>
					
					<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you sure?</b></font></br>
					
					<input type = "submit" name = "delete" value = "DELETE DETAILS">	
					
		
				</form>
				
			</div>
			
			<!--<div id = "side">
			
				<a href = "vaccinationUpdate.php">Update Vaccination Info</a></br><br>
				<a href = "vaccinate.php">Add Vaccination Info</a></br></br>
				<a href = "viewVaccinationList.php">View Vaccination Info</a></br><br>
				<a href = "searchVaccination.php">Search Vaccination Info</a></br><br>
				
			</div>-->
			
			
			
			<!--<div id = "direction">
				</br></br>
				<h2><marquee direction = "right">*****YOU CAN DELETE PET OWNERS INFO*****</marquee></h2>
				</br></br>
			</div>-->
			
			<br><br><br>
			
			<!--<div class = "col-md-9" id = "output">
			
			</div>
		
			<script>
			
				$(document).ready(function(){
					
					$("#output").load("viewOwnersList.php");
					
					//delete
					
					$(document).on("click",".del",function()
					{
						var del = $(this);
						var dltOwnerId =$(this).attr("data-id");
						$("#dltOId").val(dltOwnerId);
						
					
					});
				});
			
			
			</script>-->

	</body>

</html>	

<?php

	//php code to delete data from mysql database

	if(isset($_POST['delete']))
	{
		require_once('connection.php');
		
		$ownerId = $_POST['dltOId'];
		
		$query = "DELETE FROM petowners  where p.UserId = '$ownerId'";
		
		$result = mysqli_query($con,$query);
		
		
		if($result)
		{
			echo 'Data Deleted...!!';
		}
		else
		{
			echo 'Data Not Deleted...!!';
			/*?>
				<script type = "text/javascript">
				alert("Successfully Inserted!!!");
				window.location = "viewVaccination.php";
				</script>
			<?*/
			
		}
		
		mysqli_close($con);
	}



?>