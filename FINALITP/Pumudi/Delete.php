<?php
	
require_once('connection.php');

$id = $_GET['id'];
$getdata = mysqli_query($con, "Select * from pets where PetId='$id'");
$rows = mysqli_fetch_array($getdata);


if(isset($_POST['delete'])){
	//echo "Updated Successfully";
	
	$petId = $_POST['petid'];
	//$avilqty = $_POST['availableqty'];
	//$reolimit = $_POST['reorderlimit'];
	//$utprice= $_POST['unitprice'];
	//$expdqty = $_POST['expiredqty'];
	
	
	
	
	
	
	$sql = "DELETE FROM `pets` WHERE PetId = '$petId'" ;
	mysqli_query($con,$sql);
	


 
	
	
	if(mysqli_query($con,$sql)){
		//echo '<span style="color:white;text-align:center;font-size:1.5em;font-weight:bold;">Data Delete successfully!!!..</span>';
			//"<script>alert('Delete Successfully');window.location.href='ProductStockSelect.php';</script>";
				echo "<script>alert('Delete Successfully');window.location.href='PetSelect.php';</script>";

	}else{
		echo "Error: ". $sql ."<br>" . mysqli_error($con);
		
	}
	mysqli_close($con);
	
	




	}
?>
	

<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Delete Pets</title>
	
	<style>
		body
		{
			background:url(images/pic2.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/delete.css">
	
</head>
	<body>
	
		<form id ="regForm"  action="" method="post">
		
			

			<div id ="nav">
			
				<h3><font color="white">Delete  pets<font/></h3>
				
				<lable>PettId</lable>
				<input type="text" name="petid" id ="ptid"value="<?php echo $id; ?>"  placeholder = "Pet Id" required>
				
				<br>
				<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you Delete details?</b></font></br>
				
						<input type="submit" id ="submit" name="delete" value="Delete"><br>

			</div>

		</form>
		
	</body>
	
</html>
		
	
	
	
