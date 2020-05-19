
<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Search Staff Details</title>
	
	<style>
		body
		{
			background:url(images/images8.jpg);
			background-size:100% 200%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/productstockFilter1XX.css">
	
	<body>
	
		
		
		<div id ="nav">
			
			<form action="" method="POST">
			
				<center><h3><font color="white">Search Staff Details</center><font/></h3>

				<lable>SearchStaffId</lable>
				<input type="text" name="staffid" id ="stid" placeholder = "Enter StaffId"/><br>
				
				<!--<input type="text" name="NIC" id = "nicid" placeholder = "Enter NIC" required>-->
				
				<input type="submit" name="search" value="Submit">
				
			</form>

		</div>	
				<table>
					<tr>
					<th>StaffId</th>
						<th>NIC</th>
						<th>FirstName</th>
						<th>LastName</th>
						<th>Email Address</th>
						<th>PhoneNumber</th>
						<th>Qualification</th>
						<th>Gender</th>
						<th>UserType</th>
						<th>Action</th>
				
					
				</tr><br>
				
				<?php
				require_once('config.php');
				if(isset($_POST['search'])){
				$staffid = $_POST['staffid'];
				//$NIC = $_POST['NIC'];
				$sql = "SELECT * from staffdetails where StaffId='$staffid' ";
				//$sql1 = "SELECT * from userlogindetails where NIC ='$NIC' ";
				//$sql1_run = mysql_query($conn,$sql);
				$sql_run = mysqli_query($conn,$sql);
	
				 while($row = mysqli_fetch_array($sql_run))
				 {
					
				
					echo "<tr>";

				

		echo "<td>" . $row['StaffId'] . "</td>";

		echo "<td>" . $row['NIC'] . "</td>";

		echo "<td>" . $row['FirstName'] . "</td>";

		echo "<td>" . $row['LastName'] . "</td>";
		
		echo "<td>" . $row['EmailAddress'] . "</td>";
		
		echo "<td>" . $row['PhoneNumber'] . "</td>";
		
		echo "<td>" . $row['Qualification'] . "</td>";
		
		echo "<td>" . $row['Gender'] . "</td>";
		
		echo "<td>" . $row['UserType'] . "</td>";
		
		echo "<td><input type=\"button\" value=\"Delete\" name=\"delete\" onclick=\"location.href = 'Delete1.php?id=" . $row['StaffId'] . "';\"></td>";


					//echo "</tr>";	 
					
					// while($row = mysqli_fetch_array($sql1_run)){
						 
						// echo "<tr>";
						 
						// echo "<td>" . $row['Username'] . "</td>";
		
						//echo "<td>" . $row['Password'] . "</td>";
		
						//echo "<td><input type=\"button\" value=\"Delete\" name=\"delete\" onclick=\"location.href = 'Delete1.php?id=" . $row['StaffId'] . "';\"></td>";

						//echo "</tr>";
					// }
					 
			 
		 }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>	

			
	</body>
	
</html>
		
	
	
	
