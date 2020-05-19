<?php 
    require_once('connection.php');
	
	$query = "select * from services";
	$result= mysqli_query($con,$query);
?>
<?php include('server.php');
if(isset($_GET['edit'])){
	$id= $_GET['edit'];
	$edit_state= true;
	$rec = mysqli_query($con,"SELECT * FROM medicalreports WHERE ReportId=$id");
	$record = mysqli_fetch_array($rec);
	$PetId = $record['PetId'];
	$Date = $record['Date'];
	$Service=$record['ServiceType'];
	$id = $record['ReportId'];
}
 ?>
 <?php
 require_once('connection.php');
 if(isset($_POST['update'])){
     $petid= $_POST['petid'];
	 $length= strlen($petid);
	 
	 if(empty($petid)){
		  $error = " Pet ID is required";
	 }else if($length>11){
		 $error = " Pet ID is too long";
	 }
	
 }

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8"> 
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	<style>
		body
		{
			background:url(images/animals.jpg);
			background-size:100% 135%;
			background-repeat:no-repeat;
		}
	</style>
	<title>View Vaccinate Details List</title>

</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
  <?php if(isset($_SESSION['msg'])): ?>
  <div class="msg">
     <?php
	    echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	 ?>
  </div>
  <?php endif ?>
    <table width="600" border="1" cellpadding="1" cellspacing="1" align="center" >

			<tr>
			   
				<th>Pet Id</th>
				<th>Date</th>
				<th>Service Type</th>
				<th colspan="2">Action</th>
			</tr>
			
	<?php while($row = mysqli_fetch_array($query)) { ?>
	   <tr>
	       
	       <td><?php echo $row['PetId']; ?></td>
	       <td><?php echo $row['Date']; ?></td>
		   <td><?php echo $row['ServiceType'];?></td>
		   <td><a class="edit_btn"href="updateMedicalRecordList.php?edit=<?php echo $row['ReportId']; ?>">Edit</a></td>
		   <td><a class="del_btn" href ="server.php?del=<?php echo $row['ReportId']; ?>">Delete</a></td>
	   </tr>
	<?php } ?>
    
	</table>
			</br></br></br></br>
			
			
	<form action="server.php" method="POST" >
	   <div id="form_layout">
	   <h2> UPDATE MEDICAL RECORDS </h2>
      
	  <input type="hidden" name="id" value="<?php echo $id; ?>">
	  <label>Pet ID :</label><br/>
	  <input type='text'  id='title1' name="petid"  value="<?php echo $PetId; ?>"  pattern="[0-9]{1,}" title="must contail numbers only"><br/>
	  <br/>
      
	 <label>Date :</label><br/>
	 <input type='date'  id='title1' name="date"  required value="<?php echo $Date; ?>"><br/>
	 <br/>
	 
	  <label>service Type:</label><br/>
	    <select id='categary' name="serviceType" value="<?php echo $Service; ?>" required>
          <?php while($row1 = mysqli_fetch_array($result)):;?>
		  <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
		  <?php endwhile;?>
	  </select> 
	   </br></br></br></br>
	   	

     <?php if($edit_state == false): ?>
	    <button type='submit' name="save" value='SAVE' class="btn">Save</button>
	<?php else: ?>
	    <button type='submit' name="update" value='UPDATE' class="btn">Update</button>
	<?php endif ?>
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
</body>
</html>