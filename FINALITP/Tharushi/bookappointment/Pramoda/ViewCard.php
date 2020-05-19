<?php

	if(isset($_POST['search'])){
		
	$CardSearch = $_POST['cname'];
	   
	$query = "select * from carddetails where CardNumber LIkE '%".$CardSearch."%'";
	$search_Result = filterTable($query);
	
	}else{
		$query = "select * from carddetails";
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
     $cname= $_POST['cname'];
	 
	 
	 if(empty($cname)){
		  $error = " Card Number is required";
	 }
 }
 ?>
 
<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Veiw Card Details</title>
	
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

	<h2>VIEW CARD DETAILS<span><a href="carddetails.php"> +Add Card Details List</a></span></h2>
	
	<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
	<tr>
	<th>Card Type</th>
	<th>Bank Name</th>
	<th>Card Number</th>
	<th>Cvv Code</th>
    <th>Expire Date</th>
	
	</tr>
	
<?php 


  
			$reportTableHeader="<table border = '1'>
											<tr>
												<th>Card Type</th>
												<th>Bank Name</th>
												<th>Card Number</th>
												<th>Cvv Code</th>
												<th>Expire Date</th>
												
											</tr>";
										$report = "";
							$reportTableFooter = "</table>";
							
							if(mysqli_num_rows($search_Result)>0){
								
								while($row = mysqli_fetch_assoc($search_Result))
								{
									$report .= "<tr><td>".$row["CardType"]."</td><td>".$row["BankName"]."</td><td>".$row["CardNumber"]."</td><td>".$row["CVVCode"]."</td><td>".$row["ExpireDate"]."</td></tr>";
								}
								echo $report;
							}
							else
							{
								$report = "0 result";
								echo $report; 
							}
							
							//mysqli_close($con);
  
?>		
	</table>
	
	   	</br></br></br></br>
			
	        </br></br></br></br>
	<form action="ViewCard.php" method="POST" >
	<div id="form_layout">
	   <h2> VIEW CARD DETAILS </h2>

	   <label>Card Number :</label>
	   <!--<input type='text'  id='title1' name="cname" pattern="[a-zA-Z]{1,}" title="Please enter letters only" ><br/>-->
	   <input type="number" name="cname" id = "cardnumberid" placeholder = "Card Number" autocomplete = "off" required pattern ="^[0-9]+"></br>
	   <br/>
	  
	   
	   	</br></br></br></br>

    <input type='submit' name="search" value='VIEW DETAILS'/>
	
	<!--<button onClick="myFunction()">Print</button>
	<script>
	function myFunction(){
		window.print();
	}
	</script>-->
	
	
	
	
	</div>
	</form>
		<p style="color:red;font-size:20px;">		
		<?php
	     if(isset($error)){
			 echo $error;
		 }
	?>
</p>

			<form method ="post" action = "CardView.php">
				<input type = "hidden" name = "report" value = "<?php echo $reportTableHeader.$report.$reportTableFooter;?>">
				<input type = "submit" name = "view-report" class="btn btn-danger" value="View Report"/>
			</form>
			
			<form method ="post" action = "CardDownload.php">
				<input type = "hidden" name = "report" value = "<?php echo $reportTableHeader.$report.$reportTableFooter;?>">
				<input type = "submit" name = "download-report" class="btn btn-danger" value="Download Report"/>
			</form>

</body>
</html>
 