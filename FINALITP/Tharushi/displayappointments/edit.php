<?php

//database connection 
	include('conn.php');
	
	$id=$_GET['id'];
	
	//$UserId=$_POST['UserId'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$service=$_POST['service'];
	$petage=$_POST['petage'];
	$petgender=$_POST['petgender'];
	$adate=$_POST['adate'];
	$atime=$_POST['atime'];
	
	mysqli_query($conn,"update appointments set firstname='$firstname', lastname='$lastname', email='$email' , service='$service' , petage='$petage' , petgender='$petgender' , adate='$adate' , atime='$atime' where AppointmentId='$id'");
	header('location:viewappointments.php');

?>