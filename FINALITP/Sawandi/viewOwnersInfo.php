<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>View Pet Owners Details List</title>
	
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
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	
</head>

	<body>
	
		<h1 align = "center">Pet Owners List</h1>
		
		<br><br>
			
		<table border = "1" align = "center" class="table table-bordered">

			<tr>
			
				<th>UserId</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>NIC</th>
				<th>E-Mail</th>
				<th>Phone No</th>
				<th>UserName</th>
				
			</tr>
			
			<?php 
				
				require_once('connection.php');
				
				
				$sql = "SELECT * from petowners p,userlogindetails u where p.UserId = u.UserId";
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)>0){
					
					while($row = mysqli_fetch_assoc($result))
					{
						
						echo "<tr>
						
							<td>".$row["UserId"]."</td>
							<td>".$row["Fname"]."</td>
							<td>".$row["Lname"]."</td>
							<td>".$row["NIC"]."</td>
							<td>".$row["Email"]."</td>
							<td>".$row["Phone"]."</td>
							<td>".$row["Username"]."</td>
							
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