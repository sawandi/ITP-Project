<?php 

	//php code to search data in mysql database and set it in input text
	
	
	if(isset($_POST['search']))
	{
		require_once('connection.php');
		
		$NIC = $_POST['nic'];
		
		
		/*$query = "SELECT Fname, Lname, NIC, Email, Phone, Status FROM petowners WHERE UserId = '$userID' ";
		$result = mysqli_query($con,$query);*/
		
		$query = "SELECT po.Fname, po.Lname, po.NIC, po.Email, po.Phone, po.Status, count(p.PetId) AS noOfPets FROM petowners po,pets p WHERE po.NIC = '$NIC' and p.UserId = po.UserId group by po.Lname, po.NIC, po.Email, po.Phone, po.Status ";
		$result = mysqli_query($con,$query);
		
		/*$sql = "SELECT count(PetId) As NoOfPets from pets where UserId = '$userID'";
		$result = mysqli_query($con,$sql);
		$value = mysqli_fetch_assoc($result);
		$num_rows =$value['NoOfPets'];
		
		echo $num_rows;*/
		
		
		
		if(mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_array($result))
			{
				$fname = $row['Fname'];
				$lname = $row['Lname'];
				$nic = $row['NIC']; 
				$email = $row['Email'];
				$phone = $row['Phone'];
				$Status = $row['Status'];
				$num_pets =$row['noOfPets'];
				
				/*if($Status == 1)
				{
					$status = ['Active'];
				}
				else
				{
					$status = ['Deactive'];
				}*/
			}
		}
		else
		{
			//echo "Undifined NIC No...???";
			?>
			
			<div id = "alert" class="alert alert-warning" role="alert">
				<strong>Warning!</strong> Undifined NIC No...???. Please Re-enter???
			</div>
			<?php
			
			$fname = "";
			$lname = "";
			$nic   = ""; 
			$email = "";
			$phone = "";
			$Status = "";
			$num_pets ="";
		}
		
		
		mysqli_free_result($result);
		mysqli_close($con);
	}
	else
	{
		$fname = "";
		$lname = "";
		$nic   = ""; 
		$email = "";
		$phone = "";
		$Status = "";
		$num_pets ="";
		
	
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search Owner Info</title>
	
	
	<style>
		body
		{
			background:url(images/images8.jpg);
			background-size:100%;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/searchOwner.css">
	
	
</head>

	<body>
	
			<a href = "view&DisablePetOwner.php"><font color = "white">View & Disable PetOwners</font></a><br>
			<a href = "deleteOwners.php"><font color = "white">Delete Pet Owners</font></a>
		
			<form action="searchOwner.php" method="post">
			
				<div id="nav">
					
					<h3>Search Owner Info</h3>
		
					
					<lable for = "Ownerid"><b><font size = "4px">Owner NIC To Search</font></b></lable><br>
					<input type="text" name="nic" placeholder = "Owner NIC To Search" required><br>
					
					<input type="submit" name="search" value="SEARCH"><br>
				
					<lable for = "fname"><b><font size = "4px">First Name</font></b></lable><br>
					<input type="text" name="fname" value = "<?php echo $fname?>" placeholder = "First Name" readonly><br>
					
					<lable for = "lname"><b><font size = "4px">Last Name</font></b></lable><br>
					<input type="text" name="lname" value = "<?php echo $lname?>" placeholder = "Last Name" readonly></br>
					
					<lable for = "nic"><b><font size = "4px">NIC</font></b></lable><br>
					<input type="text" name="NIC" value = "<?php echo $nic?>" placeholder = "NIC" readonly></br>

					<lable for = "email"><b><font size = "4px">Email</font></b></lable><br>
					<input type="email" name="email" value = "<?php echo $email?>" placeholder = "Email" readonly ></br>
					
					<lable for = "phone"><b><font size = "4px">Phone</font></b></lable><br>
					<input type="text" name="phone" value = "<?php echo $phone?>" placeholder = "Phone No" readonly></br>
					
					<lable for = "status"><b><font size = "4px">Status</font></b></lable><br>
					<input type="text" name="status" value = "<?php echo $Status?>" placeholder = "Status" readonly></br>
					
					<lable for = "#pets"><b><font size = "4px">No Of Pets</font></b></lable><br>
					<input type="text" name="noofPets" value = "<?php echo $num_pets?>" placeholder = "No Of Pets" readonly></br>
					
					
					
					<!--<input type="submit" name="search" value="SEARCH">-->
					

				</div>
				
				

			</form>
			
		</body>
		
</html>		