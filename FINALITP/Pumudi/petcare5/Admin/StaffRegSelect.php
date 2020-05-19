<!DOCTYPE html>
<html>
<head>
	<title>Staff Details</title>
	
	<style>
		body
		{
			background:url(images/image8.jpg);
			background-size:120% 175%;
			background-repeat:no-repeat;
				   
		}
	</style>
	

<link rel = "stylesheet" type="text/css" href = "styles/table2XY.css">


</head>
<body>
		<center><h1><font color="white"><b>Staff Details</center></b><font/></h1>
		<div class="sidenav">

<button class="button1" style ="float:center"><a href="FilterStaffReg.php"><font size="5em",font color="black">Search Staff Details</font></a></button>


</div>
<br>
</body>

</html>
<?php
			
	
	require_once('config.php');
	
	

$sql = "SELECT StaffId, NIC,FirstName,LastName,EmailAddress,PhoneNumber,Qualification,Gender,UserType FROM staffdetails";
$result = $conn->query($sql);
	
if ($result->num_rows > 0) {
 
	echo "<table border='1'>
	
	<th>StaffId</th>
	<th>NIC</th>
	<th>FirstName</th>
	<th>LastName</th>
	<th>Email Address</th>
	<th>PhoneNumber</th>
	<th>Qualification</th>
	<th>Gender</th>
	<th>UserType</th>
	<th>Action</th></tr>";
	
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {

			
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

		
	
		echo "</tr>";	
  }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>