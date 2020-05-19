<?php
if(isset($_POST['deleterecord'])){
                $user = 'root';
                $pw = '';
                $db = 'animalcare';
                $con = mysqli_connect("localhost",$user,$pw, $db);

				$VACCINE_ID = $_POST['vaccineid'];
				
				$sql = "DELETE FROM vaccines WHERE VaccineId=$VACCINE_ID ";
				$result= mysqli_query($con,$sql);
				
			    $query = "select * from vaccines";
	            $search_Result = filterTable($query);
				
			}
			else{
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
 if(isset($_POST['deleterecord'])){
     $vid= $_POST['vaccineid'];
	 $length= strlen($vid);
	 
	 if(empty($vid)){
		  $error = " Vaccine ID is required";
	 }else if($length>10){
		 $error = " Vaccine ID is too long";
	 }
 }
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<title>DELETE VACCINE RECORD</title>
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
			<h2 ><marquee direction="right">**** DELETE VACCINE RECORD ****</marquee></h2>
	        </br></br></br></br>
			
<form action="DeleteVaccineRecord.php" method="POST" >
	<div id="form_layout">
	   <h2> DELETE VACCINE ITEM </h2>
      
      
	  <label>VACCINE ID :</label><br/>
	  <input type='text'  id='title2' name="vaccineid" pattern="[0-9]{1,}" title="must contail numbers only" ><br/>
	  <br/>

	
	</br></br>

    <input type='submit' value='DELETE RECORD' name="deleterecord">
	</div>
	</form>
	<span><h3 ><font size="5px"><a href = "../Home/MainHomeReceptionist.php">Home<a></font><h3></span>
		<p style="color:red;font-size:20px;">		
		<?php
	     if(isset($error)){
			 echo $error;
		 }
	?>
</p>
</body>
</html>