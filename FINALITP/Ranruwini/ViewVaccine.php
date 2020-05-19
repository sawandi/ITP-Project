<?php

	if(isset($_POST['search'])){
		
	$VaccineToSearch = $_POST['vname'];
	   
	$query = "select * from vaccines where VaccineName LIkE '%".$VaccineToSearch."%'";
	$search_Result = filterTable($query);
	
	}else{
		$query = "select * from vaccines";
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
     $vname= $_POST['vname'];
	 
	 
	 if(empty($vname)){
		  $error = " Vaccine Name is required";
	 }
 }
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<title>VIEW VACCINE ITEMS</title>
<meta name="robots" content="noindex,nofollow">
<style>
		body
		{
			background:url(images/animals.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
		}
</style>
</head>
<body>

	<span><h3 ><font size="5px"><a href = "../Home/MainHomeReceptionist.php">Home<a></font><h3></span>
	<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
	<tr>
	<th>Vaccine Id</th>
	<th>Vaccine Name</th>
	<th>Charge</th>
	<th>Time Period</th>
    <th>Cat</th>
	<th>Dog</th>
	<th>Status</th>
	</tr>
	
<?php 


	while($row = mysqli_fetch_array($search_Result)) :?>
	   <tr>
	       <td><?php echo $row['VaccineId'];?></td>
	       <td><?php echo $row['VaccineName'];?></td>
	       <td><?php echo $row['Charge'];?></td>
		   <td><?php echo $row['TimePeriod'];?></td>
		   <td><?php echo $row['Cat'];?></td>
		   <td><?php echo $row['Dog'];?></td>
		   <td><?php echo $row['Status'];?></td>
	   </tr>
  
  
<?php endwhile;?>		
	</table>
	
	   	</br></br></br></br>
			<h2 ><marquee direction="right">**** VIEW VACCINE ITEMS PAGE ****</marquee></h2>
	        </br></br></br></br>
	<form action="ViewVaccine.php" method="POST" >
	<div id="form_layout">
	   <h2> VIEW VACCINE ITEM </h2>

	   <label>Vaccine Name :</label>
	   <input type='text'  id='title1' name="vname" pattern="[a-zA-Z]{1,}" title="Please enter letters only" ><br/>
	   
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
