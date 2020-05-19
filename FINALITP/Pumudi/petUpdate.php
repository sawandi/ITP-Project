<?php
require_once('connection.php');

$id = $_GET['id'];
$getdata = mysqli_query($con, "Select * from pets where PetId='$id'");
$rows = mysqli_fetch_array($getdata);
$uid = $rows['UserId'];
$ptname = $rows['PetName'];
$bd = $rows['Breed'];
$ag = $rows['Age'];
$cl = $rows['Colour'];
$gd = $rows['Gender'];
$spe = $rows['Species'];


if(isset($_POST['update'])){
	//echo "Updated Successfully";
	$petId = $_POST['petId'];
	$uI = $_POST['userId'];
	$petname = $_POST['petname'];
	$breed = $_POST['breed'];
	$colour = $_POST['colour'];
	$age = $_POST['age'];
	$sp = $_POST['species'];
	$gender = $_POST['gender'];
	
	
	
	$sql = "UPDATE pets SET UserId='$uI',PetName ='$petname', Breed ='$breed', Age='$age',Colour='$colour', Gender ='$gender',Species ='$sp'  WHERE PetId = '$petId'";
	
	mysqli_query($con,$sql);
	echo "<script>alert('Updated Successfully')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Update Pet Registration</title>
	
	<style>
		body
		{
			background:url(images/bunch.jpg);
			background-size:100% 155%;
			background-repeat:no-repeat;
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/pwreg.css">
	<!--<script type=text/javascript">
            function PreviewImage(){
            var oFReader = new FileReader();
            oFReader.readDataURL(document.getElementById("imglink").files[0]);
   
            oFReader.onload=function(oFREvent){
              document.getElementById("uploadPreview").src= oFREvent.target.result;
              };
            };
</script>-->
</head>
	<body>
	
		<form id ="regForm" onsubmit = "return Validate()" action="" method="post">
		
			<div id ="nav">
			
				<center><h3>Pet Registration</h3></center>
				
				<!--<lable>PetId</lable>-->
				<input type="text" name="petId" id ="petid" value="<?php echo $id; ?>" placeholder = "Pet ID" align="right" width="48" height="48"  required></br>

				<input type="text" name="petname" id ="pnameid" value="<?php echo $ptname; ?>" placeholder = "Pet Name" required pattern = "^[A-Za-z]+"></br>
				<!--<span id = "perr"><?php echo $pnErr?></span>-->
                               
                   <input type="text" name="userId" id ="userid"  placeholder = "User Id" required></br>
				<!--<span id = "uierr"><?php echo $uiErr?></span>-->
				
				<input type="text" name="breed" id ="breedid" value="<?php echo $bd; ?>" placeholder = "Breed" autocomplete = "off" required></br>
				<!--<lable><?php echo $brErr?></lable>-->
				
				<input type="text" name="colour" id ="colorid" value="<?php echo $cl; ?>" placeholder = "Colour" autocomplete = "off" required></br>
				<!--<lable><?php echo $clErr?></lable>-->
                                
                                 <input type="text" name="age" id ="ageid" value="<?php echo $ag; ?>" placeholder = "Age" autocomplete = "off" required></br>
				<!--<lable><?php echo $agErr?></lable>-->
				
				
                           	<select name="species" id='state' value="<?php echo $spe; ?>">
			<!--<center><font size="4em"><b>UserType</b></font></center>-->
			
			<option>Species</option>
			<option>Cat</option>
			<option>Dog</option>
			</select>      

                                <!-- <lable>Gender:</lable>
                                 <input type="radio" class="radiobtn" name="gender" value="male" checked required>Male<input type="radio" class="radiobtn" name="gender" value="female" required><fonts-size:4px>Female</font><br>-->
				<br>
				<br>
 
		<div class="horizontal-group">
    <div class="form-group left">
      <center><label class="label-title"><font size="4em",font color="black">Gender</font></label></center>
        <div class="input-group">
            <label for="male">
                <input type="radio" name="gender" value="male" id="male"><font size="4em",font color="black">Male</font></label>
            <label for="female">
                <input type="radio" name="gender" value="female" id="female"><font size="4em",font color="black">Female</font></label>
        </div>
	</div>
	</div>

                                 
                  
                                

				<!--<lable><font-size:2px>Species:</font></lable>
                                  <select class="species" >
				<option value=""hidden>Species</option>
				<option value="Cat"  name="cat">Cat</option>
                                    <option value="Dog" name="dog">Dog</option>
                                      </select>-->
									  <br>
                               <!-- <lable><font-size:2px>Pet Picture:</font></lable>
                                 <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>-->
                                 
             
				
				
				<input type="submit" id ="submit" name="update" value="Save Details"></center>
                                
								

			</div>

		</form>
		</body>
		</html>