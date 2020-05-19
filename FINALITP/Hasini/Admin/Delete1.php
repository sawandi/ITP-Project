<?php
	
require_once('config.php');

$id = $_GET['id'];
$getdata = mysqli_query($conn, "Select * from staffdetails where StaffId='$id'");
$rows = mysqli_fetch_array($getdata);


if(isset($_POST['delete'])){
	//echo "Updated Successfully";
	
	$stId = $_POST['staffid'];
	
	
	
	$sql = "DELETE FROM `staffdetails` WHERE StaffId = '$stId'" ;
	mysqli_query($conn,$sql);
	
	$sql = "DELETE FROM `userlogindetails` WHERE UserId = '$stId'" ;
	mysqli_query($conn,$sql);
	


 
	
	
	if(mysqli_query($conn,$sql)){
		//echo '<span style="color:white;text-align:center;font-size:1.5em;font-weight:bold;">Data Delete successfully!!!..</span>';
			
				echo "<script>alert('Delete Successfully');window.location.href='StaffRegSelect.php';</script>";

	}else{
		echo "Error: ". $sql ."<br>" . mysqli_error($conn);
		
	}
	mysqli_close($conn);
	
	




	}
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Delete Product items</title>
	
	<style>
		body
		{
			background:url(images/images8.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/StaffReg3XX.css">
	
</head>
	<body>
	
		<form id ="regForm" onsubmit = "return formValidation()" action="" method="post">
		
			

			<div id ="nav">
			
				<h3><font color="white">Delete Staff Member<font/></h3>
				
				<lable>StaffId</lable>
				<input type="text" name="staffid" id ="stid" value="<?php echo $id; ?>"  placeholder = "Staff Id" required></br>
				
				<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you Delete details?</b></font></br>

				
						<input type="submit" id ="submit" name="delete" value="Delete"><br>

			</div>

		</form>
		
	</body>
	
</html>
		
	
	
	
