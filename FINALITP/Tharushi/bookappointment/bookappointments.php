<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book an appointment</title>
	<link rel="stylesheet" href="styles/orderstyle1.css">
	<script src="form.js"></script>
	
	
</head>
<body>

	<span><h4><a href = "./bookappointment/Tharushi/Home/MainHomePetOwner.php"><font color = "white">Home</font><a><h4></span>
	
	<div id="wrapper">
		<form name="order-submit" onsubmit = "return formValidation()" action="appointmentinsert.php" method="post">
		<h2 align="center">BOOK AN APPOINTMENT</h2>

			<div id="details">
				<h3>Your Details</h3>
				
				<div class="row">
					<label for="firstname">User Id</label>
					<input type="text" name="UserId" id ="UserId" placeholder = "User Id " required>
				</div>
				
				<div class="row">
					<label for="firstname">First Name</label>
					<input type="text" name="firstname" id ="firstname" placeholder = "First Name" required>
				</div>
				
				
				<div class="row">
					<label for="lastname">Last Name</label>
					<input type="text" name="lastname" id="lastname" placeholder = "Last Name" required>
				</div>
				
				
				<div class="row">
					<label for="email">E-mail</label>
					<input type="email" pattern="[^ @]*@[^ @]*" name="email" id="email" placeholder = "example@domain.com" required>
				</div>
			</div>	
			
			
			<div id="details">
				<h3>Appointment Details</h3>
				<div class="row">
					<label for="service">Service</label>
					<select name="service" required>
					<option value=""hidden>Select Service</option>
					<option value="vaccine">Vaccine</option>
					<option value="scan">Scan</option>
					<option value="other">Other</option>
					</select></br>
				</div>
				
				
				<div class="row">
					<label for="adate">Date</label>
					<input type="date" name="adate" id="adate" placeholder = "Date" required>
				</div>
				
				
				<div class="row">
					<label for="atime">Time</label>
					<input type="time" name="atime" id="atime" placeholder = "Time" required></br>
				</div>
			</div>
			
			
			
			
			<div id="address">
				<h3>Pet Details</h3>
				
				<div class="row">
					<label for="petage">Pet Age(months)</label>
					<input type="number" name="petage" id="petage" value="1" min="1" max="30" placeholder = "Pet Age(months)">
				</div>
				
				<div class="row">
					<label for="petgender">Pet Gender</label>
					<select name="petgender" id="pgender">
					<option value=""hidden>Pet Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					</select></br>
				</div>
				
			</div>

			<div id="buyButton">
				<input type="submit" id ="submit" name="signup" value="SAVE" >
				
			</div>
			
			
				<a href="#" onClick="autoFill(); return ture;">DEMO</a>
			
			<!--<div id="buyButton">
				<input type="button" id ="button" name="signup" value="CANCEL">
			</div>-->
			
			<a href = "Pramoda/PaymentDetails.php">Give Payments</a>
			

		</form>
		
		<script type="text/javascript">
function autoFill(){
	document.getElementById('UserId').value="1";
	document.getElementById('firstname').value="himasha";
	document.getElementById('lastname').value="rubasinghe";
	document.getElementById('email').value="hima@gmail.com";
	document.getElementById('adate').value="2019-10-20";
	document.getElementById('atime').value="01:00:00";
	document.getElementById('petage').value="5";
	document.getElementById('pgender').value="male";
	
	
}
</script>
	</div>
</body>
</html>


			
		