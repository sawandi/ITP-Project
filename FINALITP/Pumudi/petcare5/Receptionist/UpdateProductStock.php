<?php
require_once('config.php');

$id = $_GET['id'];
$getdata = mysqli_query($conn, "Select * from productstock where ProductId='$id'");
$rows = mysqli_fetch_array($getdata);
$qty = $rows['AvailableQTY'];
$relimit = $rows['ReOrderLimit'];
$unitpr = $rows['UnitPrice'];
$exp = $rows['ExpiredQTY'];

if(isset($_POST['update'])){
	//echo "Updated Successfully";
	
	$prodId = $_POST['productid'];
	$avilqty = $_POST['availableqty'];
	$reolimit = $_POST['reorderlimit'];
	$utprice= $_POST['unitprice'];
	$expdqty = $_POST['expiredqty'];
	
	
	$sql = "UPDATE productstock SET AvailableQTY ='$avilqty', ReOrderLimit ='$reolimit', UnitPrice ='$utprice', ExpiredQTY ='$expdqty' WHERE ProductId = '$prodId' && Status=1";
	
	mysqli_query($conn,$sql);
	echo "<script>alert('Updated Successfully');window.location.href='ProductStockSelect.php';</script>";
}
?>



<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title> Update Product Stock</title>
	
	<style>
		body
		{
			background:url(images/image8.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/productstock2XXX.css">
	
</head>
	<body>
	
	<form id ="regForm" onsubmit = "return formValidation()" action="" method="post">
		
				

			<div id ="nav">
			
				<h3><font color="white">Update product items<font/></h3>
				
				<lable>ProductId</lable>
				<input type="text" name="productid" id ="preid" value="<?php echo $id; ?>" placeholder = "Product ID" align="right" width="48" height="48"  required></br>
				
				<!--<input type="text" name="producttype" id ="ptypeid" placeholder = "Product Type" required></br>-->
				
				<!--<input type="text" name="productname" id="pnameid" placeholder = "Product Name" required></br>-->
				
				<lable>AvailableQTY</lable>
				<input type="text" name="availableqty" value="<?php echo $qty; ?>" id = "aid" placeholder = "Available QTY" align="right"  required></br>
				
				<lable>ReOrderLImit</lable>
				<input type="text" name="reorderlimit" id="reorderid" value="<?php echo $relimit; ?>" placeholder = "Re-OrderLImit" required></br>
				
				<lable>UnitPrice</lable>
				<input type="text" name="unitprice" id = "upid" value="<?php echo $unitpr; ?>" placeholder = "UnitPrice" required></br>
					
				<lable>ExpiredQTY</lable>
				<input type="text" name="expiredqty" id="eid" value="<?php echo $exp; ?>"  placeholder = "Expired QTY" ></br>
				
				<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you Update details?</b></font></br>
				
				<input type="submit" id ="submit" name="update" value="Update Details">
								

			</div>

		</form>
		
		
	</body>
	
</html>
		
	
	
	
