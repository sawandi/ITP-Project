<?php
    
    if(isset($_POST['update'])){
	$VaccineToupdate = $_POST['vid'];
	$charge = $_POST['Charge'];
	
	$user = 'root';
    $pw = '';
    $db = 'animalcare';
    $con = mysqli_connect("localhost",$user,$pw, $db);

	$sql= "UPDATE vaccines SET Charge='$charge' WHERE VaccineId='$VaccineToupdate' ";
	$result= mysqli_query($con,$sql);
	
	$query= "select `VaccineId`, `VaccineName`, `Charge`, `TimePeriod`, `Cat`, `Dog` from vaccines WHERE VaccineId='$VaccineToupdate'";
	$search_Result = filterTable($query);

	   }
	else
	{
		
	   $query = "select `VaccineId`, `VaccineName`, `Charge`, `TimePeriod`, `Cat`, `Dog` from vaccines";
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
 if(isset($_POST['update'])){
     $vid= $_POST['vid'];
	 $charge= $_POST['Charge'];
	 $length= strlen($vid);
	 
	 if(empty($vid)){
		  $error = " Vaccine ID is required";
	 }else if($length>10){
		 $error = " Vaccine ID is too long";
	 }
	 else if(empty($charge)){
		  $error = " Vaccine Charge is required";
	 }
 }

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<title>UPDATE VACCINE ITEMS</title>
<meta name="robots" content="noindex,nofollow">
<style>
		body
		{
			background:url(images/pic3.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
		}
</style>
</head>
<body>


</br></br></br></br>
<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
	<tr>
	<th>Vaccine Id</th>
	<th>Vaccine Name</th>
	<th>Charge</th>
	<th>Time Period</th>
    <th>Cat</th>
	<th>Dog</th>
	
	</tr>
	
	
	<?php while($row = mysqli_fetch_array($search_Result)) :?>
	   <tr>
	       <td><?php echo $row['VaccineId'];?></td>
	       <td><?php echo $row['VaccineName'];?></td>
	       <td><?php echo $row['Charge'];?></td>
		   <td><?php echo $row['TimePeriod'];?></td>
		   <td><?php echo $row['Cat'];?></td>
		   <td><?php echo $row['Dog'];?></td>
		  
		  
	   </tr>
    <?php endwhile;?>
	
	</table>
	
	        </br></br></br></br>
<form action="updatevaccine.php" method="POST" >

	<div id="form_layout">
	   <h2> UPDATE VACCINE ITEM </h2>

	   <label>Vaccine ID :</label><br/>
	   <input type='text'  id='title1' name="vid" pattern="[0-9]{1,}" title="must contail numbers only"  ><br/>
	   
	   <br/>
	   <label>New Price :</label><br/>
	   <input type='text'  id='title1' name="Charge"  ><br/>
	   
	   <br/>
	   
	   	</br></br></br></br>

    <input type='submit' value='UPDATE VACCINE' name="update">
	</div>
	</form>
	<span><h3 ><font size="5px"><a href = "../Home/MainHomeReceptionist.php">Home<a></font><h3></span>
<p style="color:red;font-size:20px">		
		<?php
	     if(isset($error)){
			 echo $error;
		 }
	?>
</p>	
	
</body>
</html>