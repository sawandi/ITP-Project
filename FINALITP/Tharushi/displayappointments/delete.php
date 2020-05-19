<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from appointments where AppointmentId='$id'");
	header('location:viewappointments.php');

?>