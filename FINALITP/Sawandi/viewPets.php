<?php
	
	session_start();

	//echo $_SESSION["username"];
	
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>View Pets</title>
	
	<!--<style>
		body
		{
			background:url(images/bunch.jpg);
			<!--background-size:cover;
			background-repeat:repeat;
			
			height: 50%; 

			  <!--Center and scale the image nicely
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;
				   
		}
	</style>-->
	
	<!--<link rel = "stylesheet" type="text/css" href = "styles/petowreg.css">-->
	
</head>

	<body>
			
		<table border = "1">

			<tr>
			
				<th>Pet ID</th>
				<th>Pet Name</th>
				<!--<th>Pet Type</th>-->
				
			</tr>
			
			<?php 
				
				require_once('connection.php');
		
				
				$loginusername = $_SESSION["username"];
				
				$sql = "SELECT * from pets p, userlogindetails u where u.Username = '$loginusername' and u.UserId = p.UserId";
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)>0){
					
					while($row = mysqli_fetch_assoc($result))
					{
						
						
						echo "<tr>
						
							<td>".$row["PetId"]."</td>
							<td>".$row["PetName"]."</td>
							<td><button type = 'button' class = 'btn btn-sm btn-info search' data-id = '{$row["PetId"]}'><i class = 'fa fa-search'>Search</i></button></td>
				
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

	
	
	</body>

</html>