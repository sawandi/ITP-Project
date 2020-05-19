<?php

	//if(isset($_POST['signup']))
	//{
		/*$ulErr = $fnErr = $lnErr = $nicErr = $emailErr = $pnoErr = $usnErr = $pwErr = $cpwErr = "";
		$ulvl = $fname = $lname = $nic = $email = $pno = $uname = $pw = $cpw = "";
		$boolean = false;
				
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
						
							
							
			//check first name and last name
			if(empty($_POST['firstname']))
			{
				
				$fnErr = "First name required..!";
				$boolean = false;
				
			}
			else
			{
							
				$fname = validate_input($_POST['firstname']);
				$boolean = true;	
			}
			
			if(empty($_POST['lastname']))
			{
				
				$lnErr = "Last name required..!";
				$boolean = false;
			}
			else
			{
				$lname = validate_input($_POST['lastname']);
				$boolean = true;
			}
							
							
			/////////////////////////////////////////////////////////////				
											
											
											
			//check email
							
			if(empty($_POST['email']))
			{
				
				$emailErr = "Email required..!";
				
			}
			else
			{
				$email = validate_input($_POST['email']);
				$boolean = true;
			}
			
			//////////////////////////////////////////////////////////////////
			
			
			
			//check username
							
			if(empty($_POST['username']))
			{
								
				$usnErr = "Username Required..!!!";
				$boolean = false;
								
			}else
			{
								
				$uname = validate_input($_POST['username']);
				$boolean = true;
			}
			
			///////////////////////////////////////////////////////////////////
			
			
							
			//check password
			$pwlength = strlength($_POST['pw']);
							
			
			if(empty($_POST['pw']))
			{
				
				$pwErr = "Password required..!";
				$boolean = false;
				
			}
			else if($pwlength)
			{
								
				$pwErr = $pwlength;
				$boolean = true;
								
			}
			else
			{
								
				$pw = validate_input($_POST['pw']);
				$boolean = true;
			}
			
			//////////////////////////////////////////////////////////////////
			
			
							
			//check confirm pw
			
			if(empty($_POST['confirmPW']))
			{
				
				$cpwErr = "Confirmed password required..!";
				$boolean = false;
				
			}
			
			else if($_POST['confirmPW'] != $pw)
			{
								
				$cpwErr = "Password not match...!";
				$boolean = false;
			}
			
			else
			{
				$cpw = validate_input($_POST["confirmPW"]);
				$boolean = true;
			}
			
			if(isset($_POST['chkbx']))
			{
								
				$boolean = true;
								
			}
			else
			{
								
				$boolean = false;
			}
							
							
			function strlength($str)
			{
								
				$ln = strlen($str);
				if($str>15)
				{
									
					return "Password should less than 10 characters";
									
				}elseif($ln<5)
				{
									
					return "Password should greater than 5 characters";
				}
					return;
								
			}
							
			function validate_input($data)
			{
								
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
					
					if(!$row1 = mysqli_fetch_array($result))
					{
						
						NewUser();
					}
					else
					{
						echo "<script>
						
							alert ('You are already registered user...!!');
						</script>";
					}
					
					
				}	
				
				if(isset($_POST['signup']))
				{
					
					SignUp();
					mysqli_close($con);
					$boolean = false;
				}
					
			}
			
		}*/
	//}	
	
	if(isset($_POST['signup']))
	{
		require_once('connection.php');
		
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$NIC   = $_POST['NIC'];
		$email = $_POST['email'];
		$phone = $_POST['phoneno'];
		$username = $_POST['username'];
		$pw = $_POST['pw'];
		$cpw = $_POST['confirmPW'];
		
		
		/*echo $NIC;
		echo $email;
		echo $phone;
		echo $username;
		echo $pw;*/
		
		$countun = 0;
		$countnic = 0;
		$countemail = 0;
		$countphone = 0;
		
		//checkusername
		$queryun = "SELECT * from userlogindetails where Username = '$username'";
		$resun = mysqli_query($con,$queryun);
		
		$countun = mysqli_num_rows($resun);
		
		//check nic
		$queryNIC = "SELECT * from petowners p,staffdetails s where p.NIC = '$NIC' or s.NIC = '$NIC'";
		$resNIC = mysqli_query($con,$queryNIC);
		
		$countnic = mysqli_num_rows($resNIC);
		
		//checkemail
		$queryEmail = "SELECT * from petowners p, staffdetails s where p.Email = '$email' or s.EmailAddress = '$email'";
		$resEmail = mysqli_query($con,$queryEmail);
		
		$countemail = mysqli_num_rows($resEmail);
		
		//check phone
		$queryPhone = "SELECT * from petowners p, staffdetails s where p.Phone = '$phone' or s.PhoneNumber = '$phone'";
		$resPhone = mysqli_query($con,$queryPhone);
		
		$countphone = mysqli_num_rows($resPhone);
		
		//echo $count;
		
		if($countun>0)
		{
			?>
				<!--<script type = "text/javascript">
					alert("This username already exist. Please choose another username???");
					window.location = "ownerReg.php";
				</script>-->
				<div id = "alert" class="alert alert-warning" role="alert">
					<strong>Warning!</strong> This username already exist. Please choose another username???
				</div>
			<?php
			
		}
		else if($countnic>0)
		{
			
			?>
				<!--<script type = "text/javascript">
					alert("You can't register using this NIC. You are already registered user ???");
					window.location = "ownerReg.php";
				</script>-->
				<div id = "alert" class="alert alert-warning" role="alert">
					<strong>Warning!</strong> You can't register using this NIC. You are already registered user ???
				</div>
			<?php
		}	
		else if($countemail>0)	
		{	
	
			?>
				<!--<script type = "text/javascript">
					alert("You can't register using this Email. You are already registered user???");
					window.location = "ownerReg.php";
				</script>-->
				<div id = "alert" class="alert alert-warning" role="alert">
					<strong>Warning!</strong> You can't register using this Email. You are already registered user!!!"
				</div>
			<?php
		}
		else if($countphone>0)
		{
			?>
				<!--<script type = "text/javascript">
					alert("You can't register using this Phone number. You are already registered user???");
					window.location = "ownerReg.php";
				</script>-->
				<div id = "alert" class="alert alert-warning" role="alert">
					<strong>Warning!</strong> You can't register using this Phone number. You are already registered user!!!
				</div>
			<?php
		}
		else if($cpw != $pw)
		{
			?>
				<!--<script type = "text/javascript">
					alert("These two passwords are not matching. Please Re-enter???");
					window.location = "ownerReg.php";
				</script>-->
				<div id = "alert" class="alert alert-warning" role="alert">
					<strong>Warning!</strong> These two passwords are not matching. Please Re-enter???
				</div>
			<?php
		}
		else
		{
			//$hashed_pw = hash($pw,PASSWORD_BCRYPT);
			$hashed_pw = hash('sha512',$pw);
		
			$sql = "INSERT INTO petowners(Fname,Lname,NIC,Email,Phone,Status) VALUES ('$fname','$lname','$NIC','$email','$phone','1')";
			mysqli_query($con,$sql);
			
			$sql = "SELECT UserId FROM petowners where NIC = '$NIC'";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_assoc($result);
			
			//echo "<br>".$row['UserId'];
			
			$sql1 = "INSERT INTO userlogindetails(UserId,Username,Password,UserType) VALUES (".$row['UserId'].",'$username','$hashed_pw','Pet Owner')";
			mysqli_query($con,$sql1);
			
			?>
				<script type = "text/javascript">
					alert("Your details saved successfully. Please Register your pet!!!");
					window.location = "../Pumudi/PetReg2.php";
				</script>
			<?php
		}
		
		
	}
	
						
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
			background:url(images/hdd.jpg);
			<!--background-size:cover;
			background-repeat:repeat;-->
			
			height: 50%; 

			  <!--Center and scale the image nicely-->
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;
				   
		}
	</style>
	
	<!--<script src = "validation_JS/jquery-3.2.1.min.js"></script>-->
	
	<link rel = "stylesheet" type="text/css" href = "styles/ownerR.css">
	
