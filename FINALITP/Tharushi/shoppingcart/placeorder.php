<!--?=template_header('Place Order')?-->
<?include $page . 'cart.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>order details</title>
	<link rel="stylesheet" href="css/orderstyle1.css">
	<script src="form.js"></script>
</head>
<body>
	<div id="wrapper">
		<form name="order-submit" onsubmit = "return formValidation()" action="addnew.php" method="post">
<h1 align="center">Order Has Been Placed</h1>
<h4>Thank you for ordering with us, we'll contact you by email with your order details.</h4>
			<div id="details">
				<h3>Fill Your Order Details Now</h3>
				
				<div class="row">
					<label for="UserId">User Id</label>
					<input type="text" name="UserId" id="UserId" placeholder="user id ">
				</div>
				
				<div class="row">
					<label for="name">Full Name</label>
					<input type="text" name="fullname" id="fullname" placeholder="First and Last name">
				</div>
				
				<div class="row">
					<label for="email">E-mail</label>
					<input type="text" name="email" id="email" placeholder="example@domain.com">
				</div>
				
				<div class="row">
					<label for="phone">Phone</label>
					<input type="tel"  name="phone" id="phone" placeholder="+99(99)9999-9999">
				</div>
				
				<div class="row">
					<label for="address">Address</label>
					<textarea name="address" id="address"></textarea>
				</div>
	
				<div class="row">
					<label for="amount">Amount</label>
					<input type="text"  name="amount" id="amount" placeholder="total amount">
				</div>
				
				
				<div class="row">
					<label for="ddate">Order Date</label>
					<input type="date" name="ddate" id="ddate">
				</div>
				
			</div>
			
			<div id="buyButton">
				<input type="submit" id ="submit" value="Save Details">
			</div>
			
			<!--<div id="buyButton">
				<input type="submit" value="SAVE" >
			</div>-->

			<div id="cardDetails">
				<h3> Fill Your Payment Details Now</h3>
				<div class="row">
					<div id="cardButtons">
						
						<label for="visa"><img src="imgs/visa.png" alt="visa-logo"> VISA </label>
						<label for="amex"><img src="imgs/amex.png" alt="amex-logo"> American Express </label>
						<label for="mastercard"><img src="imgs/mastercard.png" alt="mastercard-logo"> Master Card </label>
					</div>
				</div>
			
			</div>
			
			
			<a href = "Pramoda/PaymentDetails.php">Give Payments</a>
		</form>
	</div>
</body>
</html>
<br></br>
<!--?=template_footer()?--->