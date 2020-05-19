<form method = "post">
<input type = 'submit' name = 'logout' value = "Logout" color = "#000000"/>
   
</form>
<?php

	session_start();
	//echo "Hello".$_SESSION["username"];
	
	$loginuname = $_SESSION["username"];
	$loginutype = $_SESSION["usertype"];
	
	require_once('../Hasini/config.php');
	
	/*$user = 'root';
	$pw = '';
	$db = 'animalcare';
	
	$con = new mysqli("localhost", $user, $pw, $db);*/
	
	
	$sql = "SELECT * from staffdetails s,userlogindetails u where u.Username = '$loginuname' and u.UserType = '$loginutype' and u.UserId = s.StaffId";
	$result = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_array($result);
	
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

	<li><?php echo $row['FirstName']?></li>
	<li><?php echo $row['LastName']?></li>
	
<ul>

	<br>
    <li><i class="fas fa-paw" style="font-size: x-large"></i></li> 
   <!-- <li><a href="index.php">PETBook</a></li> |-->
    <li><a href="../Hasini/Admin/StaffRegB.php">Staff Register</a></li> |
	<li><a href="../Hasini/Admin/AdminProfile.php">View Profile</a></li> |
	<li><a href="../Hasini/Admin/StaffRegSelect.php">Staff Details</a></li> |
	<li><a href="../Hasini/Admin/ProductStock.php">Add Stock Details</a></li> |
	<li><a href="../Hasini/Admin/ProductStockSelect.php">View Product Stock Details</a></li> |
	<li><a href="../Hasini/Admin/FilterProductStock.php">Search Product Stock Details</a></li> |
	<li><a href="../Tharushi/product/index.php">Manage Product Details</a></li> |
	<li><a href="../Meedumi/index.php">Manage Services</a></li> |
	<li><a href="../Meedumi/ServiceCharge.php">Manage Service Charges</a></li> |
	
	<!--<li><a href="../Hasini/Receptionist/ReceptionistProfile.php">View Profile</a></li> |-->
	<!----------------------------------------------------------------------------------->
	<li><a href="../Sawandi/vaccinate.php">Add Vaccination Info</a></li> |
	<li><a href="../Ranruwini/addvaccine.php">Add Vaccine Info</a></li> |
	<li><a href="../Ranruwini/medicalrecord.php">Add Medical Record</a></li> |
	<!----------------------------------------------------------------------------->
    <li><a href="../Tharushi/displayappointments/viewappointments.php">View Appointments</a></li> |
	<li><a href="../Ranruwini/ViewMedicalRecords.php">View Medical Records</a></li> |
	<li><a href="../Ranruwini/ViewVaccine.php">View Vaccine Items</a></li> |
	<li><a href = "../Sawandi/viewVaccination.php">View Vaccination Info</a></li>|
	<li><a href = "../Sawandi/viewOwnersInfo.php">View Owners Info</a></li>|
	<!-------------------------------------------------------------------------------------->
	<li><a href="../Sawandi/searchVaccination.php">Search Vaccination Info</a></li> |
	<li><a href="../Sawandi/searchOwner.php">Search Owners Info</a></li> |
	<li><a href="../Pumudi/PetSelect.php">Search Pet Details</a></li> |
	<!------------------------------------------------------------------------------------------->
	<li><a href="../Sawandi/vaccinationUpdate.php">Update Vaccination Info</a></li> |
	<li><a href="../Ranruwini/updatevaccine.php">Update Vaccine Item</a></li> |
	<li><a href="../Ranruwini/updateMedicalRecordList.php">Update Medical Records</a></li> |
	<!------------------------------------------------------------------------------------------>
	<li><a href="../Sawandi/view&DisablePetOwner.php">Disable pet owners</a></li> |
	<li><a href="../Ranruwini/deleteVaccine.php">Disable Vaccine Item</a></li> |
	<li><a href="../Ranruwini/deleteMedicalRecords.php">Disable Medical Item</a></li> |
	<!------------------------------------------------------------------------------------->
	<li><a href="../Sawandi/deleteOwners.php">Delete Pet Owners Info</a></li> |
	<li><a href="../Sawandi/deleteVaccination.php">Delete Vaccination Info</a></li> |
	<li><a href="../Ranruwini/DeleteVaccineRecord.php">Delete Vaccine Items</a></li> |
	<li><a href="../Pumudi/DeletePetAdvertisement.php">Delete Pet Advertisement</a></li> |
	<!--<li><a href="../Pumudi/Delete.php">Delete Pets</a></li> |-->
	
	
	<!---------------------------------------------------------------------------------------->
	
	<li><a href="../Pumudi/Acceptadd.php">Accept Advertisement</a></li> |
	
	<!------------------------------------------------------------------------------------------>
	
	<li><a href="../Pramoda/Cashpayment.php">Cash Payment</a></li> |
	
	<!-------------------------------------------------------------------------------------------->
	<li><a href="../Pumudi/petviewdownload.php">Pet Report</a></li> |
	
    <!--<li><a href="../Tharushi/bookappointment/bookappointments.php">Book Appoinment</a></li> |
	<li><a href="../Sawandi/searchVaccination.php">Search Vaccination</a></li> |
	<li><a href="../Ranruwini/ViewMedicalRecords.php">View Medical Records</a></li> |
	<li><a href="../Ranruwini/ViewMedicalRecords.php">View Medical Records</a></li> |
	<li><a href="../Meedumi/services-home.php">View Services</a></li> |-->
	
	
</ul>