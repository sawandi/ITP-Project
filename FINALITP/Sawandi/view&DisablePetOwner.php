

<!DOCTYPE html>
<html>
<head>
	<title>Active-Deactive PetOwners</title>
	
	
	<!--<style>
		body
		{
			background:url(images/WestwoodVetCare.jpg);
			background-size:100%;
			
				   
		}
	</style>-->
	
	<!--<link rel = "stylesheet" type="text/css" href = "styles/nxtvaccination.css">-->
	
	
</head>
	<body>
	
	<!-- php script -->
	
		<h1 align = "center">Active-Deactive Pet Owners</h1>
		
		</br></br>
	
		<?php
	
			require_once('connection.php');
			
			//$query = "SELECT * from petowners";
			//$result = mysqli_query($con,$query);
			
			$query = "SELECT * from petowners p,userlogindetails u where p.UserId = u.UserId";
			$result = mysqli_query($con,$query);

	

		?>
	
		<table border = "1" align = "center">
			
			<tr>
			
				<th>UserId</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>NIC</th>
				<th>E-Mail</th>
				<th>Phone No</th>
				<th>UserName</th>
				<!--<th>Current Status</th>-->
				<th>Change Status</th>
				
			</tr>
			
			<?php
				
				while($row = mysqli_fetch_assoc($result)){
		
					
			?>
			<tr>
				
				<td><?php echo $row['UserId']?></td>
				<td><?php echo $row['Fname']?></td>
				<td><?php echo $row['Lname']?></td>
				<td><?php echo $row['NIC']?></td>
				<td><?php echo $row['Email']?></td>
				<td><?php echo $row['Phone']?></td>
				<td><?php echo $row['Username']?></td>
				
				<!--<td>
					<?php
						
						if($row['Status']==1)
						{
							echo "<p id = str".$row['UserId']."> Active </p>";
						}
						else
						{
							echo "<p id = str".$row['UserId']."> Disactive </p>";
						}
					?>
				</td>-->
				
				<td>
					<select onchange = "active_disactive_user(this.value,<?php echo $row['UserId'];?>)">
					
						<option value = "1">Active</option>
						<option value = "0">Disactive</option>	
				
					</select>
				
				</td>
					
			</tr>
			
			<?php
			
			
			}?>
			
		</table>
		
		<a href = "searchOwner.php"><font size = "5px">Search Pet Owners</font></a><br>
		<a href = "deleteOwners.php"><font size = "5px">Delete PetOwners</font></a><br>
		
	</body>
	
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script type = "text/javascript">
	
		function active_disactive_user(val, UserId)
		{
			$.ajax({
				
				type:'post',
				url:'change.php',
				data:{val:val,UserId:UserId},
				success:function(result){
					
					if(result == 1){
						
						$('#str'+UserId).html('Active');
					}
					else{
						
						$('#str'+UserId).html('Disactive');
					}
				}
				
			});
			
			
		}	
	</script>
</html>