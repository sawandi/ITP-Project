<?php

	session_start();
	//$_SESSION["username"] = $_POST['username'];
	
	//echo password_hash('dishma123',PASSWORD_BCRYPT);
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>User Login</title>
	
	<style>
		body
		{
			background:url(images/dog-and-cat.jpg);
			background-size:cover;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">-->
	
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
	
	<link rel = "stylesheet" type="text/css" href = "styles/ownerLogin.css">
	
	<script>
		
		/*$(document).ready(function(){
			
			$("#open").click(function(){
			
				$("input").attr("type","password");
				$(this).hide();
				$("#close").show();
				
			});
			
			$("#close").click(function(){
			
				$("input").attr("type","text");
				$(this).hide();
				$("#open").show();
			});
			
		});*/
		
		/*$(".toggle-password").click(function() {

			  $(this).toggleClass("fa-eye fa-eye-slash");
			  var input = $($(this).attr("toggle"));
			  if (input.attr("type") == "password") {
				input.attr("type", "text");
			  } else {
				input.attr("type", "password");
			  }
		});*/
				
	</script>
	
</head>
	<body>
	
		
		<div id = "nav">
		
			<h3 align = "canter">User Login</font></h3>
		
			<form id ="LoginForm"  method="post">
				
				<input type="text" name="username" id="username" placeholder = "Enter User Name" required></br></br>

				<input type="password" name="pw" id ="password-field" placeholder = "Enter Password" required>
				<!--<i id = 'close' style ='display:none;' class="icon-eye-close"></i> 
				<i id = 'open' class="icon-eye-open"></i> -->
				
				<!--<input id="password-field" type="password" class="form-control" name="pw" placeholder = "Enter Password" required>
				<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>-->
			
				<br><br>
				<!--<a href = "forgetLogin.php">Fogotten Login Details</a><br></br>-->
							
				<input type="submit" name="login" value="LOGIN">
			
			</form>
			
		</div>
		
	</body>

</html>	

<?php

	require_once('config.php');
	
	if(isset($_POST['login']))
	{
		
		$username = $_POST['username'];
		$password = $_POST['pw'];
		
		//$username = strip_tags(mysqli_real_escape_string($con,trim($username)));
		//$password = strip_tags(mysqli_real_escape_string($con,trim($password)));
		
		//$select = "SELECT * from  userlogindetails where UserName = '$username'";
		
		//$select = "SELECT * from  userlogindetails u,petowners p where Username = '$username' and u.UserId = p.UserID";
		
		$select = "SELECT * from  userlogindetails where Username = '$username' ";
		$res = mysqli_query($conn,$select);
		
		$row = mysqli_fetch_assoc($res);
		
		$userType = $row['UserType'];
		
		$query = "SELECT p.Status from petowners p,userlogindetails u where p.UserID = u.UserID";
		$result = mysqli_query($conn,$query);
		
		$row2 = mysqli_fetch_assoc($result);
		
		$crrntStatus = $row2['Status'];
		
			if(mysqli_num_rows($res)>0)
			{
				if($userType == "Pet Owner")
				{
					if($crrntStatus==1)
					{
						
						//while($result = mysqli_fetch_array($res))
						//{
							
							$db_uname = $row['Username'];
							$db_pw = $row['Password'];	

							$hashed = hash('sha512',$password);
							
							/*echo $db_uname;
							echo "<br>";
							echo $db_pw;
							echo "<br>";
							echo $hashed;*/
						
							if($db_pw == $hashed && $db_uname == $username)
							{
								
								$_SESSION["username"] = $_POST['username'];
								$_SESSION["usertype"] = $userType;
								
								
								?>
								
								<script type = "text/javascript">
									alert("Successfully login!!!");
									window.location = "PetCarehomeOwner.php";
								</script>
								
								<?php
							}
							else
							{
								?>
								<!--echo "Sorry, Username or password is incorrect??";-->
								
									<div id = "alert" class="alert alert-warning" role="alert">
										<strong>Warning!</strong> Sorry, Username or password is incorrect??
									</div>
								
								<?php
							}
					//}
					
					}
					else
					{
						?>
								
							<script type = "text/javascript">
							
								alert("Sorry, You are not a active user now??");
									
							</script>
								
						<?php
					}
					
				}
				else if($userType == "Receptionist")//check user type
				{
					$db_uname = $row['Username'];
					$db_pw = $row['Password'];	

					$hashed = hash('sha512',$password);
							
					/*echo $db_uname;
					echo "<br>";
					echo $db_pw;
					echo "<br>";
					echo $hashed;*/
						
					if($db_pw == $hashed && $db_uname == $username)
					{
								
						$_SESSION["username"] = $_POST['username'];
						$_SESSION["usertype"] = $userType;		
								
						?>
								
							<script type = "text/javascript">
								alert("Successfully login!!!");
								window.location = "Receptionist/ReHome.php";
							</script>
								
						<?php
					}
					else
					{
						?>
						<!--echo "Sorry, Username or password is incorrect??";-->
								
							<div id = "alert" class="alert alert-warning" role="alert">
								<strong>Warning!</strong> Sorry, Username or password is incorrect??
							</div>
								
						<?php
					}
				}
				
				else
				{
					$db_uname = $row['Username'];
					$db_pw = $row['Password'];	

					$hashed = hash('sha512',$password);
							
					/*echo $db_uname;
					echo "<br>";
					echo $db_pw;
					echo "<br>";
					echo $hashed;*/
						
					if($db_pw == $hashed && $db_uname == $username)
					{
								
						$_SESSION["username"] = $_POST['username'];
						$_SESSION["usertype"] = $userType;		
								
						?>
								
							<script type = "text/javascript">
								alert("Successfully login!!!");
								window.location = "Admin/AdminHome.php";
							</script>
								
						<?php
					}
					else
					{
						?>
						<!--echo "Sorry, Username or password is incorrect??";-->
								
							<div id = "alert" class="alert alert-warning" role="alert">
								<strong>Warning!</strong> Sorry, Username or password is incorrect??
							</div>
								
						<?php
					}
				}
				
			}
			else
			{
				?>
				<!--echo "User Does not Exit??";-->
					<div id = "alert" class="alert alert-warning" role="alert">
						<strong>Warning!</strong> User Does not Exist??
					</div>
				<?php
			}
		
	
	}

?>