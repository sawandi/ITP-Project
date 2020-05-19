<?php



   require_once('connection.php');
	
	$name = $_POST['name'];
	$phoneno = $_POST['phoneno'];
	$email = $_POST['email'];
    $des = $_POST['petdescription'];
    //$gender=$_POST['gender'];
     //$userId=$_POST['userId'];
	 //$sp = $_POST['species'];

       //if(isset($_POST['cat'])){
         //$cat=true;
         
           //} else{
          //$cat=false;
         //}
         //if(isset($_POST['dog'])){
          //$dog=true;
         //}else{
           // $dog=false;
         //}
	
	/*echo $userId;
	echo $pname;
	echo $breed;
	echo $colour;
        echo $age;
	echo $gender;
        echo $cat;
        echo $dog;*/
	
	
	
	
	$sql = "INSERT INTO petadvertisement(cust_name,phone,email,PetDescription) VALUES ('$name','$phoneno','$email','$des')";
	mysqli_query($con,$sql);

       
//}
	
?>
	

<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Pet Advertisement</title>
	
	<style>
		body
		{
			background:url(images/images9.jpg);
			background-size:cover;
			background-repeat:repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/displayUserDetails.css">
	
</head>
	<body>
	
		<form id ="regForm"  action="" method="post">
		
			

			<div id ="nav">
			
				<h3>Pet Advertisement</h3>

				<lable for="name"><b><?php echo $name?><?php echo " "?>
				<br><br>
			
	
				<lable for="phoneno"><b><?php echo $phoneno?></b></lable>
				
			
				<br><br>
				<lable for="email"><b><?php echo $email?></b></lable>
                                <br><br>
                                
				<lable for="petdescription"><b><?php echo $des?></b></lable>
                                <br><br>
                                
				
				
				<?php
				
					echo "<script>
				
						alert('Your details saved successfully');
					
						</script>";
							
				?>
					
			
				
				<!--button id="btnpetprof" href = userprofile.php> Profile</button-->
                                

			</div>

		</form>
		
	</body>
	
</html>