<!DOCTYPE html>
<html>
<head>
	<title>Card Details tables</title>
	
	<style>
		body
		{
			background:url(images/100.jpg);
			background-size:100% 350%;
			background-repeat:no-repeat;
				   
		}
	</style>
	

<link rel = "stylesheet" type="text/css" href = "styles/table1.css">


</head>
<body>
	<h2>Card Details<span><a href="carddetails.php"> +Add Card Details List</a></span></h2>
	
		<center><h1><font color="white"><b>Card Details tables</center></b><font/></h1>
		<div class="sidenav">

<!--<button class="button1" style ="float:center"><a href="Delete.php"><font size="5em",font color="black">Delete</font></a></button>-->
<!--<button class="button2" style ="float:center"><a href="UpdateProductStock.php"><font size="5em",font color="black">Update</font></a></button-->
<!--<button class="button1" style ="float:center"><a href="PaymentDetails.php"><font size="5em",font color="black">Add New Card Details</font></a></button>-->
<!--<button class="button2" style ="float:center"><a href="carddetails.php"><font size="5em",font color="black">Delete Card Details</font></a></button>-->

</div>
<br>
</body>

</html>
<?php
			
	
	require_once('connection.php');
	
	
//$sql = "SELECT CardId,UserId,CardNumber,CVVCode,BankName,ExpireDate,CardType FROM carddetails";
$sql = "SELECT * FROM carddetails";
$result = mysqli_query($con,$sql);
	
if (mysqli_num_rows($result) > 0) {
 
	echo "<table border='1'>
	<tr>
	<th>CardId</th>
	<th>CVVCode</th>
	<th>BankName</th>
	<th>ExpireDate</th>
	<th>CardType</th>
	<th>Action1</th>
	<th>Action2</th>
	<th>Action3</th></tr>";
	
	
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      
			
		echo "<tr>";

		echo "<td>" . $row['CardId'] . "</td>";

		//echo "<td>" . $row['UserId'] . "</td>";//

		echo "<td>" . $row['CVVCode'] . "</td>";

		echo "<td>" . $row['BankName'] . "</td>";
		
		echo "<td>" . $row['ExpireDate'] . "</td>";
		
		//echo "<td>" . $row['Type'] . "</td>";//
		
		echo "<td>" . $row['CardType'] . "</td>";
		
		//echo "<td>" . $row['Action1'] . "</td>";//
		
		//echo "<td>" . $row['Action2'] . "</td>";//
		
		
		
		
		echo "<td><input type=\"button\" value=\"Update\" name=\"update\" onclick=\"location.href = 'UpdateCarddetails1.php?id=" . $row['CardId'] . "';\"></td>";
		
		echo "<td><input type=\"button\" value=\"Delete\" name=\"delete\" onclick=\"location.href = 'deletecarddetails.php?id=" . $row['CardId'] . "';\"></td>";
		
		echo "<td><input type=\"button\" value=\"Search\" name=\"search\" onclick=\"location.href = 'ViewCard.php?id=" . $row['CardId'] . "';\"></td>";

		echo "</tr>";	
  }
    echo "</table>";
} else {
    echo "0 results";
}
$con->close();
?>