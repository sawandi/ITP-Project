<?php 
   
$user = 'root';
$pw = '';
$db = 'animalcare';
$con = mysqli_connect("localhost",$user,$pw, $db);
	
	$query = "select * from services";
	$result= mysqli_query($con,$query);
	
?>
<?php

	if(isset($_POST['search'])){	
		
	$PetId = $_POST['petid'];
	$Service = $_POST['serviceType'];

	if($Service == 'All'){
	$query = "select `ReportId`, `PetId`, `Date`, `ServiceType` from medicalreports where PetId='$PetId'";
	$search_Result =filterTable($query);
	}	
    else if($Service != 'All'){
	$query = "select `ReportId`, `PetId`, `Date`, `ServiceType` from medicalreports where PetId='$PetId' and ServiceType LIkE '$Service'";
	$search_Result =filterTable($query);

	}
	
	}else{
		$query = "select `ReportId`, `PetId`, `Date`, `ServiceType` from medicalreports";
		$search_Result = filterTable($query);
	/*$sql= "select PetName from pets where PetId='$PetId' ";
	$res= mysqli_query($con,$sql);
	$rows = mysqli_fetch_assoc($res);*/
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
     $PetId= $_POST['petid'];
	 $length= strlen($PetId);
	 
	 if(empty($PetId)){
		  $error = " Pet ID is required";
	 }else if($length>11){
		 $error = " Pet ID is too long";
	 }

 }
 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css">

<title>VIEW MEDICAL RECORDS</title>
<meta name="robots" content="noindex,nofollow">

<style>
		body
		{
			background:url(images/pic1.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
		}
</style>
</head>
<body>

	
</br>
    <table width="600" border="1" cellpadding="1" cellspacing="1" align="center" >
	<tr>
	
	<th>Date</th>
    <th>Service Type</th>
	
	
	</tr>
	
	<?php 
	
	$medicalreportTableHeader="<table border = '1'>
											<tr>
												<th>Date</th>
												<th>Service Type</th>
											
											</tr>";
										$report = "";
							$medicalreportTableFooter = "</table>";
							
	if(mysqli_num_rows($search_Result)>0){
	    while($row = mysqli_fetch_array($search_Result)) {
		   
		   $report .= "<tr><td>".$row["Date"]."</td><td>".$row["ServiceType"]."</td></tr>";
		}
		echo $report;
		}
	    else
			{
				$report = "0 result";
				echo $report; 
			}
							
				mysqli_close($con);
			
		?>				
	   </table>
	   </br>

	</br></br></br></br>
			<h2 ><marquee direction="right">**** VIEW MEDICAL RECORDS PAGE ****</marquee></h2>
	</br></br></br></br>
	
<form action="ViewMedicalRecords.php" method="POST" >
	<div id="form_layout">
	   <h2> VIEW MEDICAL RECORDS </h2>

	  <label>Pet ID :</label><br/>
	  <input type='text'  id='title2' name="petid" pattern="[0-9]{1,}" title="must contail numbers only" ><br/>
	  <br/>
      
	   
	  <label>service Type:</label><br/>
 <select id='categary' name="serviceType" value="<?php echo $Service; ?>" required>
          <option>All</option>
          <?php while($row1 = mysqli_fetch_array($result)):;?>
		  <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
		  <?php endwhile;?>
	  </select> 
    </br></br></br></br>
    <input type='submit' name="search" value='VIEW RECORDS'>
	
	<!--<button onClick="myFunction()">Print</button>
	<script>
	function myFunction(){
		window.print();
	}
	</script>-->
	
	        
	
	</div>
	</form>
	
	<span><h3 align = "right"><font  size="5px"><a href = "../Home/MainHomeReceptionist.php">Home<a></font><h3></span>
	
		<p style="color:red;font-size:20px">		
		<?php
	     if(isset($error)){
			 echo $error;
		 }
	?>
	
	
</p>
<div class="print">
			<form method ="post" action = "MedicalrecordView.php">
				<input type = "hidden" name = "report" value = "<?php echo $medicalreportTableHeader.$report.$medicalreportTableFooter;?>">
				<input type = "submit" name = "view-report"  value="View Report"/>
			</form>
</div>
<br>
<div class="download">
			<form method ="post" action = "MedicalrecordDownload.php">
				<input type = "hidden" name = "report" value = "<?php echo $medicalreportTableHeader.$report.$medicalreportTableFooter;?>">
				<input type = "submit" name = "download-report"  value="Download Report"/>
			</form>
</div>
		
</body>
</html>