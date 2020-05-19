<?php
	if(isset($_POST['update'])){
		$payment_update=$_POST['Pid'];
		$Amount=$_POST['amnt'];
		$AccNo=$_POST['AcNo'];
		$Accna=$_POST['Acname'];
		$date=$_POST['date'];

		
		$server ="localhost:3306";
		$user_name = "root";
		$password = "";
		$database ="animalcare";
		$conn = new mysqli($server,$user_name,$password,$database);
		
		$sql="UPDATE payments SET Amount='$Amount',AccountNo='$AccNo',AccountName='$Accna',Date='$date' WHERE ServiceId='$payment_update'";
		$result = mysqli_query($conn,$sql);
		
		$query="SELECT `PaymentId`,`Amount`,`AccountNo`,`AccountName`,`Date` FROM payments  WHERE PaymentId='$payment_update'";
		$search_Result = filterTable($query);
	}else{
		$query="SELECT `PaymentId`,`Amount`,`AccountNo`,`AccountName`,`Date` FROM payments ";
		$search_Result = filterTable($query);
	}
	function filterTable($query){
		$server ="localhost:3306";
		$user_name = "root";
		$password = "";
		$database ="animalcare";
		$conn = new mysqli($server,$user_name,$password,$database);
		
		$filter_Result = mysqli_query($conn,$query);
		return $filter_Result;
	}
	?>
	<?php
	
		$server ="localhost:3306";
		$user_name = "root";
		$password = "";
		$database ="animalcare";
		$conn = new mysqli($server,$user_name,$password,$database);
		
	if(isset($_POST['update'])){
		$payment_id=$_POST['Pid'];
		$Amount=$_POST['amnt'];
		$AccNo=$_POST['AcNo'];
		$Accna=$_POST['Acname'];
		$date=$_POST['date'];
		$length =strlen($payment_id);
		
		/*if(empty($payment_id)){
		  $error = " Service Charge ID is required";
	 }else if($length>10){
		 $error = " Service Charge ID is too long";
	 }
	 else if(empty($charge)){
		 $error = "Service Charge is required";
	 }*/
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>UPDATE Payment Details</title>
	
	<meta name="robots" charset="UTF-8" content="noindex,nofollow">
	<style>
			body
			{
				background:url(images/hd.jpg);
				background-size:100% 135%;
				background-repeat:no-repeat;
			}
	</style>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
<body>

		<h2>Payment Details<span><a href="paymentTable.php"> < Back to the PaymentList</a></span></h2>
	
	<header>
	</header>
	
	<main>
		

			<table class="masterlist">
				<tr>
					<th>PaymentId</th>
					<th>Amount</th>
					<th>AccountNo</th>
					<th>AccountName</th>
					<th>Date</th>

				</tr>
	
	
				<?php while($row = mysqli_fetch_array($search_Result)) :?>
				   <tr>
					   <td><?php echo $row['PaymentId'];?></td>
					   <td><?php echo $row['Amount'];?></td>
					   <td><?php echo $row['AccountNo'];?></td>
					   <td><?php echo $row['AccountName'];?></td>
					   <td><?php echo $row['Date'];?></td>
				   </tr>
				<?php endwhile;?>
	
	        </table>
			</br></br>
	
	    
			<form action="editPayment.php" method="POST" class="servform" enctype="multipart/form-data" >

			<h2> UPDATE Payment </h2>
			<hr/>
			
			<p>
			   <label><b>PaymentId:</b></label>
			   <input type='text'   name="Pid" required pattern = "^[A-Za-z0-9]+">
		   </p>
		   
		    <p>
			   <label><b>Amount:</b></label>
			   <input type='number'   name="amnt" required pattern ="^[0-9]+">
		   </p>
		   

			<p>
			   <label><b>Account No:</b></label>
			   <input type='number'   name="AcNo" required pattern ="^[0-9]+">
		   </p>
		   
		   <p>
			   <label><b>AccountName:</b></label>
			   <input type='text'   name="Acname" required pattern = "^[A-Za-z]+">
		   </p>
		   
		    
		    <p>
			   <label><b>Date:</b></label>
			   <input type='date'   name="date" required pattern = "^[0-9]+">
		   </p>
		   
		   <p>
				<label>&nbsp;&nbsp</label>
				<button type='submit' name="update">UPDATE</button>
			</p>
		</form>
	</main>
<p style="color:red;font-size:20px">		
		<?php
	     if(isset($error)){
			 echo $error;
		 }
	?>
</p>	
	
</body>
</html>