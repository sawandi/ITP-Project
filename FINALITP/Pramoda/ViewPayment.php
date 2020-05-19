<?php

	if(isset($_POST['search'])){
		
	$PaymentSearch = $_POST['aname'];
	   
	$query = "select * from payments where AccountNo LIkE '%".$PaymentSearch."%'";
	$search_Result = filterTable($query);
	
	}else{
		$query = "select * from payments";
		$search_Result = filterTable($query);
	}
	
	function filterTable($query){
		require_once('connection.php');
		$filter_Result = mysqli_query($con,$query);
		return $filter_Result;
	}
   
?>
<?php
 require_once('connection.php');
 if(isset($_POST['search'])){
     $aname= $_POST['aname'];
	 
	 
	 if(empty($aname)){
		  $error = " Account Number is required";
	 }
 }
 ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Veiw Payment Details</title>
	
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
	
<link rel="stylesheet" type="text/css" href="style1.css">	
</head>
<body>

	<h2>VIEW PATMENT DETAILS PAGE<span><a href="paymentTable.php"> < Back to the PaymentList</a></span></h2>
	
	<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
	<tr>
	<th>Account Name</th>
	<th>Account Number</th>
	<th>Amount</th>
	
	</tr>
	
<?php 


	while($row = mysqli_fetch_array($search_Result)) :?>
	   <tr>
	       <td><?php echo $row['AccountName'];?></td>
	       <td><?php echo $row['AccountNo'];?></td>
	       <td><?php echo $row['Amount'];?></td>
		   
	   </tr>
  
  
<?php endwhile;?>		
	</table>
	
	   
	        </br></br></br></br>
	<form action="ViewPayment.php" method="POST" >
	<div id="form_layout">
	   <h2>VIEW PATMENT DETAILS</h2>

	   <label>Account Number:</label>
	   <input type="text" name="aname" id = "AccountNumberid" placeholder = "Account Number" autocomplete = "off" required pattern = "^[A-Za-z0-9]+"></br></br></br>
	   
	   <br/>
	  
	   
	   	</br></br></br></br>

    <input type='submit' name="search" value='VIEW DETAILS'/>
	</div>
	</form>
		<p style="color:red;font-size:20px;">		
		<?php
	     if(isset($error)){
			 echo $error;
		 }
	?>
</p>
</body>
</html>
