
<?php

	if(isset($_POST['submit']))
	{
		require_once('connection.php');
		
		$petId = $_POST['petId'];
		$lstvId = $_POST['lstvid'];
		$lstvaccinateDate   = $_POST['lstvaccinatedate'];
		$nxtvId = $_POST['nxtvaccineId'];
		$nxtvaccinateDate = $_POST['nxtvaccinatedate'];
		//$nxtvchrg = $_POST['nxtvaccinechrg'];
		$nxtvtime = $_POST['nxtvtime'];

		
		/*echo $petId;
		//echo $lstvname;
		echo $lstvaccinateDate;
		//echo $nxtvname;
		echo $nxtvId;
		echo $nxtvaccinateDate;
		echo $nxtvchrg;
		echo $nxtvtime;*/
		
		/*$query = "SELECT po.Email from systamaticvaccinatedetails s, pets p, petowners po where s.PetId = '$petId' s.PetId = p.PetId and p.UserId = po.UserId ";
		$res=mysqli_query($con,$query);
		$rows = mysqli_fetch_array($res);
		
		echo $rows['Email'];*/
		
		//$massage = "Pet Id - echo $petId .<br>.  
		
		$sql = "SELECT Charge from vaccines where VaccineId = '$nxtvId'";
		$result = mysqli_query($con,$sql); 
		$row = mysqli_fetch_assoc($result);
		
		$sql = "INSERT INTO systamaticvaccinatedetails(PetId,LastVaccineId,LastVaccinateDate,NextVaccineId,NextVaccinateDate,NextVaccineCharge,NextVaccinationTime) VALUES ('$petId','$lstvId','$lstvaccinateDate','$nxtvId','$nxtvaccinateDate',".$row['Charge'].",'$nxtvtime')";
		mysqli_query($con,$sql);
		
		?>
			<script type = "text/javascript">
				alert("Successfully Inserted!!!");
				window.location = "viewVaccination.php";
			</script>
		<?php
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Vaccinate Details</title>
	
	
	<style>
		body
		{
			background:url(images/images8.jpg);
			background-size:100%;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/addvaccinatedetails.css">
	
	
	
</head>

	<body>
	
			<div id = "side">
				<!--<a href = "../Home/MainHomeReceptionist.php"><b>Home</b></font></a></br>-->
				<span><h3 align = "right"><a href = "../Home/MainHomeReceptionist.php">Home<a><h3></span>
				
				
				<!--<a href = "viewVaccinationList.php">View Vaccination Info</a></br>
				<a href = "deleteVaccination.php">Delete Vaccination Info</a></br>
				<a href = "vaccinationUpdate.php">Update Vaccination Info</a></br>
				<a href = "searchVaccination.php">Search Vaccination Info</a></br>-->
				
				<a href = "viewVaccination.php">View Vaccination Info</a></br><br>
				<a href = "deleteVaccination.php">Delete Vaccination Info</a></br></br>
				<a href = "vaccinationUpdate.php">Update Vaccination Info</a></br></br>
				<a href = "searchVaccination.php">Search Vaccination Info</a></br><br>
			</div>
	
		
			<form action="" method="post" autocomplete = "on">
			
				<div id="nav">
					
					<h3>Add Next Vaccinate Details</h3>
					<!--<p>Fill up the form with correct values.</p>-->
					
					<lable for="petId"><b><font size = "4px">PetId</font></b></lable><br>
					<input type="number" name="petId" id="petId" required><br>
					
					<lable for="lstvid"><b><font size = "4px">Last Vaccine Id</font></b></lable><br>
					<input type="number" name="lstvid" id = "lstvid" required autocomplete = "off"><br>
				
					<lable for="lstvaccinatedate"><b><font size = "4px">Last Vaccinate Date</font></b></lable><br>
					<input type="date" name="lstvaccinatedate" id="lstvaccinatedate" required></br>
				
					<lable for="nxtvaccineId"><b><font size = "4px">Next Vaccine Id</font></b></lable><br>
					<input type="number" name="nxtvaccineId" id="nxtvaccineId" required autocomplete = "off"></br>
																				
					<lable for="nxtvaccinatedate"><b><font size = "4px">Next Vaccinate Date</font></b></lable><br>
					<input type="date" name="nxtvaccinatedate" id = "nxtvaccinatedate"  required></br>
				
					<lable for="nxtvtime"><b><font size = "4px">Next Vaccination Time</font></b></lable><br>
					<input type="time" name="nxtvtime" id="nxtvtime" required></br>
					
					<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you sure?</b></font></br></br>
					
					<input type="submit" name="submit" value="SUBMIT">
					
						<a href = "#" onClick = "autoFill() ; return true;">DEMO</a>

				</div>
				
			</form>
		
			<script type="text/javascript">
			function autoFill(){
				document.getElementById('petId').value="3";
				document.getElementById('lstvid').value="3";
				document.getElementById('lstvaccinatedate').value="2019-10-01";
				document.getElementById('nxtvaccineId').value="2";
				document.getElementById('nxtvaccinatedate').value="2020-05-10";
				document.getElementById('nxtvtime').value="10:00:00";
				
			}
			</script>
	
	</body>
</html>