
<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Search Pets</title>
	
	<style>
		body
		{
			background:url(images/cd.jpg);
			background-size:100% 200%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/petFilter.css">
	
	<body>
		
			
		
		<div id ="nav">
			
			<form action="" method="POST">
			
				<center><h3><font color="white">Search pets</center><font/></h3>

				<lable>Pet Id</lable>
				<input type="text" name="petId" id ="petid" placeholder = "Enter Pet ID"/><br>
				
				<input type="submit" name="search" value="Submit">
				
			</form>

		</div>	
				<table>
					<tr>
					<th>PetId</th>
					<th>UserId</th>
					<th>PetName</th>
					<th>Breed</th>
					<th>Age</th>
					<th>Colour </th>
					<th>Gender</th>
					<th>Species</th>
					<th>Status</th>
					<th>Edit</th>
										
				</tr><br>
				
				<?php
				require_once('connection.php');
				if(isset($_POST['search'])){
				$petId = $_POST['petId'];
				$sql = "SELECT * from pets where PetId='$petId' ";
				$sql_run = mysqli_query($con,$sql);
	
				 while($row = mysqli_fetch_array($sql_run))
				 {
					
				
					echo "<tr>";

					echo "<td>" . $row['PetId'] . "</td>";

					echo "<td>" . $row['UserId'] . "</td>";

					echo "<td>" . $row['PetName'] . "</td>";

					echo "<td>" . $row['Breed'] . "</td>";
		
					echo "<td>" . $row['Age'] . "</td>";
		
					echo "<td>" . $row['Colour'] . "</td>";
		
					echo "<td>" . $row['Gender'] . "</td>";
		
					echo "<td>" . $row['Species'] . "</td>";
					
					echo "<td>" . $row['Status'] . "</td>";
		
					echo "<td><input type=\"button\" value=\"Update\" name=\"update\" onclick=\"location.href = 'petUpdate.php?id=" . $row['PetId'] . "';\"></td>";
		
					//echo "<td><input type=\"button\" value=\"Delete\" name=\"delete\" onclick=\"location.href = 'Delete.php?id=" . $row['PetId'] . "';\"></td>";

					echo "</tr>";	 
			 
		 }
    echo "</table>";
} else {
	
			echo "0 results";
	
}
$con->close();
?>	

			
	</body>
	
</html>
		
	
	
	
