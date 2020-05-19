<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>services</title>
		<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
		<link rel="stylesheet" href="style/indexstyle.css">
	</head>

<body>
	<?php require_once 'process.php';?> 
	
	<?php
	
	if(isset($_SESSION['message'])): ?>
	
	<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
			?>
	</div>
	<?php endif ?>
	
	<div class ="container">
	
	<?php 
		$mysqli = new mysqli('localhost:3306','root','','animalcare') or die(mysql_error($mysqli));
		$result = $mysqli->query("SELECT * FROM services WHERE status=0") or die ($mysqli->error);
		//pre_r($result);
	?>
	<?php

	$errors = array();

	if(isset($_POST['submit'])){

		//checking required fields
		$req_fields = array('serviceType','description','startTime','endTime');

		foreach ($req_fields as $field ) {
			if(empty(trim($_POST[$field]))){
			$errors[] = $field.' is required'; 
			}
		} 
			
	}
?>
<br>
	<div class="form-group">
	<a href="viewservice.php"  class="btn btn-info" name="submit">View Services</a>
	</div>
	<hr>
	<div class="row justify-content-center">
	<h2>Service List</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Service Type</th>
					<th>Description </th>
					<th>Start Time</th>
					<th>End Time</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			
			<?php
				while ($row = $result->fetch_assoc()): ?>
			<tr>
				<td><?php echo $row['serviceType']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php echo $row['startTime']; ?></td>
				<td><?php echo $row['endTime']; ?></td>
				<td>
					<a href="index.php?edit=<?php echo $row['serviceId'];?>"
						class ="btn btn-info">Edit</a>
					<a href="process.php?delete=<?php echo $row['serviceId'];?>" onClick="return confirm('Are you sure want to delete this?')"
						class ="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php endWhile; ?>
			
		</table>
	</div>
	
	<!--?php
		function pre_r($array){
			echo '<pre>';
			print_r($array);
			echo'<pre>';
		}
		
	?-->
	<hr>
		
			
		<div class="row justify-content-center" >
		
		<form action ="process.php" method="POST" class="main">
		
			<input type="hidden" name = "id" value="<?php echo $id; ?>">
			<div class="form-group">
			<h2>Add Service</h2> 
			<?php 

			if(!empty($errors)){
				echo '<div class="errmsg">';
				echo '<b>There were error(s) on your form.</b><br>';
				foreach ($errors as $error){
					echo $error.'<br>';
				}
				echo '</div>';
			}
			
		?>
				<select class="form-control"  name="serviceType"  id="input1" value="<?php echo $stype; ?>">
					<option>Select Service Type</option>
					<option value="General HealthCheckups" name="serviceType">General HealthCheckups</option>
					<option value="Vaccinations"  >Vaccinations </option>
					<option value="Surgery"  >Surgery</option>
					<option value="Lab Service" name="serviceType">Lab Service</option>
				</select>
			</div>

			<div class="form-group">
				<label for="">Description :</label>
				<input type="textarea" name="description" class="form-control" value="<?php echo $descript; ?>"placeholder="Enter description" id="input2" required>
			</div>

			<div class="form-group">
				<label for="">Start Time:</label>
				<input type="time" name="startTime" class="form-control" value="<?php echo $stime; ?>" id="input3" required>
			</div>

			<div class="form-group">
				<label for="">End Time:</label>
				<input type="time" name="endTime" class="form-control" value="<?php echo $etime ?>" id="input4" required>
			</div>

			<div class="form-group">
			<?php 
			if($update == true):
			?>
				<button type="submit" name="update" class="btn btn-info">Update</button>
				<?php else: ?>
			
				<button type="submit" name="submit" class="btn btn-primary">Save</button>
				<?php endif; ?>
				
				<a href="#" onClick="autoFill(); return true;" >Click to Autofill</a>
			</div>
		</form>
		<script type="text/javascript">
  function autoFill() {
    document.getElementById('input1').value = "Vaccinations";
    document.getElementById('input2').value = "parvo virus";
	document.getElementById('input3').value = "09:55:00.00";
    document.getElementById('input4').value = "16:55:00.00";
 

  }
</script>
		</div>
	</div>
	</body>
	</html>