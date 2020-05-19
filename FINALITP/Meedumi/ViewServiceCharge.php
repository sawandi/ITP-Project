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
					$sql = "SELECT * FROM servicecharges WHERE petType LIKE '%$searchkey%'";
					
				}else{
				$sql = "SELECT * FROM servicecharges";
				$searchkey = "";
				}
				//$result = mysqli_query($connection,$sql);
				?>
				<br>
				<div class="form-group">
				<a href="ServiceCharge.php"  class="btn btn-info" name="submit">+Add ServiceCharge</a>
				</div>
				<hr>
					<form action="ViewServiceCharge.php" method="POST">
					<h2> View Service Charges</h2><br>
						<div class="col-md-6">
							<input type="text" name="search" class="form-control" placeholder="Search By PetType" value="<?php echo $searchkey;?>">
						</div>
						
						<div class="col-md-6 text-left">
							<button class="btn btn-info">Search</button>
						</div>
						<br/>
					</form>
					
					<br>
					<br>
				</div>
				<table class="table table-bordered" >
					<tr>
						<th>Service ID</th>
						<th>Age Gap</th>
						<th>Service Charge</th>
						<th>Pet Type</th>
						
					</tr>
					<?php
					$result = mysqli_query($connection,$sql);
					$reportTableHeader="<table border = '1'colspan='5' >
						<tr>
							<th>Service ID</th>
							<th>Age Gap</th>
							<th>Service Charge</th>
							<th>Pet Type</th>
						</tr>";
							$report = "";
							$reportTableFooter = "</table>";
							
					if(mysqli_num_rows($result)>0){
						
						while($row = mysqli_fetch_assoc($result)) 
						{ 
							$report .="<tr><td>".$row["ServiceId"]."</td><td>".$row["AgeGap"]."</td><td>".$row["ServiceCharge"]."</td><td>".$row["PetType"]."</td></tr>";
						}
						echo $report;
					}else{
						$report = " 0 result";
						echo $report;
					}
					mysqli_close($connection);
					
					?>
					
				</table>
				
				<form method ="post" action = "viewservicelist.php">
				<input type = "hidden" name = "report" value = "<?php echo $reportTableHeader.$report.$reportTableFooter;?>">
				<input type = "submit" name = "view-report" class="btn btn-primary" value="View Service Report"/>
			</form>
			<br/>
			<form method ="post" action = "downloadservice.php">
				<input type = "hidden" name = "report" value = "<?php echo $reportTableHeader.$report.$reportTableFooter;?>">
				<input type = "submit" name = "download-report" class="btn btn-primary" value="Download Service Report"/>
			</form>
			</div>
		</div>
	</div>
</body>
</html>