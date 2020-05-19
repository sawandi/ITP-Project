<?php

	//php code to delete data from mysql database

	if(isset($_POST['delete']))
	{
		require_once('connection.php');
		
		$cardno = $_POST['CardNumber'];
		
		$query = "DELETE FROM carddetails where CardNumber = '$cardno'";
		
		$result = mysqli_query($con,$query);
		
		
		if($result)
		{
			echo 'Data Deleted...!!';
		}
		else
		{
			echo 'Data Not Deleted...!!';
		}
		
		mysqli_close($con);
	}



?>



<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Delete Card Details</title>
	
	<style>
		body
		{
			background:url(images/100.jpg);
			background-size:cover;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	
     <link rel = "stylesheet" type="text/css" href = "styles/CardDetails1.css">
	
</head>
	<body>

		<h2>Card Details<span><a href="carddetails.php"> +Add Card Details List</a></span></h2>
		
			<div id = "nav">
			
				<h1 ><b><u>Delete Card Dtails</u></b></h1></br></br>
			
				<form id ="deletecarddetails"  action="deletecarddetails.php" method="post">
					
					<lable for = "deleteCD">Delete Account Number :</lable><br>
					<input type = "text" name = "CardNumber" id ="CardNumber"  placeholder="Select Card Number" required readonly></br><br>
					
					<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you sure?</b></font></br>
					
					<input type = "submit" name = "signup" value = "DELETE DETAILS">	
					
		
				</form>
				
			</div>
			
			
			
			
			
			<!--<div id = "direction">
				</br></br>
				<h2><marquee direction = "right">*****YOU CAN DELETE VACCINATION INFO*****</marquee></h2>
				</br></br>
			</div>-->
			
			<!--<div class = "col-md-9" id = "output">
			
			</div>
		
			<script>
			
				$(document).ready(function(){
					
					$("#output").load("viewVaccinationList.php");
					
					//delete
					
					$(document).on("click",".del",function()
					{
						var del = $(this);
						var dltVaccinateId =$(this).attr("data-id");
						$("#dltVId").val(dltVaccinateId);
						
					
					});
				});
			
			
			</script>-->

	</body>

</html>	