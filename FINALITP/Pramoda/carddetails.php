<?php

	require_once('connection.php');
	
	if(isset($_POST['signup']))
	{
		//$CardId =$_POST['CardId'];
		$UserId =$_POST['userId'];
		$CardType = $_POST['CardType'];
		$Bankname = $_POST['Bankname'];
		$CardNumber = $_POST['CardNumber'];
		$CVVCode = $_POST['CVVCode'];
		$ExpiredDate = $_POST['ExpiredDate'];
		
		//echo $CardId;
		//echo $UserId;
		/*echo $CardType;
		echo $Bankname;
		echo $CardNumber;
		echo $CVVCode;
		echo $ExpiredDate;*/
		
		
		
		$sql = "INSERT INTO carddetails(PetOwnerId,CardNumber,CVVCode,BankName,ExpireDate,CardType) VALUES ('$UserId','$CardNumber','$CVVCode','$Bankname','$ExpiredDate','$CardType')";
	
		//echo $sql;
		mysqli_query($con,$sql);
	}

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Card Details</title>
	
	<style>
		body
		{
			background:url(images/100.jpg);
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
	
	<link rel = "stylesheet" type="text/css" href = "styles/CardDetails.css">
	
</head>
	<body>
	  <h2>Card Details<span><a href="carddetailstables.php"> < Back to the Card Details List</a></span></h2>
		<form id ="regForm"  action="carddetails.php" method="post" autocomplete = "on">
		
			

			<div id ="nav">
			
				<h1><center><b><u>Card Details</u></b></center></h1>
				
				<input type="text" name="userId" id="userId" placeholder = "UserId" required ></br>

				<input type="text" name="CardType" id ="cardtypeid" placeholder = "Card Type" required pattern = "^[A-Za-z]+"></br>
				<!--<span id = "ferr"><?php echo $ctErr?></span>-->
				
				<input type="text" name="Bankname" id="banknameid" placeholder = "Bank name" required pattern = "^[A-Za-z]+"></br>
				<!--<lable><?php echo $bnErr?></lable>-->
				
				<input type="number" name="CardNumber" id = "cardnumberid" placeholder = "Card Number" autocomplete = "off" required pattern ="^[0-9]+"></br>
												
				<input type="number" name="CVVCode" id = "cvvcodeid" placeholder = "CVV Code" maxlength="3" autocomplete = "off"  required ></br>
								
				<input type="date" name="ExpiredDate" id="expireddateid" placeholder = "Expired Date" autocomplete = "off" required pattern = "^[0-9]+"></br>
				<!--<lable><?php echo $usnErr?></lable>--><br>
							
				
				
				
				<input type="submit" id ="submit" name="signup" value="Save Details">
								

			</div>

				<a href="#" onClick="autoFill(); return true;">DEMO</a>
				
		</form>
		<script type="text/javascript">
		function autoFill(){
			document.getElementById('cardtypeid').value="Debit";
			document.getElementById('banknameid').value="BOC";
			document.getElementById('cardnumberid').value="001388";
			document.getElementById('cvvcodeid').value="388";
			document.getElementById('expireddateid').value="2019-10-02";
		}
		
		</script>
	</body>
	
</html>