<?php

require_once('config.php');

$NIC   = $_POST['NIC'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phoneno'];
$qulif =$_POST['qualification'];
$username = $_POST['username'];
$pw = $_POST['pw'];
$gd = $_POST['gender'];
$ut = $_POST['usertype'];


	/*echo $NIC;
	echo $email;
	echo $phone;
	echo $username;
	echo $pw;*/
	$hashed = hash('sha512',$pw);
	$sql = "INSERT INTO staffdetails(NIC,FirstName,LastName,EmailAddress,PhoneNumber,Qualification,Gender,UserType) VALUES ('$NIC','$fname','$lname','$email','$phone','$qulif','$gd','$ut')";
	mysqli_query($conn,$sql);
	
	$sql = "SELECT StaffId FROM  staffdetails where NIC = '$NIC'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	
	if(mysqli_query($conn,$sql)){
		//echo "New record created successfully";
		//echo "<script>							
		// alert('Details Save Successfully');
		 echo "<script>alert('Details save Successfully');window.location.href='MainHome.php';</script>";
		//</script>";
		
	$sql1 = "INSERT INTO userlogindetails(UserId,Username,Password,UserType) VALUES (".$row['StaffId'].",'$username','$hashed','$ut')";
	mysqli_query($conn,$sql1);
	}else{
		echo "Error: ". $sql ."<br>" . mysqli_error($conn);
		
	}
	mysqli_close($conn);
	
	
	
	
?>	