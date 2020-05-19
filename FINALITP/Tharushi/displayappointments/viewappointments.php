<!DOCTYPE html>
<html>

<head>
	<title>View Appointments</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!-- search-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 
	
</head>

<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:100%;">
	<span style="font-size:30px; color:blue"><center><strong>View Appointments</strong></center></span>	
	<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New Appointment</a></span>
	<br><br>
	
	<a href="viewAppointmentHistory.php" class="btn btn-info" name="submit">Print Appointments</a>
	<!--button onclick="myFunction()">Print</button>

<script>
function myFunction() {
  window.print();
}
</script-->


	<br /><br />
	<!-- search-->
	<span style="font-size:22px; color:black"><center><strong>Search Appointments</strong></center></span>
	 
           <div class="container" style="width:1100px;">  
				<br/>  
				
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button"  name="filter" id="filter" value="Filter Appointments" class="btn btn-info" />  
                </div> 
			

	
	<div style="height:50px;"></div>
	<table class="table table-striped table-bordered table-hover">
	<div id="order_table"> 
			<thead>
			    <th>Id</th>
				<th>UserId</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Service</th>
				<th>Pet Age</th>
				<th>Pet Gender</th>
				<th>Appointment Date</th>
				<th>Time</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				
				$result=mysqli_query($conn,"select * from `appointments`");
				while($row=mysqli_fetch_array($result)){
			?>
					<tr>
					    <td><?php echo $row['AppointmentId']; ?></td>
						<td><?php echo $row['UserId']; ?></td>
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['service']; ?></td>
						<td><?php echo $row['petage']; ?></td>
						<td><?php echo $row['petgender']; ?></td>
						<td><?php echo $row['adate']; ?></td>
						<td><?php echo $row['atime']; ?></td>
						
						<td>
							<a href="#edit<?php echo $row['AppointmentId']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>  
							<a href="#del<?php echo $row['AppointmentId']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>

<script>  
      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'yy-mm-dd'   
           });  
           $(function(){  
                $("#from_date").datepicker();  
                $("#to_date").datepicker();  
           });  
           $('#filter').click(function(){  
                var from_date = $('#from_date').val();  
                var to_date = $('#to_date').val();  
                if(from_date != '' && to_date != '')  
                {  
                     $.ajax({  
                          url:"filter.php",  
                          method:"POST",  
                          data:{from_date:from_date, to_date:to_date},  
                          success:function(data)  
                          {  
                               $('#order_table').html(data);  
                          }  
                     });  
                }  
                else  
                {  
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>
