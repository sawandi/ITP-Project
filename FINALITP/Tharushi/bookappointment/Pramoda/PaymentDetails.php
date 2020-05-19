<?php

	if(isset($_POST['ok']))
	{
		require_once('connection.php');
		
		//$PaymentId =$_POST['PaymentId'];
		//$OrderId =$_POST['OrderId'];
		//$CardId =$_POST['CardId'];
		//$AppoinmentId =$_POST['AppoinmentId'];
		$AccountNo = $_POST['AccountNumber'];
		$AccountName = $_POST['AccountName'];
		$Amount = $_POST['Amount'];
		
		
		//echo $PaymentId;
		//echo $OrderId;
		//echo $CardId;
		//echo $AppoinmentId;
		//echo $Type;
		//echo $AccountNo;
		//echo $AccountName;
		//echo $Amount;
		
		$sql = "INSERT INTO payments(`Amount`,`AccountNo`,`AccountName`) VALUES ('$Amount','$AccountNo','$AccountName')";
		mysqli_query($con,$sql)or die ("insertion failed".mysqli_error($con));
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
	
	<title>Payment Details</title>
	
	<style>
		body
		{
			background:url(images/33.png);
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
	
	<link rel = "stylesheet" type="text/css" href = "styles/Paymentdetails.css">
	
</head>
	<body>
	<h2>Payment Details<span><a href="paymentTable.php"> < Back to the PaymentList</a></span></h2>
	
		<form id ="regForm"  action="PaymentDetails.php" method="post" autocomplete = "on">
		
			

			<div id ="nav">
			
				<h1><b><u>Payment Details</b></u></h1></br>
				

				<input type="text" name="AccountName" id ="AccountNameid" placeholder = "Account Name" required pattern = "^[A-Za-z]+"></br></br></br>
				<!--<span id = "ferr"><?php echo $cnErr?></span>-->

				<input type="text" name="AccountNumber" id = "AccountNumberid" placeholder = "Account Number" autocomplete = "off" required pattern = "^[A-Za-z0-9]+"></br></br></br>
				
				<input type="text" name="Amount" id = "Amountid" placeholder = "Amount" autocomplete = "off" required pattern = "^[0-9]+"></br></br>
											
				 
							
				
				
				
				
				<input type="submit" id ="submit" name="ok" value="PAY">
								

			</div>

		<a href="#" onClick="autoFill(); return true;">DEMO</a>

		</form>
		<script type="text/javascript">
		function autoFill(){
			document.getElementById('AccountNameid').value="Saving";
			document.getElementById('AccountNumberid').value="000156482";
			document.getElementById('Amountid').value="1500.00";
			
		}
		
		</script>
	
		
		
	</body>
	
</html>