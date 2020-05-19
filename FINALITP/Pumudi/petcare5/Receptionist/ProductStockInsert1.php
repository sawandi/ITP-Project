
<?php
			
	
	require_once('config.php');
	
	$protype = $_POST['producttype'];
	$proname = $_POST['productname'];
	$avqty   = $_POST['availableqty'];
	$reorderl = $_POST['reorderlimit'];
	$up= $_POST['unitprice'];
	$exqty = $_POST['expiredqty'];
	//$st = $_POST['st'];
	
	
	
	
	
	$sql = "INSERT INTO productstock(ProductType,ProductName,AvailableQTY,ReOrderLimit,UnitPrice,ExpiredQTY,Status) VALUES ('$protype','$proname','$avqty','$reorderl','$up','$exqty','1')";
	
	mysqli_query($conn,$sql);
	
	//$sql = "SELECT ProductId FROM petowners where ProductName = '$proname'";
	//$result = mysqli_query($con,$sql);
	//$row = mysqli_fetch_assoc($result);
	
	if(mysqli_query($conn,$sql)){
		//echo "New record created successfully";
		//echo "<script>							
		 //alert('Details Save Successfully');
		 echo "<script>alert('Details save Successfully');window.location.href='ProductStockSelect.php';</script>";
		//</script>";
		
	
	}else{
		echo "Error: ". $sql ."<br>" . mysqli_error($conn);
		
	}
	mysqli_close($conn);
	//echo "<br>".$row['ProductId'];
	
?>