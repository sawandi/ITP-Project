<form method = "post">
<input type = 'submit' name = 'logout' value = "Logout" color = "blue"/>
</form>
<?php

	session_start();
	//echo "Hello".$_SESSION["username"];
	
	$loginuname = $_SESSION["username"];
	$loginutype = $_SESSION["usertype"];
	
	require_once('../Sawandi/connection.php');
	
	/*$user = 'root';
	$pw = '';
	$db = 'animalcare';
	
	$con = new mysqli("localhost", $user, $pw, $db);*/
	
	
	$sql = "SELECT * from petowners o,userlogindetails u where u.Username = '$loginuname' and u.UserType = '$loginutype' and u.UserId = p.UserId";
	//$res = mysqli_query($con,$sql);
	
	//$row = mysqli_fetch_assoc($res);
	//$row = mysqli_fetch_assoc($res);
	/*echo $row['Fname']
	echo " ";
	echo $row['Lname'];*/
	
	if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location:MainHome.php");
	}

?>
<br>
	<!--<li><?php echo $row['Fname']?></li>
	<li><?php echo $row[" "]?></li>
	<li><?php echo $row['Lname']?></li>-->

<ul>
	<br>
    <li><i class="fas fa-paw" style="font-size: x-large"></i></li> 
   <!-- <li><a href="index.php">PETBook</a></li> |-->
    <li><a href="../Pumudi/PetReg2.php">Pet Signup</a></li> |
	<li><a href="../Sawandi/ownerUserAcc.php">View Profile</a></li> |
	<li><a href="../Pumudi/customerSelect.php">Search Pet Details</a></li> |
	<li><a href="../Sawandi/viewVaccinateHistory.php">View Vaccination History</a></li> |
    <li><a href="../Tharushi/bookappointment/bookappointments.php">Book Appoinment</a></li> |
	<li><a href="../Tharushi/shoppingcart/index.php">Buy Products</a></li> | 
	<!--<li><a href="../Sawandi/searchVaccination.php">Search Vaccination</a></li> |-->
	<li><a href="../Ranruwini/ViewMedicalRecords.php">View Medical Records</a></li> |
	<!--<li><a href="../Ranruwini/ViewMedicalRecords.php">View Medical Records</a></li> |-->
	<li><a href="../Meedumi/services-home.php">View Services</a></li> |
	<li><a href="../Pramoda/carddetails.php">Add Card Details</a></li> |
	
	
	
	
	
	
</ul>