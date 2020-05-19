<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/indexstyle.css">
	<meta charset="UTF-8">
	<title>search</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top:5%;">
				<div class="row">
				<?php 
				$connection = mysqli_connect('localhost:3306','root','','animalcare');
				if(isset($_POST['search'])){
					$searchkey = $_POST['search'];
					$sql = "SELECT * FROM services WHERE serviceType LIKE '%$searchkey%'";
					
				}else{
				$sql = "SELECT * FROM services";
				$searchkey = "";
				}
				$result = mysqli_query($connection,$sql);
				?>
				<div class="form-group">
				<a href="index.php"  class="btn btn-info" name="submit"> +Add Service</a>
				<a href="ServiceCharge.php"  class="btn btn-info" name="submit"> +Add Service Charge</a>
				</div>
				<hr>
					<form action="viewservice.php" method="POST">
					<h2> View services</h2> <br>
					
						<div class="col-md-6">
							<input type="text" name="search" class="form-control" placeholder="Search By Name" value="<?php echo $searchkey;?>">
						</div>
						<div class="col-md-6 text-left">
							<button class="btn btn-info">Search</button>
						</div><br>
					</form>
					
					<br>
					<br>
				</div>
				<table class="table table-bordered">
					<tr>
						<th>Service Id</th>
						<th>Service Type</th>
						<th>Description </th>
						<th>Start Time</th>
						<th>End Time</th>
					</tr>
					<?php while($row = mysqli_fetch_object($result)) { ?>
					<tr>
						<td><?php echo $row->serviceId ?></td>
						<td><?php echo $row->serviceType ?></td>
						<td><?php echo $row->description ?></td>
						<td><?php echo $row->startTime ?></td>
						<td><?php echo $row->endTime ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>