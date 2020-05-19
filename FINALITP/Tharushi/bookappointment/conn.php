<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","animalcare");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
	
	$UserId=$_POST['UserId'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$service=$_POST['service'];
	$petage=$_POST['petage'];
	$petgender=$_POST['petgender'];
	$adate=$_POST['adate'];
	$atime=$_POST['atime'];
	
	mysqli_query($conn,"insert into appointments (UserId, firstname, lastname, email, service, petage, petgender, adate, atime) values ('$UserId','$firstname', '$lastname', '$email', '$service', '$petage', '$petgender', '$adate', '$atime' )");
	header('location:bookappointments.php');
 
?>