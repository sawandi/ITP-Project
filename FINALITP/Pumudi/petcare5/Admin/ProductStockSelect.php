<!DOCTYPE html>
<html>
<head>
	<title>Product Stock</title>
	
	<style>
		body
		{
			background:url(images/image8.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
				   
		}
	</style>
	

<link rel = "stylesheet" type="text/css" href = "styles/table.css">


</head>
<body>
		<center><h1><font color="white"><b>Product Stock</center></b><font/></h1>
		<div class="sidenav">

<!--<button class="button1" style ="float:center"><a href="Delete.php"><font size="5em",font color="black">Delete</font></a></button>-->
<!--<button class="button2" style ="float:center"><a href="UpdateProductStock.php"><font size="5em",font color="black">Update</font></a></button-->
<button class="button1" style ="float:center"><a href="ProductStock.php"><font size="5em",font color="black">Add New Product</font></a></button>
<button class="button2" style ="float:center"><a href="FilterProductStock.php"><font size="5em",font color="black">Search Product</font></a></button>

</div>
<br>
</body>

</html>
<?php
			
	
	require_once('config.php');
	
	
$sql = "SELECT ProductId, ProductType,ProductName,AvailableQTY,ReOrderLimit,UnitPrice,ExpiredQTY,Status FROM productstock";
$result = $conn->query($sql);
	
if ($result->num_rows > 0) {
 
	echo "<table border='1'>
	
	<th>ProductId</th>
	<th>ProductType</th>
	<th>ProductName</th>
	<th>AvailableQTY</th>
	<th>ReOrderLimit</th>
	<th>UnitPrice Rs:</th>
	<th>ExpiredQTY</th>
	<th>Status</th>
	<th>Action1</th>
	<th>Action2</th></tr>";
	
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<tr><td>".$row["ProductId"]."</td><td>".$row["ProductType"]."</td><td>".$row["ProductName"]."</td></tr>"."</td><td>".$row["AvailableQTY"]."</td></tr>"."</td><td>".$row["ReOrderLimit"]."</td></tr>"."</td><td>".$row["UnitPrice"]."</td></tr>"."</td><td>".$row["ExpiredQTY"]."</td></tr>"."</td><td>".$row["Status"]."</td></tr>";
			
		echo "<tr>";

		echo "<td>" . $row['ProductId'] . "</td>";

		echo "<td>" . $row['ProductType'] . "</td>";

		echo "<td>" . $row['ProductName'] . "</td>";

		echo "<td>" . $row['AvailableQTY'] . "</td>";
		
		echo "<td>" . $row['ReOrderLimit'] . "</td>";
		
		echo "<td>" . $row['UnitPrice'] . "</td>";
		
		echo "<td>" . $row['ExpiredQTY'] . "</td>";
		
		echo "<td>" . $row['Status'] . "</td>";
		
		echo "<td><input type=\"button\" value=\"Update\" name=\"update\"  onclick=\"location.href = 'UpdateProductStock.php?id=" . $row['ProductId'] . "';\"></td>";
		
		echo "<td><input type=\"button\" value=\"Delete\" name=\"delete\" onclick=\"location.href = 'Delete.php?id=" . $row['ProductId'] . "';\"></td>";

		echo "</tr>";	
  }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>