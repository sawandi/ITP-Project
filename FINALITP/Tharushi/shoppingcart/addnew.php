<?php

//database connection
	include('conn.php');
	
	$UserId=$_POST['UserId'];
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$amount=$_POST['amount'];
	$ddate=$_POST['ddate'];
	
	mysqli_query($conn,"insert into  orderdetails (UserId, fullname, email, phone, address, amount, ddate) 
	values ('$UserId', '$fullname', '$email', '$phone', '$address', '$amount', '$ddate' )");
	header('location:placeorder.php');

?>