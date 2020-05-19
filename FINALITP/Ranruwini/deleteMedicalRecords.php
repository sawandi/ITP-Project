<?php
if(isset($_POST['delete'])){
                $user = 'root';
                $pw = '';
                $db = 'animalcare';
                $con = mysqli_connect("localhost",$user,$pw, $db);

				$RECORD_ID = $_POST['recordid'];
				
				$sql = "UPDATE medicalreports SET Status = False WHERE ReportId LIKE '$RECORD_ID' ";
				$result= mysqli_query($con,$sql);
				
			    $query = "select * from medicalreports WHERE ReportId LIKE '$RECORD_ID' ";
	            $search_Result = filterTable($query);
				
			}
			else{
		          $query = "select * from medicalreports";
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
 if(isset($_POST['delete'])){
     $recordid= $_POST['recordid'];
	 $length= strlen($recordid);
	 
	 if(empty($recordid)){
		  $error = " Record ID is required";
	 }else if($length>11){
		 $error = " Record ID is too long";
	 }
	
 }

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<title>DELETE MEDICAL RECORD</title>
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
		
		
		</br></br></br></br>
			<h2 ><marquee direction="right">**** DELETE MEDICAL RECORDS PAGE ****</marquee></h2>
	        </br></br></br></br>
			
<form action="deleteMedicalRecords.php" method="POST" >
	<div id="form_layout">
	   <h2> DELETE MEDICAL RECORDS </h2>
      
      
	  <label>MEDICAL RECORD ID :</label><br/>
	  <input type='text'  id='title2' name="recordid" pattern="[0-9]{1,}" title="must contail numbers only"  ><br/>
	  <br/>

	
	</br></br></br></br>

    <input type='submit' value='DELETE RECORD' name="delete">
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