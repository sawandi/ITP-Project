<?php
session_start();
require_once('config.php');
$un =	$_SESSION["username"];
$getdata = mysqli_query($conn, "Select * from staffdetails s,userlogindetails u where s.StaffId=u.UserId and u.Username = '$un'");
$rows = mysqli_fetch_array($getdata);
//$id = $_SESSION['userid'];
//$getdata = mysqli_query($conn, "Select * from staffdetails where StaffId='$id'");
//$rows = mysqli_fetch_array($getdata);
$fn = $rows['FirstName'];
$ln = $rows['LastName'];
$ea = $rows['EmailAddress'];
$pn = $rows['PhoneNumber'];
$gd = $rows['Gender'];
$phn = $rows['PhoneNumber'];
$ql = $rows['Qualification'];


//if(isset($_POST['updateprofile'])){
	//echo "Updated Successfully";
	
//$StaId = $_POST['staffid'];	
//$nic   = $_POST['NIC'];
//$fname = $_POST['firstname'];
//$lname = $_POST['lastname'];
//$email = $_POST['email'];
//$phone = $_POST['phoneno'];
//$qulif =$_POST['qualification'];
//$username = $_POST['username'];
//$pw = $_POST['pw'];
//$gd = $_POST['gender'];
//$ut = $_POST['usertype'];


	//$sql = "UPDATE staffdetails SET NIC ='$nic',FirstName ='$fname', LastName ='$lname', EmailAddress ='$email',PhoneNumber ='$phone',Qualification='$qulif',Gender ='$gd',UserType ='$ut' WHERE StaffId = '$StaId'";
	//mysqli_query($conn,$sql);
	//echo "<script>alert('Updated Successfully');window.location.href='AdminProfile.php';</script>";
	


	//}
?>

<!DOCTYPE html>
<html>
<head>

<title>Receptionist profile</title>

<link rel="stylesheet" href="styles/profX13.css" type="text/css"  />
</head>
<body>

<a href="UpdateStaffReg.php">Edit Profile</a>
<a href="UpdatePass.php">Edit Password</a>

<br>
<a href=".../Home/MainHome.php"><font size="5em",font color="black">Home</font></a>
 
<div id="wrapper">
 <center><h2>My Profile</center></h1>
<center><img src="images/avatar1.jpg" width="150px" heigth="80px"></center> <br>


  
 <!--<div id="navv">
    <ul>
    
      <li><a href="#">Search Pet</a></li>
      <li><a href="#">Search PetOwner</a></li>
      <li><a href="#">Appointments</a></li>
      <li><a href="#">Vaccine details</a></li>
      <li><a href="#">Payments</a></li>
    </ul>
  
  </div>-->

 </div>
 
  
      
 	<div id ="nav">
<div class="horizontal-group">
	<div class="form-group left">
	 <label for="firstname" class="label-title">Firstname</label>
	<input type="text" name="firstname" id ="fnameid" value="<?php echo $fn; ?>" placeholder = "First Name" required>
	</div>
	 <div class="form-group rigth">
	<label for="firstname" class="label-title">Lastname</label>
	<input type="text" name="lastname" id="lnameid" value="<?php echo $ln; ?>" placeholder = "Last Name" required>
 </div>
  </div>
  <br>
	<div class="horizontal-group">
	<div class="form-group left">
	 <label for="firstname" class="label-title">Gender</label><br>
	 	<input type="text" name="gender" value="<?php echo $gd; ?>" id="gender" placeholder = "Gender" required>
		</div>
		
	 <div class="form-group rigth">
	<label for="firstname" class="label-title">NIC</label><br>
	<input type="text" name="NIC" id = "nicid" value="<?php echo $pn; ?>"  placeholder = "NIC NO" required>
 </div>
 </div>
 <br>
 <div class="horizontal-group">
 <div class="form-group left">
  <label for="email" class="label-title">Email</label><br>
<input type="email" name="email" id="emailid" value="<?php echo $ea; ?>" placeholder = "E-mail Address">
</div>

 <div class="form-group rigth">
 <label for="email" class="label-title">Phone No</label>
<input type="text" name="phoneno" id = "pnoid" value="<?php echo $phn; ?>"	 placeholder = "Phone Number">
</div>	
</div>
<br>

<div class="form-group left">	
 <label for="email" class="label-title">Qualification</label>
<input type="text" name="qualification"  id="qualid"value="<?php echo $ql; ?>"  placeholder = "Qualification" required>
</div>


	
<!--<div class="form-group rigth">	
 <label for="email" class="label-title">UserName</label><br>
<input type="text" name="username" id="unid" placeholder = "UserName">
</div>
</div>
<br>

<div class="form-group left">
<label for="email" class="label-title">Password</label><br>			
<input type="password" name="pw" id ="pwid" placeholder = "Password" >
</div>			
 
 </div>-->
</div>
	<div class="sidenav" id="hh1">
<!--<button class="button7" name="updateprofile" style ="float:center"><a href="UpdateStaffReg.php"><font size="5em",font color="black">Edit Profile</font></a></button><br>
<button class="button6" style ="float:center"><a href="UpdatePass.php"><font size="5em",font color="black">Edit Password</font></a></button><br><br>-->



</div>

<!--div class="sidenav1" id="hh2">
 <button class="button1" style ="float:center"><a href="Delete1.php"><font size="5em",font color="black">Search Pet</font></a></button><br>
<button class="button2" style ="float:center"><a href="Delete1.php"><font size="5em",font color="black">Search PetOwner</font></a></button><br>
<button class="button3" style ="float:center"><a href="Delete1.php"><font size="5em",font color="black">Appointments</font></a></button><br>
<button class="button4" style ="float:center"><a href="Delete1.php"><font size="5em",font color="black">Vaccine Details</font></a></button><br>
<button class="button5" style ="float:center"><a href="Delete1.php"><font size="5em",font color="black">Payments</font></a></button>
<button class="button8" style ="float:center"><a href="ProductStockSelect.php"><font size="5em",font color="black">View ProductStock </font></a></button>
<button class="button9" style ="float:center"><a href="FilterProductStock.php"><font size="5em",font color="black">Search Product Details</font></a></button>-->


</div>
<!--<div class = "im">
    <p><img src="images/image2.jpg" width="198" height="254" alt="Gallery" class="left" /></p>
     <!-- <div id="view">
      </div>-->
	</div>

</body>
</html>
