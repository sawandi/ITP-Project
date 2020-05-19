<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>View Vaccinate Details List</title>
	
	<style>
		body
		{
			background:url(images/images8.jpg);
			background-size:cover;
			background-repeat:repeat;
			
			height: 50%; 

			  <!--Center and scale the image nicely
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;-->
				   
		}
	</style>
	
	<!--<link rel = "stylesheet" type="text/css" href = "styles/petowreg.css">-->
	
</head>

	<body>
	
		<h1 align = "center">Vaccination Info</h1>
			
		<table border = "1" align = "center">

			<tr>
			
				<th>Vaccinate ID</th>
				<th>Pet ID</th>
				<th>Last Vaccine ID</th>
				<th>Last Vaccinate Date</th>
				<th>Next Vaccine ID</th>
				<th>Next Vaccinate Date</th>
				<th>Next Vaccine Charge</th>
				<th>Next Vaccination Time</th>
				
			</tr>
			
			<?php 
				
				require_once('connection.php');
				
				
				$sql = "SELECT * from systamaticvaccinatedetails";
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)>0){
					
					while($row = mysqli_fetch_assoc($result))
					{
						
						echo "<tr>
						
							<td>".$row["VaccinateId"]."</td>
							<td>".$row["PetId"]."</td>
							<td>".$row["LastVaccineId"]."</td>
							<td>".$row["LastVaccinateDate"]."</td>
							<td>".$row["NextVaccineId"]."</td>
							<td>".$row["NextVaccinateDate"]."</td>
							<td>".$row["NextVaccineCharge"]."</td>
							<td>".$row["NextVaccinationTime"]."</td>
							
												</tr>";
						
						
					}
					
					echo "</table>";
			
				}
				else
				{
					echo "0 result";
				}
				
				mysqli_close($con);
			?>

		</table>
		
				<a href = "vaccinate.php">Add Vaccination Info</a></br><br>
				<a href = "deleteVaccination.php">Delete Vaccination Info</a></br></br>
				<a href = "vaccinationUpdate.php">Update Vaccination Info</a></br></br>
				<a href = "searchVaccination.php">Search Vaccination Info</a></br><br>

	
	
	</body>

</html>