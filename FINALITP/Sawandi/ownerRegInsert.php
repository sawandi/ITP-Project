<?php

	//function formValidation(){
		
	/*	$ulErr = $fnErr = $lnErr = $nicErr = $emailErr = $pnoErr = $usnErr = $pwErr = $cpwErr = "";
		$ulvl = $fname = $lname = $nic = $email = $pno = $uname = $pw = $cpw = "";
		$boolean = false;
				
		if($_SERVER["REQUEST_METHOD"]=="POST"){
						
							
							
			//check first name and last name
			if(empty($_POST["firstname"])){
				
				$fnErr = "First name required..!";
				$boolean = false;
				
			}
			else
			{
							
				$fname = validate_input($_POST["firstname"]);
				$boolean = true;	
			}
			
			if(empty($_POST["lastname"])){
				
				$lnErr = "Last name required..!";
				$boolean = false;
			}
			else
			{
				$lname = validate_input($_POST["lastname"]);
				$boolean = true;
			}
							
							
			/////////////////////////////////////////////////////////////				
											
											
											
			//check email
							
			if(empty($_POST["email"])){
				
				$emailErr = "Email required..!";
				
			}
			else
			{
				$email = validate_input($_POST["email"]);
				$boolean = true;
			}
			
			//////////////////////////////////////////////////////////////////
			
			
			
			//check username
							
			if(empty($_POST["username"])){
								
				$usnErr = "Username Required..!!!";
				$boolean = false;
								
			}else{
								
				$uname = validate_input($_POST["username"]);
				$boolean = true;
			}
			
			///////////////////////////////////////////////////////////////////
			
			
							
			//check password
			$pwlength = strlength($_POST["pw"]);
							
			
			if(empty($_POST["pw"])){
				
				$pwErr = "Password required..!";
				$boolean = false;
				
			}
			else if($pwlength){
								
				$pwErr = $pwlength;
				$boolean = true;
								
			}else{
								
				$pw = validate_input($_POST["pw"]);
				$boolean = true;
			}
			
			//////////////////////////////////////////////////////////////////
			
			
							
			//check confirm pw
			
			if(empty($_POST["confirmPW"])){
				
				$cpwErr = "Confirmed password required..!";
				$boolean = false;
				
			}
			
			else if($_POST["confirmPW"] != $pw){
								
				$cpwErr = "Password not match...!";
				$boolean = false;
			}
			
			else
			{
				$cpw = validate_input($_POST["confirmPW"]);
				$boolean = true;
								
			if(isset($_POST["chk1"])){
								
				$boolean = true;
								
			}else{
								
				$boolean = false;
			}
							
							
			function strlength($str){
								
				$ln = strlen($str);
				if($str>15){
									
					return "Password should less than 10 characters";
									
				}elseif($ln<5){
									
					return "Password should greater than 5 characters";
				}
					return;
								
			}
							
			function validate_input($data){
								
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;				
							
			}
						
			if($boolean)
			{

				require_once('connection.php'); //import database
				
				function NewUser()
				{
		
					$fname = $_POST['firstname'];
					$lname = $_POST['lastname'];
					$NIC   = $_POST['NIC'];
					$email = $_POST['email'];
					$phone = $_POST['phoneno'];
					$username = $_POST['username'];
					$pw = $_POST['pw'];
					//$userlvl = $_POST['userlevel'];
					//$conPW = $_POST['confirmPW'];
					
					echo $NIC;
					echo $email;
					echo $phone;
					echo $username;
					echo $pw;
					echo $conPW;
					
					
					$sql = "INSERT INTO petowners(Fname,Lname,NIC,Email,Phone) VALUES ('$fname','$lname','$NIC','$email','$phone')";
					$query1 = mysqli_query($con,$sql);
					
					$sql = "SELECT UserId FROM petowners where NIC = '$NIC'";
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_assoc($result);
					
					echo "<br>".$row['UserId'];
					
					$sql1 = "INSERT INTO userlogindetails(UserId,Username,Password) VALUES (".$row['UserId'].",'$username','$pw')";
					$query2 = mysqli_query($con,$sql1);
					
					///////////////////////////////////////////////////////////////////
					
					if($query1 && $query2)
					{
						echo "<script>
							
							alert ('Details saved successfully...!!');
							
						</script>";
					}
				}
				
				
				function SignUp()
				{
					$sql = "SELECT * FROM petowners p,userlogindetails u where p.NIC = '$_POST[NIC]' or p.Email = '$_POST[email]' or p.Phone = '$_POST[phoneno]' or u.Username = '$_POST[username]' or u.UserId = p.UserId";
					//$sql = "SELECT * FROM petowners ,userlogindetails  where NIC = '$_POST[NIC]' or Email = '$_POST[email]' ;
					$res = mysqli_query($con,$sql);
					
					if(!$row1 = mysqli_fetch_array($result)){
						
						NewUser();
					}
					else
					{
						echo "<script>
						
							alert ('You are already registered user...!!');
						</script>";
					}
					
					
				}	
				
				if(isset($_POST["submit"]))
				{
					
					SignUp();
					mysqli_close($con);
					$boolean = false;
				}
					
			}
			
		}*/
		
	//}
						
	
				
						

				
	
	/*require_once('connection.php');
	
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$NIC   = $_POST['NIC'];
	$email = $_POST['email'];
	$phone = $_POST['phoneno'];
	$username = $_POST['username'];
	$pw = $_POST['pw'];
	
	
	echo $NIC;
	echo $email;
	echo $phone;
	echo $username;
	echo $pw;
	
	$hashed = hash('sha512',$pw);
	
	$sql = "INSERT INTO petowners(Fname,Lname,NIC,Email,Phone,Status) VALUES ('$fname','$lname','$NIC','$email','$phone','1')";
	mysqli_query($con,$sql);
	
	$sql = "SELECT UserId FROM petowners where NIC = '$NIC'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	
	//echo "<br>".$row['UserId'];
	
	$sql1 = "INSERT INTO userlogindetails(UserId,Username,Password,UserType) VALUES (".$row['UserId'].",'$username','$hashed','Pet Owner')";
	mysqli_query($con,$sql1);
	
	/*$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$NIC   = $_POST['NIC'];
	$email = $_POST['email'];
	$phone = $_POST['phoneno'];
	$username = $_POST['username'];
	$pw = $_POST['pw'];*/
	
	//$sql = "SELECT * from petowners where "
	
	
	
	
?>	

<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>User Registration</title>
	
	<style>
		body
		{
			background:url(images/bunch.jpg);
			background-size:cover;
			background-repeat:repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/displayUserDetails.css">
	
</head>
	<body>
	
		<form id ="regForm"  action="petRegistration.php" method="post">
		
			

			<div id ="nav">
			
				<!--<h3>Pet Owner Registration</h3>-->

				<lable for="firstname"><b><?php echo $fname?><?php echo " "?><?php echo $lname?></b></lable>
				<br><br>
			
	
				<lable for="NIC"><b><?php echo $NIC?></b></lable>
				
			
				<br><br>
				<lable for="email"><b><?php echo $email?></b></lable>
				

				<br><br>
				<lable for="phoneno"><b><?php echo $phone?></b></lable>
				
			
				<br><br>
				<lable for="username"><b><?php echo $username?></b></lable>
				
				<?php
				
					echo "<script>
				
						alert('Your details saved successfully');
					
						</script>";
							
				?>
					
				<p id = "pr"><b>Please register your pet here...</b></p> 
				
				<button id="btnpet" href = petRegistration.php>PET REGISTRATION</button>

			</div>

		</form>
		
	</body>
	
</html>