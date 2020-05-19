
<?php
session_start();
require_once('config.php');

//$id = $_SESSION['userid'];

$un =	$_SESSION["username"];

//$getdata = mysqli_query($conn, "Select * from staffdetails where StaffId='$un'");
$getdata = mysqli_query($conn, "Select * from staffdetails s,userlogindetails u where s.StaffId=u.UserId and u.Username = '$un'");
$rows = mysqli_fetch_array($getdata);
//$getdata1 = mysqli_query($conn, "Select * from userlogindetails where UserId='$id'");
//$rows1 = mysqli_fetch_array($getdata1);

$id = $rows['StaffId'];
$fn = $rows['FirstName'];
$ln = $rows['LastName'];
$ni = $rows['NIC'];
$ea = $rows['EmailAddress'];
$pn = $rows['PhoneNumber'];
$gd = $rows['Gender'];
$phn = $rows['PhoneNumber'];
$ql = $rows['Qualification'];
//$un = $rows['UserName'];
//$pw = $rows1['Password'];


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
//$copw =$_POST['confirmpw'];
//$gd = $_POST['gender'];
//$ut = $_POST['usertype'];


	//$sql = "UPDATE staffdetails SET NIC ='$nic',FirstName ='$fname', LastName ='$lname', EmailAddress ='$email',PhoneNumber ='$phone',Qualification='$qulif',Gender ='$gd'  WHERE StaffId = '$StaId'";
	//mysqli_query($conn,$sql);
	

		
	//$sql1 = "UPDATE userlogindetails SET Username ='$username' ,Password ='$pw' WHERE UserId ='$StaId'";
	//mysqli_query($conn,$sql1);
		
	
	echo "<script>alert('Updated Successfully');window.location.href='AdminProfile.php';</script>";
	


	
	//}	
	?>
	


<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Update UserDetails</title>
	
	<style>
		body
		{
			background:url(images/image8.jpg);
			background-size:100% 155%;
			background-repeat:no-repeat;
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/pwregisXY12.css">
	
</head>
	<body>
	
		<form id ="regForm" onsubmit = "return formValidation()" action="StaffRegUpdate.php" method="post">
		
			
<form>
			<div id ="nav">
			<center><h3><font color="white">Update Details</center></font></h3>
			
			
			
		<div class="horizontal-group">
				<div class="form-group left">
				<input type="text" name="firstname" id ="fnameid"  value="<?php echo $fn; ?>"	 placeholder = "First Name" required>
				</div>
				<div class="form-group rigth">
				<input type="text" name="lastname" id="lnameid" value="<?php echo $ln; ?>" placeholder = "Last Name" required>
				</div>
				</div>
				
			<div class="horizontal-group">
			<div class="form-group left">
			<!--<label><font size="4em",font color="white",width="100px">UserType</font></label>-->
		
			<select name="usertype" id='state'>
			<!--<center><font size="4em"><b>UserType</b></font></center>-->
			
			<option>UserType</option>
			<option>Admin</option>
			<option>Receptionist</option>
			</select>
			</div>
			</div>
			
				<!--<div class="horizontal-group">
    <div class="form-group left">
      <center><label class="label-title"><font size="4em",font color="white">Gender</font></label></center>
        <div class="input-group">
            <label for="male">
                <input type="radio" name="gender" value="male" id="male"><font size="4em",font color="white">Male</font></label>
            <label for="female">
                <input type="radio" name="gender" value="female" id="female"><font size="4em",font color="white">Female</font></label>
        </div>
	</div>
	</div>-->
	<div class="horizontal-group">
				<div class="form-group left">
				<input type="text" name="gender" id = "gid" value="<?php echo $gd; ?>"  placeholder = "Gender" required>
				</div>
				</div>
	
			<br>	
				<div class="horizontal-group">
				<div class="form-group left">
				<input type="text" name="NIC" id = "nicid"value="<?php echo $ni; ?>"  placeholder = "NIC NO" required>
				</div>
				
				<div class="form-group rigth">
				<input type="email" name="email" id="emailid" value="<?php echo $ea; ?>" placeholder = "E-mail Address">
				</div>
				</div>
				
				<div class="horizontal-group">
				<div class="form-group left">
				<input type="text" name="phoneno" id = "pnoid" value="<?php echo $phn; ?>" placeholder = "Phone Number">
				</div>
				
				<div class="form-group rigth">
				<input type="text" name="qualification"  id ="qualid" value="<?php echo $ql; ?>"  placeholder = "Qualification" required>
				</div>
				</div>

				<!--<div class="horizontal-group">
				<div class="form-group left">
				<input type="text" name="username" id="unid" placeholder = "UserName"  >
				</div>

				<div class="form-group rigth">
				<input type="password" name="pw" id ="pwid" placeholder = "Password" >
				</div>-->
				
		
				<br>
				<!--<p><center><font size ="white">UserName</font></center></p>-->
				<lable>Please Check the StaffId</lable>
				<div class="horizontal-group">
				<div class="form-group rigth">
				<input type="text" name="staffid" id = "sid" value="<?php echo $id; ?>" placeholder = "StaffId" required>
				</div>
				</div>
		
				
				<div class="horizontal-group">
				<div class="form-group rigth">
				<input type ="checkbox" name = "chkbx" required><font size = "4px",font color="white"><b>Are you sure?</b></font>
				</div>
				</div>
				<br>
				<div class="horizontal-group">
				<div class="form-group rigth">
				<center><input type="submit" id ="submit" name="update" value="Submit"></center>
				</div>
				</div>
			</div>

		</form>
		
	</body>
	
</html>
		
	
	
	
