<?php

	session_start();
	
	
?>
<!Doctype html>
<html>
<head>
	      <title>Payment Type</title>
<style>

h1 {
  text-align: left;
  text-transform: uppercase;
  color: white;
}

body
		{
			background:url(images/102.jpg);
			background-size:cover;
			background-repeat:repeat;
				   
		}




</style>
<link rel = "stylesheet" type="text/css" href = "styles/select.css">
</head>
<body>
<div id ="nav">
		<form action="cardDetInsert.php" class="form" method="post">
			<div class="btn-group">
				
				<h1><b><u>Select The Payment Type</u></b></h1>
				
				
				
				<div class="btn-group">

                       <input type="button" value="CASH PAYMENT" id="btn1" name="cash" onclick="window.location.href='Cashpayment.php'" />
					   <input type="button" value="CARD PAYMENT" id="btn2" name="card" onclick="window.location.href='PaymentDetails.php'" />
                       
					   
  
                </div>
		</form>

</body>
</html>
