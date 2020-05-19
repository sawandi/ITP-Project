<?php include('add1.php');
if(isset($_GET['edit'])){
	$id= $_GET['edit'];
	$edit_state= true;
	$rec = mysqli_query($con,"SELECT * FROM petadvertisement WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$Email= $record['email'];
	$staus = $record['staus'];
	$id = $record['id'];
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
	<title>Accept AdvertisementsDetails List</title>

</head>
<link rel="stylesheet" type="text/css" href="styles/style.css">
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
			   
				<!--<th>Customer Name</th>
				<th>Phone</th>-->
				<th>Email</th>
				<th>Status</th>
				<th colspan="2">Action</th>
			</tr>
			
	<?php while($row = mysqli_fetch_array($query)) { ?>
	   <tr>
		   <td><?php echo $row['email'];?></td>
		   <td><?php echo $row['staus'];?></td>
		   <td><a class="edit_btn"href="Acceptadd.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
		  
	   </tr>
	<?php } ?>
    
	</table>
			</br></br></br></br>
			
			
	<form action="add1.php" method="POST" >
	   <div id="form_layout">
	   <h2> Accept Advertisements </h2>
      
	  <input type="hidden" name="id" value="<?php echo $id; ?>">
	  <label>Email :</label><br/>
	  <input type='email'  id='email1' name="email"  value="<?php echo $Email; ?>"  required><br/>
	  <br/>
      
	 <label>Status :</label><br/>
	 <input type='status'  id='staus' name="staus"  required  value="<?php echo $staus; ?>"><br/>
	 <br/>
	
	   </br></br></br></br>
	   	

     <?php if($edit_state == false): ?>
	    <button type='submit' name="save" value='SAVE' class="btn">Save</button>
	<?php else: ?>
	    <button type='submit' name="update" value='UPDATE' class="btn">Update</button>
	<?php endif ?>
	</div>
	</form>
		<p style="color:red;font-size:20px">		
		<?php
	     if(isset($error)){
			 echo $error;
		 }
	?>
</p>
</body>
</html>