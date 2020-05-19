<!--?php
	require_once('connection.php');
	
	$sql = "SELECT vaccinateId FROM systamaticvaccinatedetails";
	$resultIds = mysqli_query($con,$sql);
	
	/*while($rows = mysqli_fetch_assoc($resultIds)){
		echo $rows['vaccinateId'];
	}*/
					
?>	-->			
	
<?php

	//php code to search data in mysql database and set it in input text
	
	
	if(isset($_POST['search']))
	{
		require_once('connection.php');
		
		$vaccinateId = $_POST['VaccinateId'];
		
		
		$query = "SELECT PetId, LastVaccineId, LastVaccinateDate, NextVaccineId, NextVaccinateDate, NextVaccineCharge, NextVaccinationTime FROM systamaticvaccinatedetails WHERE VaccinateId = '$vaccinateId' ";
		$result = mysqli_query($con,$query);
		
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_array($result))
			{
				$petId = $row['PetId'];
				$lstvId = $row['LastVaccineId'];
				$lstvaccinateDate = $row['LastVaccinateDate']; 
				$nxtvId = $row['NextVaccineId'];
				$nxtvaccinateDate = $row['NextVaccinateDate'];
				$nxtvchrg = $row['NextVaccineCharge'];
				$nxtvtime = $row['NextVaccinationTime'];
			}
		}
		else
		{
			echo "Undifined Vaccinate Id...???";
			
			$petId = "";
			$lstvId = "";
			$lstvaccinateDate   = ""; 
			$nxtvId = "";
			$nxtvaccinateDate = "";
			$nxtvchrg = "";
			$nxtvtime = "";
		}
		
		
		mysqli_free_result($result);
		mysqli_close($con);
	}
	else
	{
		$petId = "";
		$lstvId = "";
		$lstvaccinateDate   = ""; 
		$nxtvId = "";
		$nxtvaccinateDate = "";
		$nxtvchrg = "";
		$nxtvtime = "";
	
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Vaccination Info</title>
	
	
	<style>
		body
		{
			background:url(images/Cute-Dog-And.jpg);
			background-size:100%;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/searchvaccinate.css">
	
	
</head>

	<body>
	
			<span><h4><font color = "white"><a href = "../Home/MainHomePetOwner.php">Home<a></font><h4></span>
		
			<form action="searchVaccination.php" method="post">
			
				<div id="nav">
					
					<h3>Search Vaccination Info</h3>
					
					<!--?php
						require_once('connection.php');
	
						$sql = "SELECT vaccinateId FROM systamaticvaccinatedetails";
						$resultIds = mysqli_query($con,$sql);
					
					?>-->
		
					<!--<select name = "vaccinateIds">
					?php
						while($rows = mysqli_fetch_assoc($resultIds))
						{
							$vaccinateId = $rows['vaccinateId'];
							echo "<option value = 'vaccinateId'>$vaccinateId</option>";
						}
					
					?>
					</select><br>-->
					
					<lable for="vaccinateId"><b><font size = "4px">Vaccinate Id To Search</font></b></lable><br>
					<input type="text" name="VaccinateId" required><br>
					
					<input type="submit" name="search" value="SEARCH"><br>
					
					<lable for="petId"><b><font size = "4px">PetId</font></b></lable><br>
					<input type="text" name="petId" value = "<?php echo $petId?>" readonly><br>
					
					<lable for="lstvname"><b><font size = "4px">Last Vaccine Id</font></b></lable><br>
					<input type="text" name="lstvid" value = "<?php echo $lstvId?>" readonly><br>
				
					
					<lable for="lstvaccinatedate"><b><font size = "4px">Last Vaccinate Date</font></b></lable><br>
					<input type="date" name="lstvaccinatedate" value = "<?php echo $lstvaccinateDate?>" readonly></br>
				
				
					<lable for="nxtvaccineId"><b><font size = "4px">Next Vaccine Id</font></b></lable><br>
					<input type="text" name="nxtvaccineId" value = "<?php echo $nxtvId?>" readonly></br>

					
					<lable for="nxtvaccinatedate"><b><font size = "4px">Next Vaccinate Date</font></b></lable><br>
					<input type="date" name="nxtvaccinatedate" value = "<?php echo $nxtvaccinateDate?>" readonly ></br>
				
					
					<lable for="nxtvaccinechrg"><b><font size = "4px">Next Vaccine Charge</font></b></lable><br>
					<input type="text" name="nxtvaccinechrg" value = "<?php echo $nxtvchrg?>" readonly></br>

					
					<lable for="nxtvtime"><b><font size = "4px">Next Vaccination Time</font></b></lable><br>
					<input type="time" name="nxtvtime" value = "<?php echo $nxtvtime?>" readonly></br>
					
					
					<!--<input type="submit" name="search" value="SEARCH">-->
					

				</div>
				
				

			</form>
			
		</body>
		
</html>	