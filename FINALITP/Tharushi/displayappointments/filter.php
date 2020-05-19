<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "animalcare");  
      $output = '';  
      $query = "  
           SELECT * FROM appointments  
           WHERE adate BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      ?>
           <table class="table table-bordered">  
                <tr>  
                     <th width="3%">ID</th> 
					 <th width="3%">UserID</th> 
                     <th width="8%">Firstname</th> 
					 <th width="10%">Lastname</th> 
					 <th width="15%">Email</th>
                     <th width="5%">Service</th>  
					 <th width="6%">Pet Age</th>
					 <th width="5%">Pet Gender</th>
                     <th width="15%">Appointment Date</th> 
				     <th width="10%">Time</th>
					 <th width="40%">Action</th>
					
                </tr>  
     <?php
		  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
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
					<?php include('button2.php'); ?>
					
					</td>
						
			
						
                     </tr>  
                 
           <?php           	  
 }  
 
      }  
      else  
      {  
  ?> 
          
                <tr>  
                     <td colspan="15">No Appointments Found</td>  
                </tr>  
           
      <?php           	  
 }  
 ?>  
      </table>
	  
     
  
     
 <?php           	  
 }  
 ?>
