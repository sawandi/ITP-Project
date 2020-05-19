<?php

//function formValidation()



	require_once('connection.php');
	if(isset($_POST['ok'])){
	//$PaymentId =$_POST['PaymentId'];
	//$OrderId =$_POST['OrderId'];
	//$CardId =$_POST['CardId'];
	//$AppoinmentId =$_POST['AppoinmentId'];
	$CustomerName = $_POST['CustomerName'];
	$Date = $_POST['Date'];
	$Amount = $_POST['Amount'];
	//$Type=$_POST['cash'];
	
	//echo $PaymentId;
	//echo $OrderId;
	//echo $CardId;
	//echo $AppoinmentId;
   //echo $Type;
	//echo $CustomerName;
	//echo $Date;
	//echo $Amount;
	
	
	
	
	$sql = "INSERT INTO payments(Amount,CustomerName,Date) VALUES ('$Amount','$CustomerName','$Date')";
	mysqli_query($con,$sql);
	//}
	///$sql = "SELECT PaymentId FROM payments where CardId = '$CardId'";///
	/*$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	
	//echo "<br>".$row['UserId'];
	
	$sql1 = "INSERT INTO userlogindetails(UserId,Username,Password,UserType) VALUES (".$row['UserId'].",'$username','$hashed','Pet Owner')";
	mysqli_query($con,$sql1);
	*/
	
}	
	
	
	
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Cash Payment Details</title>
	
	<style>
		body
		{
			background:url(images/31.jpg);
			<!--background-size:cover;
			background-repeat:repeat;-->
			
			height: 50%; 

			  <!--Center and scale the image nicely-->
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;
				   
		}
	</style>
	
	<!--<script src = "validation_JS/jquery-3.2.1.min.js"></script>-->
	
	<link rel = "stylesheet" type="text/css" href = "styles/Cashpayment.css">
	
</head>
	<body>
	<h2>Payment Details<span><a href="paymentTable.php"> < Back to the PaymentList</a></span></h2>
	
		<form id ="regForm" onsubmit = "return formValidation()" action="" method="post" autocomplete = "on">
		
			

			<div id ="nav">
			
				<h1><acenter><b><u>Cash Payment Details</u></b></center></h1></br>
				

				<input type="text" name="CustomerName" id ="CustomerNameid" placeholder = "Customer Name" required pattern = "^[A-Za-z]+"></br></br>
				<!--<span id = "ferr"><?php echo $cnErr?></span>-->
				
				
				<input type="number" name="Amount" id = "Amountid" placeholder = "Amount"  required pattern = "^[0-9]+"></br></br>
											
				
				<input type="date" name="Date" id="expireddateid" placeholder = "Date" autocomplete = "off" required pattern = "^[A-Za-z0-9]+"></br></br>
				<!--<lable><?php echo $usnErr?></lable>--><br><br>
							
				
				
				
				<input type="submit" id ="submit" name="ok" value="PAID">
								

			</div>
			<a href="#" onClick="autoFill(); return true;">DEMO</a>

		</form>
		<script type="text/javascript">
		function autoFill(){
			document.getElementById('CustomerNameid').value="Nirmani";
			document.getElementById('Amountid').value="1500.00";
			document.getElementById('expireddateid').value="2019-10-02";
			
		}
		
		</script>
		
		
	</body>
	
</html>