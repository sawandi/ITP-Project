


<!-- Delete Appointment-->
    <div class="modal fade" id="del<?php echo $row['AppointmentId']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Appointment</h4></center>
                </div>
                <div class="modal-body">
				<!--?php
					$del=mysqli_query($conn,"select * from appointments where AppointmentId='".$row['AppointmentId']."'");
					$drow=mysqli_fetch_array($del);
				?-->
				<!--div class="container-fluid">
					<h5><center>Appointment ID: <strong><?php echo $drow['AppointmentId']; ?></strong></center>
					<h5><center>User ID: <strong><?php echo $drow['UserId']; ?></strong></center>
					<br><center>Full Name: <strong><?php echo $drow['firstname']; ?><?php echo " "?><?php echo $drow['lastname']?></strong></center>
					<br><center>Email: <strong><?php echo $drow['email']; ?></strong></center>
					<br><center>Service: <strong><?php echo $drow['service']; ?></strong></center>
					<br><center>Appointment Date: <strong><?php echo $drow['adate']; ?></strong></center>
					<br><center>Appointment Time: <strong><?php echo $drow['atime']; ?></strong></center>
					</h5>
                </div--> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['AppointmentId']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
	
	
<!-- /.modal -->

<!-- Edit Appointment -->

    <div class="modal fade" id="edit<?php echo $row['AppointmentId']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Appointment</h4></center>
                </div>
                <div class="modal-body">
				<!--?php
					$edit=mysqli_query($conn,"select * from appointments where AppointmentId='".$row['AppointmentId']."'");
					$row=mysqli_fetch_array($edit);
				?-->
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $row['AppointmentId']; ?>">
				
					<!--div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">UserId:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="UserId" class="form-control" value="<?php echo $row['UserId']; ?>">
						</div>
					</div>-->
					<div style="height:10px;"></div>
					
				
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					
					
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Email:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?> ">
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Service:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="service" class="form-control" value="<?php echo $row['service']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Pet Age:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="petage" class="form-control" value="<?php echo $row['petage']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Pet Gender:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="petgender" class="form-control" value="<?php echo $row['petgender']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Appointment Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" name="adate" class="form-control" value="<?php echo $row['adate']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Appointment Time:</label>
						</div>
						<div class="col-lg-10">
							<input type="time" name="atime" class="form-control" value="<?php echo $row['atime']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->