<?php

	require_once('connection.php');
	$query = mysqli_query($con,"Update petowners set status = '".$_POST['val']."' where UserId = '".$_POST['UserId']."'");

	if($query)
	{
		$q = mysqli_query($con,"SELECT * from petowners where UserId = '".$_POST['UserId']."'");
		
		$data = mysqli_fetch_assoc($query);
		echo $data['$status'];
	}



?>