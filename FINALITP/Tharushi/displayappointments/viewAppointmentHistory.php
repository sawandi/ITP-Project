<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Appointment History</title>
	
	<style>
		body
		{
			background:url(images/puppy.jpg);
			background-size:cover;
			background-repeat:repeat;
			
			 

			  <!--Center and scale the image nicely
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;-->
				   
		}
	</style>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!--link rel = "stylesheet" type="text/css" href = "styles/petVaccinateHistory.css"-->
	
</head>

	<body>
	
		<div id = "side">
			
			<!--span><h4><a href = "../Home/MainHomePetOwner.php">Home<a><h4></span-->
			<!--<span><h4><font color = "white"><a href = "searchVaccination.php">Search Vaccination Info</a></font><h4><span></br>-->
		</div>
		
		<!--for pet details-->
		<!--div class = "col-md-9" id = "output">
			
		</div-->
	
		<!--script>
			
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
			
			
		</script-->
		
		<div id = "nav">
		
			<h3>Appointment History</h3>
			
			<form action = "viewAppointmentHistory.php" method = "post">
			
				<input type = "text" name = "AppointmentId" id = "AppointmentId" placeholder = "Select Appointment Id" ><br><br>
				
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
				
			<table border = "1" class="table table-bordered">

				<tr>
				
				<th>Id</th>
				<th>UserId</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Service</th>
					
				</tr>
			
			
				<?php 
				
					
						if(isset($_POST['view']))
						{
							require_once('conn.php');
							
							$AppointmentId = $_POST['AppointmentId'];
							
							
							$sql = "SELECT * FROM appointments WHERE AppointmentId = '$AppointmentId' ";
							$result = mysqli_query($conn,$sql);
							
							$reportTableHeader="<table border = '1'>
											<tr>
												<th>Id</th>
												<th>UserId</th>
												<th>Firstname</th>
												<th>Lastname</th>
												<th>Email</th>
												<th>Service</th>
											</tr>";
										$report = "";
										$reportTableFooter = "</table>";
							
							if(mysqli_num_rows($result)>0){
								
								while($row = mysqli_fetch_assoc($result))
								{
									$report .= "<tr><td>".$row["AppointmentId"]."</td><td>".$row["UserId"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["service"]."</td></tr>";
								}
								echo $report;
							}
							else
							{
								$report = "0 result";
								echo $report; 
							}
							
							mysqli_close($conn);
						}
				?>

			</table>
			</br>
			
			<form method ="post" action = "ViewReportAppointment.php">
				<input type = "hidden" name = "report" value = "<?php echo $reportTableHeader.$report.$reportTableFooter;?>">
				<input type = "submit" name = "view-report" class="btn btn-danger" value="View Report"/>
			</form>
			
			<form method ="post" action = "DownloadReport.php">
				<input type = "hidden" name = "report" value = "<?php echo $reportTableHeader.$report.$reportTableFooter;?>">
				<input type = "submit" name = "download-report" class="btn btn-danger" value="Download Report"/>
			</form>
			
		</div>
		
		

	</body>

</html>

