<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Update Vaccination Info</title>
	
	<style>
		body
		{
			background:url(images/images8.jpg);
			background-size:cover;
			background-repeat:repeat;
				   
		}
	</style>
	
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel = "stylesheet" type="text/css" href = "styles/updateVaccination.css">
	
</head>
	<body>
	
		<div class = "col-md-9" id = "output">
		
		</div>
	
		<div id = "side">
			
				
				
				<a href = "viewVaccination.php">View Vaccination Info</a></br><br>
				<a href = "deleteVaccination.php">Delete Vaccination Info</a></br></br>
				<a href = "vaccinate.php">Add Vaccination Info</a></br></br>
				<a href = "searchVaccination.php">Search Vaccination Info</a></br><br>
		
				
		</div>
		
		<!--<div class = "col-md-9" id = "output">
		
		</div>-->
		
		<script>
		
			$(document).ready(function(){
				
				$("#output").load("viewVaccinationListUpdate.php");
				//update
				
				$(document).on("click",".edit",function()
				{
					var row = $(this);
					var VaccinateId =$(this).attr("data-id");
					$("#VaccinateId").val(VaccinateId);
					
					var petid = row.closest("tr").find("td:eq(0)").text();
					$("#newpetId").val(petid);
					
					var lstvid = row.closest("tr").find("td:eq(1)").text();
					$("#newlstvid").val(lstvid);
					
					var lstvaccinatedate = row.closest("tr").find("td:eq(2)").text();
					$("#newlstvaccinatedate").val(lstvaccinatedate);
					
					var nxtvid = row.closest("tr").find("td:eq(3)").text();
					$("#newnxtvaccineId").val(nxtvid);
					
					var nxtvaccinatedate = row.closest("tr").find("td:eq(4)").text();
					$("#newnxtvaccinatedate").val(nxtvaccinatedate);
					
					var nxtvaccinechrg = row.closest("tr").find("td:eq(5)").text();
					$("#newnxtvaccinechrg").val(nxtvaccinechrg);
					
					var nxtvaccinationtime = row.closest("tr").find("td:eq(6)").text();
					$("#newnxtvtime").val(nxtvaccinationtime);
				});
			});
		
		
		</script>
	
		<form id ="regForm"  action="vaccinationUpdate.php" method="post">
		
			<div id = "nav">
			
				<h3 >Update Next Vaccination Info</h3>
				
				<lable for="VaccinateId"><b><font size = "4px">VaccinateId To Update</font></b></lable><br>
				<input type="text" name="VaccinateId" id = "VaccinateId" value = "0" readonly required><br>
			
				<lable for="petId"><b><font size = "4px">Enter New PetId</font></b></lable><br>
				<input type="number" name="newpetId" id = "newpetId" required><br>
				
				<lable for="lstvid"><b><font size = "4px">New Last Vaccine Id</font></b></lable><br>
				<input type="number" name="newlstvid" id = "newlstvid" required><br>
			
				
				<lable for="lstvaccinatedate"><b><font size = "4px">New Last Vaccinate Date</font></b></lable><br>
				<input type="date" name="newlstvaccinatedate" id ="newlstvaccinatedate" required></br>
			
			
				<lable for="nxtvaccineId"><b><font size = "4px">New Next Vaccine Id</font></b></lable><br>
				<input type="number" name="newnxtvaccineId" id = "newnxtvaccineId" required></br>

				
				<lable for="nxtvaccinatedate"><b><font size = "4px">New Next Vaccinate Date</font></b></lable><br>
				<input type="date" name="newnxtvaccinatedate" id ="newnxtvaccinatedate" required></br>
			
				
				<lable for="nxtvaccinechrg"><b><font size = "4px">New Next Vaccine Charge</font></b></lable><br>
				<input type="text" name="newnxtvaccinechrg" id ="newnxtvaccinechrg" readonly required></br>

				
				<lable for="nxtvtime"><b><font size = "4px">New Next Vaccination Time</font></b></lable><br>
				<input type="time" name="newnxtvtime" id = "newnxtvtime" required></br>
				
				<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you sure?</b></font></br>
					
				<input type="submit" name="update" value="UPDATE">
							
			</div>
		</form>
		
		<br><br>
		
	</body>
</html>	


<!--php code for update data from mysql database petowners table-->
<?php


	if(isset($_POST['update']))
	{
		require_once('connection.php');
		
		$vid = $_POST['VaccinateId'];
		$newpetid = $_POST['newpetId'];
		$newlstvid = $_POST['newlstvid'];
		$newlstvaccinatedate = $_POST['newlstvaccinatedate'];
		$newnxtvaccineId = $_POST['newnxtvaccineId'];
		$newnxtvaccinatedate = $_POST['newnxtvaccinatedate'];
		//$newnxtvaccinechrg = $_POST['newnxtvaccinechrg'];
		$newnxtvtime = $_POST['newnxtvtime'];
		
		/*echo $vid ;
		echo $newpetid;
		echo $newlstvid;
		echo $newlstvaccinatedate;
		echo $newnxtvaccineId;
		echo $newnxtvaccinatedate;
		echo $newnxtvaccinechrg;
		echo $newnxtvtime;*/
		
		$sql = "SELECT Charge from vaccines where VaccineId = '$newnxtvaccineId'";
		$result = mysqli_query($con,$sql); 
		$row = mysqli_fetch_assoc($result);
		

		$query = "Update systamaticvaccinatedetails SET PetId = '$newpetid',LastVaccineId = '$newlstvid', LastVaccinateDate = '$newlstvaccinatedate', NextVaccineId = '$newnxtvaccineId', NextVaccinateDate = '$newnxtvaccinatedate',NextVaccineCharge = '".$row['Charge']."', NextVaccinationTime = '$newnxtvtime' where VaccinateId = $vid";
		$result = mysqli_query($con,$query);
		
		if($result)
		{
			/*echo "<script>
				
						alert('Data Updated...!!');
					
				</script>";*/
							
		}
		else
		{
			echo "<script>
				
						alert('Data Not Updated...??');
					
				</script>";
		}
		
		mysqli_close($con);
	}


?>