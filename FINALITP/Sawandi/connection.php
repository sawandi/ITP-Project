<?php
	
	$user = 'root';
	$pw = '';
	$db = 'animalcare';
	
	$con = new mysqli("localhost", $user, $pw, $db);
	
	//check connection
	if(mysqli_connect_error())
	{
		echo "Failed to connect to MySQL";
	}
	/*else
	{
		echo "connected successfully";
	}*/
	
	
?>