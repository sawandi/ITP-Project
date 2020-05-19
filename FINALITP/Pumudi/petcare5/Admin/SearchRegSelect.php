
<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Search Staff Details</title>
	
	<style>
		body
		{
			background:url(images/image3.jpg);
			background-size:100% 200%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/productstockFilter1X.css">
	
	<body>
	
		
		
		<div id ="nav">
			
			<form action="" method="POST">
			
				<center><h3><font color="white">Search Staff Details</center><font/></h3>

				<lable>ProductType</lable>
				<input type="text" name="producttype" id ="ptypetype" placeholder = "Enter ProductType"/><br>
				
				<input type="submit" name="search" value="Submit">
				
			</form>

		</div>	
				<table>
					<tr>
					<th>ProductId</th>
					<th>ProductType</th>
					<th>ProductName</th>
					<th>AvailableQTY</th>
					<th>ReOrderLimit</th>
					<th>UnitPrice &#8360;  </th>
					<th>ExpiredQTY</th>
					<th>Status</th>
					<th>Action1</th>
					<th>Action</th>
					
				</tr><br>
				
				<?php
				require_once('config.php');
				if(isset($_POST['search'])){
				$producttype = $_POST['producttype'];
				$sql = "SELECT * from productstock where ProductType='$producttype' ";
				$sql_run = mysqli_query($conn,$sql);
	
				 while($row = mysqli_fetch_array($sql_run))
				 {
					
				
					echo "<tr>";

					echo "<td>" . $row['ProductId'] . "</td>";

					echo "<td>" . $row['ProductType'] . "</td>";

					echo "<td>" . $row['ProductName'] . "</td>";

					echo "<td>" . $row['AvailableQTY'] . "</td>";
		
					echo "<td>" . $row['ReOrderLimit'] . "</td>";
		
					echo "<td>" . $row['UnitPrice'] . "</td>";
		
					echo "<td>" . $row['ExpiredQTY'] . "</td>";
		
					echo "<td>" . $row['Status'] . "</td>";
		
					echo "<td><input type=\"button\" value=\"Update\" name=\"update\" onclick=\"location.href = 'UpdateProductStock.php?id=" . $row['ProductId'] . "';\"></td>";
		
					echo "<td><span class='gylphicon glyphicon-plus'></span><input type=\"button\" value=\"Delete\" name=\"delete\" onclick=\"location.href = 'Delete.php?id=" . $row['ProductId'] . "';\"></td>";

					echo "</tr>";	 
			 
		 }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>	

			
	</body>
	
</html>
		
	
	
	
