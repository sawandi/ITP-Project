<?php
	
require_once('config.php');

$id = $_GET['id'];
$getdata = mysqli_query($conn, "Select * from productstock where ProductId='$id'");
$rows = mysqli_fetch_array($getdata);
//$qty = $rows['AvailableQTY'];
//$relimit = $rows['ReOrderLimit'];
//$unitpr = $rows['UnitPrice'];
//$exp = $rows['ExpiredQTY'];

if(isset($_POST['delete'])){
	//echo "Updated Successfully";
	
	$prodId = $_POST['productid'];
	//$avilqty = $_POST['availableqty'];
	//$reolimit = $_POST['reorderlimit'];
	//$utprice= $_POST['unitprice'];
	//$expdqty = $_POST['expiredqty'];
	
	
	
	
	
	
	$sql = "DELETE FROM `productstock` where ProductId='$prodId'";
	mysqli_query($conn,$sql);
	


 
	
	
	if(mysqli_query($conn,$sql)){
		//echo '<span style="color:white;text-align:center;font-size:1.5em;font-weight:bold;">Data Delete successfully!!!..</span>';
			//"<script>alert('Delete Successfully');window.location.href='ProductStockSelect.php';</script>";
				echo "<script>alert('Delete Successfully');window.location.href='ProductStockSelect.php';</script>";

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
			background:url(images/image8.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/productstock3XY.css">
	
</head>
	<body>
	
		<form id ="regForm" onsubmit = "return formValidation()" action="" method="post">
		
			

			<div id ="nav">
			
				<h3><font color="white">Delete  product items<font/></h3>
				
				<lable>ProductId</lable>
				<input type="text" name="productid" id ="ptypeid"value="<?php echo $id; ?>"  placeholder = "Product Id" required>
				
				
				<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you Delete details?</b></font></br>
				
						<input type="submit" id ="submit" name="delete" value="Delete"><br>

			</div>

		</form>
		
	</body>
	
</html>
		
	
	
	