</head>
	<body>
	
		<span><h4><a href = "../Home/MainHome.php"><font color = "white">Home</font><a><h4></span>
	
		<form id ="regForm" onsubmit = "return formValidation()" action="" method="post" autocomplete = "on">
		
			

			<div id ="nav">
			
				<h3>Pet Owner Registration</h3>

				<input type="text" name="firstname" id ="fnameid" placeholder = "First Name" required pattern = "^[A-Za-z]+"></br>
				<!--<span id = "ferr"><?php echo $fnErr?></span>-->
				
				<input type="text" name="lastname" id="lnameid" placeholder = "Last Name" required pattern = "^[A-Za-z]+"></br>
				<!--<lable><?php echo $lnErr?></lable>-->
				
				<input type="text" name="NIC" id = "nicid" placeholder = "NIC NO" autocomplete = "off" required></br>
								
				<input type="email" name="email" id="emailid" placeholder = "E-mail Address" autocomplete = "off" required></br>
				<!--<lable><?php echo $emailErr?></lable>-->
												
				<input type="text" name="phoneno" id = "pnoid" placeholder = "Phone Number" autocomplete = "off" maxlength = "10" required  ></br>
								
				<input type="text" name="username" id="unid" placeholder = "UserName" autocomplete = "off" required pattern = "^[A-Za-z0-9]+"></br>
				<!--<lable><?php echo $usnErr?></lable>-->
							
				<input type="password" name="pw" id ="pwid" placeholder = "Password" maxlength = "15" pattern = "^[A-Za-z0-9]+" ></br>
				<!--<lable><?php echo $pwErr?></lable>-->
			
				<input type="password" name="confirmPW" id="cpwid" placeholder = "Confirmed Password" maxlength = "15" required pattern = "^[A-Za-z0-9]+"></br>
				<!--<lable><?php echo $cpwErr?></lable>-->
				
				<input type ="checkbox" name = "chkbx" required><font size = "4px"><b>Are you sure?</b></font></br>
				
				<input type="submit" id ="submit" name="signup" value="Save Details">
								
								<a href = "#" onClick = "autoFill() ; return true;">DEMO</a>

			</div>

		</form>
		
		<script type="text/javascript">
			function autoFill(){
				document.getElementById('fnameid').value="Rashmi";
				document.getElementById('lnameid').value="Tharaka";
				document.getElementById('nicid').value="19980120";
				document.getElementById('emailid').value="rashmi@gmail.com";
				document.getElementById('pnoid').value="0718123457";
				document.getElementById('unid').value="rashmi20";
				document.getElementById('pwid').value="rashmi20";
				document.getElementById('cpwid').value="rashmi20";
			}
		</script>	
	
		
		
	</body>
	
</html>
		
	
	
	
