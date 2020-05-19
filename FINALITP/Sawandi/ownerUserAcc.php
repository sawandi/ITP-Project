<!--<span><h4 align = "right"><font color = "white"><a href = "../Home/MainHomePetOwner.php">Home<a></font><h4></span>-->
<form method = "post">
<input type = 'submit' name = 'logout' value = "Logout"/>

</form>
<?php

	//session_start();
	//echo "Hello".$_SESSION["username"];
	
	if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location:../Home/MainHome.php");
	}

?>




<?php
			
				
	session_start();
	//echo "Hello";
	//echo " ";
	//echo $_SESSION["username"]; 
	
	$loginUsername = $_SESSION["username"]; 
	
	//echo $loginUsername;
	
	require_once('connection.php');
	
	$sql = "SELECT * from petowners p, userlogindetails u where u.Username = '$loginUsername' and u.UserId = p.UserId";
	$result = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	$db_fname = $row['Fname'];
	$db_lname = $row['Lname'];
	$db_nic = $row['NIC'];
	$db_email = $row['Email'];
	$db_phone = $row['Phone'];
	$db_uname = $row['Username'];
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>User Account</title>
	
	<style>
		body
		{
			background:url(images/prof.jpg);
			background-size:cover;
			background-repeat:repeat;
				   
		}
	</style>
	
	<!--<link http://getbootstrap.com/css/#grid >-->
	
	<link rel = "stylesheet" type="text/css" href = "styles/ownerProfpge.css">
	
