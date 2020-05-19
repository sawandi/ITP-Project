<?php
			
	if(isset($_POST['update'])){
	require_once('config.php');
$StaId = $_POST['staffid'];	
$nic   = $_POST['NIC'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phoneno'];
$qulif =$_POST['qualification'];
//$username = $_POST['username'];
//$pw = $_POST['pw'];
$gdd = $_POST['gender'];
//$ut = $_POST['usertype'];

	
	/*echo $prodId;
	echo $avileqty;
	echo $reolimit;
	echo $utprice;
	echo $expdqty;*/
	
	$sql = "UPDATE staffdetails SET NIC ='$nic',FirstName ='$fname', LastName ='$lname', EmailAddress ='$email',PhoneNumber ='$phone',Qualification='$qulif',Gender ='$gdd' WHERE StaffId = '$StaId'";
	mysqli_query($conn,$sql);
	
	
	if(mysqli_query($conn,$sql)){
echo "<script>alert('Updated Successfully');window.location.href='ReceptionistProfile.php';</script>";
		//$sql1 = "UPDATE userlogindetails SET Username ='$username' ,Password ='$pw' WHERE UserId ='$StaId'";
		//$result = mysqli_query($conn,$sql1);
		
	//$row = mysqli_fetch_assoc($result);
	}else{
		echo "Error: ". $sql ."<br>" . mysqli_error($conn);
		
	}
	mysqli_close($conn);
	
	




	}
?>
	