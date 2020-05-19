<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Pet Details</title>
	
	<style>
		body
		{
			background:url(images/pic2.jpg);
			background-size:cover;
			background-repeat:repeat;
			
			 

			  <!--Center and scale the image nicely
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;-->
				   
		}
	</style>
	
	<!--<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	
	<link rel = "stylesheet" type="text/css" href = "styles/petviewdownload.css">
	
</head>

	<body>
	
		<div id = "side">
			
			<span><h4><a href = "../Home/MainHomeReceptionist.php">Home<a><h4></span>
			
		</div>
		
		<!--for pet details-->
		<div class = "col-md-9" id = "output">
			
		</div>
	
		<!--<script>
			
				$(document).ready(function(){
					
					$("#output").load("viewPets.php");
					
					//delete
					
					$(document).on("click",".search",function()
					{
						var search = $(this);
						var searchPetId =$(this).attr("data-id");
						$("#pid").val(searchPetId);
						
					
					});
				});-->
			
			
		</script>
		
		<div id = "nav">
		
			<h3> Pet Details</h3>
			
			<form action = "petviewdownload.php" method = "post">
			<text-align="le><h3><font color="white">Search pets</center><font/></h3>
			
				<input type = "text" name = "petId" id = "petid" placeholder = "Enter Pet Id" required ><br><br>
				
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
					<th>Breed</th>
					<th>Colour</th>
					
				</tr>
			
			
				<?php 
				
					
						if(isset($_POST['view']))
						{
							require_once('connection.php');
							
							$petId = $_POST['petId'];
							
							
							$sql = "SELECT PetName, Breed,Colour from pets where PetId='$petId' ";
							$result = mysqli_query($con,$sql);
							
							$petTableHeader="<table border = '1'>
											<tr>
												<th>Pet Name</th>
												<th>Breed</th>
												<th>Colour</th>
											</tr>";
										$report = "";
							$petTableFooter = "</table>";
							
							if(mysqli_num_rows($result)>0){
								
								while($row = mysqli_fetch_assoc($result))
								{
									$report .= "<tr><td>".$row["PetName"]."</td><td>".$row["Breed"]."</td><td>".$row["Colour"]."</td></tr>";
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
			
			<form method ="post" action = "petview.php">
				<input type = "hidden" name = "report" value = "<?php echo $petTableHeader.$report.$petTableFooter;?>">
				<input type = "submit" name = "view-report" class="btn btn-danger" value="View Report"/>
			</form>
			
			<form method ="post" action = "petdownload.php">
				<input type = "hidden" name = "report" value = "<?php echo $petTableHeader.$report.$petTableFooter;?>">
				<input type = "submit" name = "download-report" class="btn btn-danger" value="Download Report"/>
			</form>
			
		</div>
		
		

	</body>

</html>

