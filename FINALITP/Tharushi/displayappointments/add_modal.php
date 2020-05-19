
<!-- Add New Appointment-->

    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Appointment</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">
				
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">UserId:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="UserId" id="input1" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="firstname" id="input2" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					
					
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lastname" id="input3" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Email:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="email" id="input4" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					
					
					
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Service:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="service" id="input5">
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					
					
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Pet Age:</label>
						</div>
						<div class="col-lg-10"> 
							<input type="text" class="form-control" name="petage" id="input6" >
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Pet Gender:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="petgender" id="input7">
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Appointment Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" class="form-control" name="adate" id="input8" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Appointment Time:</label>
						</div>
						<div class="col-lg-10">
							<input type="time" class="form-control" name="atime" id="input9" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					
					
                </div> 
				</div>
                <div class="modal-footer">
				<a href="#" onClick="autoFill(); return ture;">DEMO</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
				
				<script type="text/javascript">
function autoFill(){
	document.getElementById('input1').value="1";
	document.getElementById('input2').value="tharushi";
	document.getElementById('input3').value="rubasinghe";
	document.getElementById('input4').value="hima@gmail.com";
	document.getElementById('input5').value="Scan";
	document.getElementById('input6').value="5";
	document.getElementById('input7').value="male";
	document.getElementById('input8').value="2019-10-20";
	document.getElementById('input9').value="01:00:00";
	
}
</script>
                </div>
				
            </div>
        </div>
    </div>
