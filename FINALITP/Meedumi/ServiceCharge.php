<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>service charges</title>
		<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
		<link rel="stylesheet" href="style/indexstyle.css">
	</head>
	<body>
	<?php require_once 'Schargeprocess.php';?> 
	
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
		$result = $mysqli->query("SELECT * FROM servicecharges WHERE status=0") or die ($mysqli->error);
		//pre_r($result);
	?>
	<br>
	<div class="form-group">
	<a href="viewServiceCharge.php"  class="btn btn-info" name="submit">View ServiceCharges</a>
	<a href="viewservice.php"  class="btn btn-info" name="submit">View Service</a>
	</div>
	<hr>
	<div class="row justify-content-center">
	<h2>Service Charges List</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Service Charge ID</th>
					<th>service ID </th>
					<th>Age Gap</th>
					<th>Service Charge</th>
					<th>Pet Type</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			
			<?php
				while ($row = $result->fetch_assoc()): ?>
			<tr>
				<td><?php echo $row['ServiceChargeId']; ?></td>
				<td><?php echo $row['ServiceId']; ?></td>
				<td><?php echo $row['AgeGap']; ?></td>
				<td><?php echo $row['ServiceCharge']; ?></td>
				<td><?php echo $row['PetType']; ?></td>
				<td>
					<a href="ServiceCharge.php?edit=<?php echo $row['ServiceChargeId'];?>"
						class ="btn btn-info">Edit</a>
					<a href="Schargeprocess.php?delete=<?php echo $row['ServiceChargeId'];?>" onClick="return confirm('Are you sure want to delete this?')"
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
		<form action ="Schargeprocess.php" method="POST" class="main">
			<input type="hidden" name = "id" value="<?php echo $id; ?>">
			<h2>Add Service Charges</h2> 
				
			<div class="form-group">
				<label for="">Service ID :</label>
				<input type="text" name="serviceId" class="form-control" value="<?php echo $sId; ?>" id="input2" required>
			</div>

			<div class="form-group">
				<label for="">Age Gap:</label>
				<input type="text" name="AgeGap" class="form-control" value="<?php echo $age ?>" id="input3" required>
			</div>

			<div class="form-group">
				<label for="">Serice Charge:</label>
				<input type="text" name="ServiceCharge" class="form-control" value="<?php echo $scharge ?>" id="input4" required>
			</div>
			
			<div class="form-group">
				<label for="">Pet Type:</label>
				<input type="text" name="petType" class="form-control" value="<?php echo $ptype ?>" id="input5" required>
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
    document.getElementById('input2').value = "1";
	document.getElementById('input3').value = "Adult";
    document.getElementById('input4').value = "750";
	document.getElementById('input5').value = "Dog";
 

  }
</script>
		</div>
	</div>
	</body>
	</html>