</head>
	<body>
		<!---->
		
		<div class = "main">
	
			<h1 class = "well" id = "well"><?php echo $row['Fname']?><?php echo " "?><?php echo $row['Lname']?></h1>
		
			
			
			
			<div>
				
					<img class="profile" id = "profile" align = "center" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAK0AAADHCAMAAABcHiNNAAAAflBMVEXh4uMoKCglJSXk5eYiIiLg4eLd3t/P0NHa29wfHx9WV1fn6Om+v8AcHBzLzM3X2NlLS0szMzOsra41NTWRkpMsLCyMjIxAQEBoaGk8PDzFxsemp6h9fn6en6AWFhZOT0+1trZcXV1zc3N7fHxvcHAAAACYmJkYFxeEhYWNjo/BJYcaAAAGWElEQVR4nO3ci3aqOhAGYJhEuSqCICBYQT2Wvv8LHsS227Zqk8nEy975H8D1rawQcx3LfqZY9wZIxWj1xWj1xWj7gJ6f1aKFbKbjZ7VoOay7Rk/jkmv5ZNaF7sKj/t0htFrgk7wLx1bQctLf/QilFiDz99OAWRZ7eC3wuF0tWW99fG1v9VfT0WDttbuJls+MRgue7VfRh7XXpuU8m3icmkyhBYiLhAXWScZRWL1t25z4b4JAC9mucr9Yh+ZlAXOaNCflKmuBt43Dvls/xCxZU35valrwYN1E7AJ2AC9bwj8KJS3P2ia4Qh24UUHXeRW0YLd76xfrwK0zKi5eO4lXl/rrd24HRFys1uObpUDDHuOuXmi4OC232/Dat/WjeVcZydCA0nr5IhKnHjLezym4CC3wohlLNOwQdx8TdAZ5LX9ZOJLUoXUbT711pbUwS2R67J8ETanMldVC0WCoQ5KZKldS+7LD9IL3jJJckSunnbQuqhd8tq6txpXSwk4NawWJ2gxSRgvtVA3bp1LiSmihbFStfd9dqYy7ElqvVm7ZQ/YeniuuhTIi0Qb7OZorod2RYPvO8IbuDMJayBIirRV1SKyEtlQfEN7DnN1Et7YVWymIcZH/weL9diM5pb2WIClRXVdYm6VjOq0V7VDrdnHtakSoHS+0ti3EZEOC0X7Xlg2ldoRbpglrZyGptkINCkZrtH+1tl2SanFLCGFtQTep6TN+0zveEms1/zsYrT4t7VemW0s7gj2ZtkatzO6kdbdGa7SDdqN1FQk55dqBObirLMLaOeW6TLuWdBX5ZG279J+pbRvchr7EXg0d9hZawp0l/do94a4dS2K9/RZqwh1Ry1kVmT4txOu9S6hlwRLTF8S0EO+nEeWOqGVFmDFMTJulwndo7q/la7ITkltofdIl5FGLuTJ4Ly1ztH1lOrTTp9I+V9vqG291fGUNZkv0btoEc+5/L+2owmzg3ks7TrXNav55rVtr28nXoI02mOn4vWY1UaFNCyXpkbR1+CvTp7WhpsVaFm5DQUzLfWptM9N3XgY5ccfVexYJqx/PhpQyThFWYa23oW1bd6tz/5avSQ+gdO/VZCvSQ2nc1vh9ziJZhXwWJX7XrqO50HrAot8SiN9j9GqHZlxg+Kv5EnebJ0VIsWMTKLwjkLnlzvNO4bXDR8uGCo8e5F4QcPWr46xSeCcp9zqD+8raIEXeFJbXQq6u7W6nnT2T1ubK2hFuhoDS/qesHeNuNaO0L8pDGG6Jg9O+qp6ks6lKIQhJ7UR1KsZClWf0klrll0XYmS1Ky1tVLWpvEamFXHGaG6ww+19IrZ3t1bSjNwWstJb7UxUsc4obvTR8T6dy3juqVLot4q20yjszFq1v9ub0GD7H79uw3Q3f8x4zQS9/maNYUwNVP2GB7LosUixLgNHCHHkjiDl30Noc/cRIaUTA1v3wCtxFkAD3wNBoRbSeWt2w22rZqohthapht9X2Y1izWM/hBvtgJ3ktcNiD111WuxnX/fr4M0NZOIV5IxtFy9q3MT1YflYDWVGpbuUyFlV1bksXi5JdO9jl9kxZOAw4CNOilATL7TFCvGnotsiZ03SzTGaIkKn74cVFSGY9et1p5Wfin5z4Tj7k2ymuZtF1MAtrX7SBRc8i+awOfythhwUH0X5XCnVgwVPpeBGO9FiHBFGTzgSGNAEteLANpQuCSYaNponv/VYc5lctwHzj0PfXM95+jNiW13vwL1qY5Ftd/fUMOHD2xfz1sveqFibzTr4onBo4Sur8Yg++ou37a90oFq3CeN0wnb+cH4Ivag9lYrV/Wxe8lrNany2JeEnrzXd3aNdTr3+m8tl5LfeKSv2QVMk7mnb5j/OUc1p4naXErxswXrcpvhf0/KntB9hUw4QAERZ9r3b1QwvxjuRgnyLMStov84fvWm8tWCf2RlnuTrlftRyKpc7Zi3yYW5+MZV+0PN8/ltU69IbqT3muEy2oVN3UGBZ+3tC0TrBboms+1AmmH4WqP7U8TknXXJRhTn2cSH5ovXXzmA07hLnHsojvWt4uHxjbJxjeRwxa4Fv6527ECaqcD1qA7n7TLeGwJufW4bwufexe8B629C2bl8T3lrWFhRbPSYsBak6eUNZZ1B3Sch4mJiYmJiYmJiYmJiYmJiYmJiYmJiYmJv9y/geB6X707Ta+kQAAAABJRU5ErkJggg=="
					alt="" /><br>
					
					<center>
						<a href=<?php echo $row['Email']?>><b><font size="5em"><?php echo $row['Email']?></font></b></a>	
					</center>
					
					<div class ="list-group col-md-6 pull-right pad">
					
						<!--<p class="list-group-item highlight">First Name<span class="pull-right"><?php echo "	"?><?php echo $row['Fname']?></span></p>
						<p class="list-group-item highlight">Last Name<span class="pull-right"><?php echo "	"?><?php echo $row['Lname']?></span></p>
						<p class="list-group-item highlight">NIC NO<span class="pull-right"><?php echo "	"?><?php echo $row['NIC']?></span></p>
						<p class="list-group-item highlight">Email Address<span class="pull-right"><?php echo "	"?><?php echo $row['Email']?></span></p>
						<p class="list-group-item highlight">Phone NO<span class="pull-right"><?php echo "	"?><?php echo $row['Phone']?></span></p>
						<p class="list-group-item highlight">UserName<span class="pull-right"><?php echo "	"?><?php echo $row['Phone']?></span></p>-->
		  
						</br>
					<!--<h3>User Details</h3>-->
					
						<div id = "det">
							<center>
								<lable for = "fname"><b>First Name</b></lable>
								<input type = "text" value ="<?php echo $row['Fname']?>" readonly>
								
								<br>
								<lable for = "fname"><b>Last Name</b></lable>
								<input type = "text" value ="<?php echo $row['Lname']?>" readonly>
								
								<br>
								<lable for = "nic"><b>NIC</b></lable>
								<input type = "text" value ="<?php echo $row['NIC']?>" readonly>
							
								<br>
								<lable for = "email"><b>Email Address</b></lable>
								<input type = "text" value = "<?php echo $row['Email']?>" readonly>
								

								<br>
								<lable for = "email"><b>Phone Number</b></lable>
								<input type = "text" value="<?php echo $row['Phone']?>" readonly>
								
							
								<br>
								<lable for = "uname"><b>Username</b></lable>
								<input type = "text" value ="<?php echo $row['Username']?>" readonly>
							</center>
							
						</div>
					
					<br>
					<div id="navi">
		
						<button><a href = "editProf.php">Edit Profile</a></button>
						<button><a href = "updateOwnerLogin.php">Edit Login</a></button>
						<button><a href = "../Pumudi/PetReg2.php">Pet Sign Up</a></button><br>
						
						<!--<input type = "button" onclick = "editProf.php" value = "Edit Profile">
						<input type = "button" onclick = "updateOwnerLogin.php" value = "Edit Login Info">-->
						
						<!--<a href = "petProf.php">Pet Profile</a><br>-->
						<!--<a href = "searchVaccination.php">Search Next Vaccination</a><br>
						<a href = "viewVaccinateHistory.php">View Vaccination History</a><br>-->
					</div>
				
				</div>
			
			<div>

		</div>
	
	</body>
</html>


			