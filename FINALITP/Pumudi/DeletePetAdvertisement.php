<?php
if(isset($_POST['deleterecord'])){
                $user = 'root';
                $pw = '';
                $db = 'animalcare';
                $con = mysqli_connect("localhost",$user,$pw, $db);

				$id = $_POST['adid'];
				
				$sql = "DELETE FROM petadvertisement WHERE id=$id ";
				$result= mysqli_query($con,$sql);
				
			    $query = "select * from petadvertisement ";
	            $search_Result = filterTable($query);
				
			}
			else{
		          $query = "select * from petadvertisement ";
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
     $aid= $_POST['adid'];
	 $length= strlen($aid);
	 
	 if(empty($aid)){
		  $error = " Pet advertisement ID is required";
	 }else if($length>10){
		 $error = " Pet Advertisement ID is too long";
	 }
 }
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<title>DELETE PET Advertisement DETAILS</title>
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
	<th>Advertisement Id</th>
	<th>Customer Name</th>
	<th>Phone</th>
	<th>email</th>
	<th>Pet Description</th>
   	<th>status</th>
		</tr>
	
<?php 


	while($row = mysqli_fetch_array($search_Result)) :?>
	   <tr>
	       <td><?php echo $row['id'];?></td>
	       <td><?php echo $row['cust_name'];?></td>
	       <td><?php echo $row['phone'];?></td>
		   <td><?php echo $row['email'];?></td>
		   <td><?php echo $row['PetDescription'];?></td>
		   <td><?php echo $row['staus'];?></td>
	   </tr>
  
  
<?php endwhile;?>		
	</table>
	
		
		</br></br></br></br>
			<h2 ><marquee direction="right">**** DELETE pet advertisement RECORD ****</marquee></h2>
	        </br></br></br></br>
			
<form action="DeletePetAdvertisement.php" method="POST" >
	<div id="form_layout">
	   <h2> DELETE ADVERTISEMENT </h2>
      
      
	  <label>Advertisement ID :</label><br/>
	  <input type='text'  id='title2' name="adid" pattern="[0-9]{1,}" title="must contail numbers only" ><br/>
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