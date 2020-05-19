<?php 
    require_once('connection.php');
	
	$query = "select * from services";
	$result= mysqli_query($con,$query);
?>
<?php
 require_once('connection.php');
 if(isset($_POST['add'])){
     $petid= $_POST['petid'];
	 $length= strlen($petid);
	 
	 if(empty($petid)){
		  $error = " Pet ID is required";
	 }else if($length>11){
		 $error = " Pet ID is too long";
	 }
	
 }

?>
</br>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<title>MEDICAL REPORT</title>
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

<form action="medicalrecordinsert.php" method="POST" >
	<div id="form_layout">
	   <h2> ADD Medical Records </h2>
      
      
	  <label>Pet ID :</label><br/>
	  <input type='text'  id='title1' name="petid" pattern="[0-9]{1,}" title="must contail numbers only" required ><br/>
	  <br/>
      
	  <label>Date :</label><br/>
	 <input type='date'  id='title2' name="date"  required><br/>
	 <br/>
	 
	  <label>service Type:</label><br/>
	  <select id='categary' name="serviceType" required>
          <?php while($row1 = mysqli_fetch_array($result)):;?>
		  <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
		  <?php endwhile;?>
	  </select>  
		
	</br></br></br></br>

    <input type='submit' value='ADD RECORD' name="add">
	</div>
	          <a href="#" onClick="autoFill(); return true;">DEMO</a></br>
			  <a href="updateMedicalRecordList.php" >UPDATE RECORD</a></br>
			  <a href="ViewMedicalRecords.php" >VIEW RECORD</a></br>
			  
	</form>
	
	  <script type="text/javascript">
	      function autoFill(){
			  document.getElementById('title1').value="01";
			  document.getElementById('title2').value="2019-10-04";
			  document.getElementById('categary').value="Vaccinations";
			
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
<!--<


//Check whether the submission is made
if(!isset($_POST["add"])){

//Declarate the necessary variables
$strdate="";
$strdate1="";
DisplayForm();
}
else{
$strdate=$_POST["date"];

//Check the length of the entered Date value
if((strlen($strdate)<10)OR(strlen($strdate)>10)){
echo("Enter the date in 'dd/mm/yyyy' format");
}
else{

//The entered value is checked for proper Date format
if((substr_count($strdate,"/"))<>2){
echo("Enter the date in 'dd/mm/yyyy' format");
}
else{
$pos=strpos($strdate,"/");
$date=substr($strdate,0,($pos));
$result=ereg("^[0-9]+$",$date,$trashed);
if(!($result)){echo "Enter a Valid Date";}
else{
if(($date<=0)OR($date>31)){echo "Enter a Valid Date";}
}
$month=substr($strdate,($pos+1),($pos));
if(($month<=0)OR($month>12)){echo "Enter a Valid Month";}
else{
$result=ereg("^[0-9]+$",$month,$trashed);
if(!($result)){echo "Enter a Valid Month";}
}
$year=substr($strdate,($pos+4),strlen($strdate));
$result=ereg("^[0-9]+$",$year,$trashed);
if(!($result)){echo "Enter a Valid year";}
else{
if(($year<2019)OR($year>2200)){echo "Enter a year between 2019-2200";}
}
}
}
DisplayForm();
}

//User-defined Function to display the form in case of Error
function DisplayForm(){
global $strdate;}

-->
