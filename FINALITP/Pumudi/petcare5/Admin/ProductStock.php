<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Product Stock</title>
	
	<style>
		body
		{
			background:url(images/image8.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/productstock1.css">
	
</head>
	<body>
	
		<form id ="regForm" onsubmit = "return formValidation()" action="ProductStockInsert1.php" method="post">
		
			

			<div id ="nav">
			
				<h3><font color="white">Add  product items<font/></h3>

				<input type="text" name="producttype" id ="ptypeid" placeholder = "Product Type" required></br>
				
				<input type="text" name="productname" id="pnameid" placeholder = "Product Name" required></br>
				
				<input type="text" name="availableqty" id = "aid" placeholder = "Available QTY" required></br>
								
				<input type="text" name="reorderlimit" id="reorderid" placeholder = "Re-OrderLImit" required></br>
												
				<input type="text" name="unitprice" id = "upid" placeholder = "UnitPrice &#8360;" required></br>
								
				<input type="text" name="expiredqty" id="eid" placeholder = "Expired QTY" ></br>
				
				<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you sure?</b></font></br>
				
				<input type="submit" id ="submit" name="signup" value="Save Details">
								

			</div>

		</form>
		
	</body>
	
</html>
		
	
	
	
