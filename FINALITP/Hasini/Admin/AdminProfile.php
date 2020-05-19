<?php
session_start();
require_once('config.php');
	
$un =	$_SESSION["username"];
//$id = $_SESSION['userid'];
//$getdata = mysqli_query($conn, "Select * from staffdetails where StaffId='$un'");
$getdata = mysqli_query($conn, "Select * from staffdetails s,userlogindetails u where s.StaffId=u.UserId and u.Username = '$un'");
$rows = mysqli_fetch_array($getdata);
//$rows = mysqli_fetch_assoc($getdata);

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

<title>Admin profile</title>

<link rel="stylesheet" href="styles/profX12.css" type="text/css"  />
</head>
<body>

<a href="UpdateStaffReg.php">Edit Profile</a>
<a href="UpdatePass.php">Edit Password</a>

 
<div id="wrapper">
 <center><h2>Admin Profile</center></h1>
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
 
 
	 <div class="main">
  <div class="sideb">
    <div class="header"><i class="fa fa-angle-left" aria-hidden="true"></i><span><span class="month"> </span><span class="year"></span></span><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    <div class="calender">
      <table>
        <thead>
          <tr class="weedays">
            <th data-weekday="sun" data-column="0">Sun</th>
            <th data-weekday="mon" data-column="1">Mon</th>
            <th data-weekday="tue" data-column="2">Tue</th>
            <th data-weekday="wed" data-column="3">Wed</th>
            <th data-weekday="thu" data-column="4">Thu</th>
            <th data-weekday="fri" data-column="5">Fri</th>
            <th data-weekday="sat" data-column="6">Sat</th>
          </tr>
        </thead>
        <tbody>
          <tr class="days" data-row="0">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="1">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="2">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="3">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="4">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
          <tr class="days" data-row="5">
            <td data-column="0"></td>
            <td data-column="1"></td>
            <td data-column="2"></td>
            <td data-column="3"></td>
            <td data-column="4"></td>
            <td data-column="5"></td>
            <td data-column="6"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="showDate"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
  </div>
  <div class="right-wrapper">
    <div class="header"><span></span></div><span class="day"></span><span class="month"></span>
  </div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 
    <script  src="function.js"></script>
 
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
	 <label for="firstname" class="label-title">Gender</label>
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


	

</div>
	<div class="sidenav" id="hh1">
<!--<button class="button7" name="updateprofile" style ="float:center"><a href="UpdateStaffReg.php"><font size="5em",font color="black">Edit Profile</font></a></button><br>
<button class="button6" style ="float:center"><a href="UpdatePass.php"><font size="5em",font color="black">Edit Password</font></a></button><br>-->
<!--<a href="UpdateStaffReg.php">Edit Profile</a>
<a href="UpdatePass.php">Edit Password</a>-->

</div>



</div>-->
</body>
</html>
