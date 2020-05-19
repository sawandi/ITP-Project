<?php
     	
	            $user = 'root';
                $pw = '';
                $db = 'animalcare';
                $con = mysqli_connect("localhost",$user,$pw, $db);

				$VaccineName= $_POST['VaccineName'];
                $Charge= $_POST['Charge'];
                $TimePeriod=$_POST['TimePeriod'];
				
				if(isset($_POST['cat'])){
					$Cat=TRUE;
				}else
				{
					$Cat= FALSE;
				}
				if(isset($_POST['dog'])){
					$Dog=TRUE;
				}else
				{
					$Dog= FALSE;
				}
               

					$sql = "INSERT INTO vaccines (VaccineName,Charge,TimePeriod,Cat,Dog,Status) VALUES ('$VaccineName',' $Charge',' $TimePeriod','$Cat','$Dog',TRUE)";
				
				
				
				$result= mysqli_query($con,$sql);
			
			    $query = "select * from vaccines";
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

<title>VIEW VACCINE ITEMS</title>
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
			<h2 ><marquee direction="right">**** AVAILABLE VACCINE ITEMS PAGE ****</marquee></h2>
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
	
	
	<?php while($row = mysqli_fetch_array($search_Result)) :?>
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
</body>	
</html>
<span><h3 ><font size="5px"><a href = "../Home/MainHomeReceptionist.php">Home<a></font><h3></span>