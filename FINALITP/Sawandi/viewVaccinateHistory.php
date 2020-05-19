<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Vaccination History</title>
	
	<style>
		body
		{
			background:url(images/puppy.jpg);
			background-size:100% 700%;
			background-repeat:repeat;
			
			 

			  <!--Center and scale the image nicely
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;-->
				   
		}
	</style>
	
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!--for view and download button-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->

	<link rel = "stylesheet" type="text/css" href = "styles/petVaccinateHistory.css">
	
</head>

	<body>
	
		<div id = "side">
			
			<span><h4><a href = "../Home/MainHomePetOwner.php">Home<a><h4></span>
			<!--<span><h4><font color = "white"><a href = "searchVaccination.php">Search Vaccination Info</a></font><h4><span></br>-->
		</div>
		
		<!--for pet details-->
		<div class = "col-md-9" id = "output">
			
		</div>
	
		<script>
			
				$(document).ready(function(){
					
					$("#output").load("viewPets.php");
					
					//delete
					
					$(document).on("click",".search",function()
					{
						var search = $(this);
						var searchPetId =$(this).attr("data-id");
						$("#pid").val(searchPetId);
						
					
					});
				});
			
			
		</script>
		
		<div id = "nav">
		
			<h3>Vaccination History Of Your Pet</h3>
			
			<form action = "viewVaccinateHistory.php" method = "post">
			
				<input type = "text" name = "petId" id = "pid" placeholder = "Select Pet Id" required readonly><br><br>
				
				<input type = "submit" name = "view" id = "view" value = "View Details" required ><br><br>
			
			</form>
		
		</div>

		<br><br>
		
		<div id = "direction">
		
			<!--</br>
			<h2><marquee direction = "right">*****YOU CAN SEE VACCINATION HISTORY OF YOUR PETS*****</marquee></h2>
			</br>-->
			
		</div>
		
		<!--for vaccination history of above pets-->
		<div id = "sidnav">
				
			<table border = "1">

				<tr>
					<th>Pet Name</th>
					<th>Vaccinate Date</th>
					<th>Vaccine Name</th>
					
				</tr>
			
			
				<?php 
				
					
						if(isset($_POST['view']))
						{
							require_once('connection.php');
							
							$petId = $_POST['petId'];
							
							//get vaccination history details
							$sql = "SELECT sv.LastVaccinateDate, v.VaccineName from systamaticvaccinatedetails sv, vaccines v where sv.PetId = '$petId' and sv.LastVaccineId = v.VaccineId";
							$result = mysqli_query($con,$sql);
							
							//get relavant pet name
							$query = "SELECT PetName from pets where PetId ='$petId'";
							$res = mysqli_query($con,$query);
							$rows = mysqli_fetch_assoc($res);
							//$petname = $rows["PetName"];
							
							//echo $rows['PetName'];
							
							$reportTableHeader="<table border = '1'>
											<tr>
												<th>Pet Name</th>
												<th>Vaccinate Date</th>
												<th>Vaccine Name</th>
		
											</tr>";
										$report = "";
							$reportTableFooter = "</table>";
							
							if(mysqli_num_rows($result)>0){
								
								while($row = mysqli_fetch_assoc($result))
								{
									$report .= "<tr><td>".$rows["PetName"]."</td><td>".$row["LastVaccinateDate"]."</td><td>".$row["VaccineName"]."</td></tr>";
								}
								echo $report;
							}
							else
							{
								$report = "0 result";
								echo $report; 
							}
							
							mysqli_close($con);
						}
				?>

			</table>
			</br>
			
			<form method ="post" action = "viewReport.php">
				<input type = "hidden" name = "report" value = "<?php echo $reportTableHeader.$report.$reportTableFooter;?>">
				<input type = "submit" name = "view-report" class="btn btn-danger" value="View Report"/>
			</form>
			
			<form method ="post" action = "downloadReport.php">
				<input type = "hidden" name = "report" value = "<?php echo $reportTableHeader.$report.$reportTableFooter;?>">
				<input type = "submit" name = "download-report" class="btn btn-danger" value="Download Report"/>
			</form>
			
		</div>
		
		

	</body>

</html>

