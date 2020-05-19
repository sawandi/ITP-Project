<?php

//function formValidation()



	require_once('connection.php');
	
	//$PaymentId =$_POST['PaymentId'];
	//$OrderId =$_POST['OrderId'];
	//$CardId =$_POST['CardId'];
	//$AppoinmentId =$_POST['AppoinmentId'];
	$AccountNo = $_POST['AccountName'];
	$AccountName = $_POST['AccountNumber'];
	$Amount = $_POST['Amount'];
	
	
	//echo $PaymentId;
	//echo $OrderId;
	//echo $CardId;
	//echo $AppoinmentId;
   	//echo $Type;
	//echo $AccountNo;
	//echo $AccountName;
	//echo $Amount;
	
	
	
	
	$sql = "INSERT INTO payments(Amount,AccountNo,AccountName) VALUES ('$Amount','$AccountNo','$AccountName')";
	mysqli_query($con,$sql);
	//}
	///$sql = "SELECT PaymentId FROM payments where CardId = '$CardId'";///
	/*$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	
	//echo "<br>".$row['UserId'];
	
	$sql1 = "INSERT INTO userlogindetails(UserId,Username,Password,UserType) VALUES (".$row['UserId'].",'$username','$hashed','Pet Owner')";
	mysqli_query($con,$sql1);
	*/
	
	
	
	
	
?>	

<!--<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>PaymentDetails</title>
	
	<style>
		body
		{
			background:url(images/33.png);
			background-size:cover;
			background-repeat:repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/displayDetails.css">
	
</head>
	<body>
	
		<form id ="regForm"  action="" method="post">
		
			

			<div id ="nav">
			
				<!--<h3>PaymentDetails</h3>

				
				<lable for="Account Name"><b><?php echo $AccountNo?></b></lable>
				
			
				<br><br>
				<lable for="Account Number"><b><?php echo $AccountName?></b></lable>
				

				<br><br>
				<lable for="Amount"><b><?php echo $Amount?></b></lable>
				
			
				
				<br><br>
				
				
				<?php
				
					echo "<script>
				
						alert('Your details saved successfully');
					
						</script>";
							
				?>
					
				<p id = "pr"><b>Please save  your Payment details here...</b></p> 
				
				<button id="btnpet" href = Carddetails.php>Card Details</button>

			</div>

		</form>
		
	</body>
	
</html>-->