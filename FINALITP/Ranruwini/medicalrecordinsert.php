<?php

                $user = 'root';
                $pw = '';
                $db = 'animalcare';
                $con = mysqli_connect("localhost",$user,$pw, $db);
				
                $PetId= $_POST['petid'];
				$Date= $_POST['date'];
                $ServiceType=$_POST['serviceType'];
             
				$sql = "INSERT INTO medicalreports (PetId,Date,ServiceType,Status) VALUES ('$PetId','$Date','$ServiceType',TRUE)";
				$result= mysqli_query($con,$sql);
				
				$query = "select * from medicalreports";
		        $search_Result = filterTable($query);
	
	
	            function filterTable($query){
		        require_once('connection.php');
		        $filter_Result = mysqli_query($con,$query);
		        return $filter_Result;
	            }
	
?>
<!DOCTYPE html>
<html>
<head>

<title> MEDICAL RECORDS</title>
<meta name="robots" content="noindex,nofollow">
<style>
		body
		{
			background:url(images/bg.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
		}
</style>
</head>
<body>

			</br></br></br></br>
			<h2 ><marquee direction="right">****  MEDICAL RECORDS ****</marquee></h2>
	        </br></br></br></br>
			
	<table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
	<tr>
	<th>Report Id</th>
	<th>Pet Id</th>
	<th>Date</th>
    <th>Service Type</th>
	<th>Status</th>
	</tr>
	
	<?php while($row = mysqli_fetch_array($search_Result)) :?>
	   <tr>
	       <td><?php echo $row['ReportId'];?></td>
	       <td><?php echo $row['PetId'];?></td>
	       <td><?php echo $row['Date'];?></td>
		   <td><?php echo $row['ServiceType'];?></td>
		   <td><?php echo $row['Status'];?></td>
	   </tr>
    <?php endwhile;?> 
	</table>
	
</html>