<?php

//function formValidation()



	require_once('connection.php');
	
	//if(isset($_POST['signup'])){
	//$CardId =$_POST['CardId'];
	//$UserId =$_POST['UserId'];
	$CardType = $_POST['CardType'];
	$Bankname = $_POST['Bankname'];
	$CardNumber = $_POST['CardNumber'];
	$CVVCode = $_POST['CVVCode'];
	$ExpiredDate = $_POST['ExpiredDate'];
	
	//echo $CardId;
	//echo $UserId;
	echo $CardType;
	echo $Bankname;
	echo $CardNumber;
	echo $CVVCode;
	echo $ExpiredDate;
	
	
	
	$sql = "INSERT INTO carddetails(UserId,CardNumber,CVVCode,BankName,ExpireDate,CardType) VALUES ('6','$CardNumber','$CVVCode','$Bankname','$ExpiredDate','$CardType')";
	mysqli_query($con,$sql);
	
	//$sql = "SELECT UserId FROM carddetails where CardId = '$CardId'";
	//$result = mysqli_query($con,$sql);
	//$row = mysqli_fetch_assoc($result);
	
	//echo "<br>".$row['UserId'];
	
	
	
	//}
	
	
	
	
?>	

<!--<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Card Details</title>
	
	<style>
		body
		{
			background:url(images/117.jpg);
			background-size:cover;
			background-repeat:repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/displayDetails.css">
	
</head>
	<body>
	
		<form id ="regForm"  action="petRegistration.php" method="post">
		
			

			<div id ="nav">
			
				<!--<h3>Card Details</h3>

				
				<lable for="cardtype"><b><?php echo $cardtype?></b></lable>
				
			
				<br><br>
				<lable for="bankname"><b><?php echo $bankname?></b></lable>
				

				<br><br>
				<lable for="cardnumber"><b><?php echo $cardno?></b></lable>
				
			
				<br><br>
				<lable for="cvvcode"><b><?php echo $cvvcode?></b></lable>
				
				
				<br><br>
				<lable for="expireddate"><b><?php echo $exdate?></b></lable>
				<br><br>
				
				
				<?php
				
					echo "<script>
				
						alert('Your details saved successfully');
					
						</script>";
							
				?>
					
				<p id = "pr"><b>Please save  your card details here...</b></p> 
				
				<button id="btnpet" href = Carddetails.php>Card Details</button>

			</div>

		</form>
		
	</body>
	
</html>-->