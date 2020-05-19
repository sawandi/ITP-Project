<?php
 require_once('connection.php');
 if(isset($_POST['add'])){
     $vname= $_POST['VaccineName'];
	 $charge= $_POST['Charge'];
	 $duration=$_POST['TimePeriod'];
	 $cat= $_POST['cat'];
	 $dog= $_POST['dog'];
	 
	 if(empty($vname)){
		  $error = " Vaccine Name is required";
	 }
	 else if(empty($charge)){
		  $error = " Vaccine Charge is required";
	 }
	 if(empty($duration)){
		  $error = " Vaccine Time Period is required";
	 }else if((empty($cat)) && (empty($dog))){
		 $error = " Please select at least one of them";
	 }
	 
 }

?>
</br>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<!--<script src="javascript.js"></script>-->
<title>VACCINE ITEMS</title>
<meta name="robots" content="noindex,nofollow">
	<style>
		body
		{
			background:url(images/midbanner.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
		}
	</style>
</head>
<body>

<form action="vaccineinsert.php" method="POST" >
	<div id="form_layout">
	   <h2> ADD VACCINE ITEM </h2>

	   <label>Vaccine Name :</label>
	   <input type='text'  name='VaccineName' id='title1' pattern="[a-zA-Z]{1,}" title="Please enter letters only" required><br/>
	   
	   <br/>
	   
	   <label>Vaccine Charge :</label>
	   <input type='text'  name='Charge' id='title2' required><br/>
	   
	   <br/>
	
       <label>Vaccine Time Period :</label>
	   <input type='text'  name='TimePeriod' id='title3'  required ><br/>
	   
	   <br/>
	
       <label>Vaccined for : </label><br><br/>
	   <input type="checkbox" name='cat' value='cat' > Cat<br>
	   <input type="checkbox" name='dog' value='dog'> Dog<br>
	   
	</br></br></br></br>

    <input type='submit' value='ADD VACCINE' name="add">
	</div>
	       <a href="#" onClick="autoFill(); return true;">DEMO</a></br>
		   <a href="updatevaccine.php" >UPDATE VACCINE</a></br>
		   <a href="deleteVaccine.php" >DELETE VACCINE</a></br>
		   <a href="ViewVaccine.php" >VIEW VACCINE DETAILS</a>
	</form>
	   <script type="text/javascript">
	      function autoFill(){
			  document.getElementById('title1').value="Tricat";
			  document.getElementById('title2').value="700.00";
			  document.getElementById('title3').value="6 months";
			
			 for(var i=0; i<radioElements.length; i++){
				 if(radioElements[i].getAttribute('value')== 'cat'){
					 radioElements[i].checked=true;
				 }
			 }
			
			}
		</script>
	<p style="color:red;font-size:20px">
	<?php
	     if(isset($error)){
			 echo $error;
		 }
	?>
	</p>
</body>
</html>