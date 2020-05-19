<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Pet Registration</title>
	
	<style>
		body
		{
			background:url(images/hdd.jpg);
			background-size:100% 155%;
			background-repeat:no-repeat;
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/pwreg.css">
	<script type=text/javascript">
            function PreviewImage(){
            var oFReader = new FileReader();
            oFReader.readDataURL(document.getElementById("imglink").files[0]);
   
            oFReader.onload=function(oFREvent){
              document.getElementById("uploadPreview").src= oFREvent.target.result;
              };
            };
</script>
</head>
	<body>
	
		<form id ="regForm" onsubmit = "return Validate()" action="PetRegInsert.php" method="post">
		
			<div id ="nav">
			
				<center><h3>Pet Registration</h3></center>

				<input type="text" name="petname" id ="pnameid" placeholder = "Pet Name" required pattern = "^[A-Za-z]+"></br>
				<!--<span id = "perr"><?php echo $pnErr?></span>-->
                               
                                 <input type="text" name="userId" id ="userid" placeholder = "User Id" required></br>
				<!--<span id = "uierr"><?php echo $uiErr?></span>-->
				
				<input type="text" name="breed" id ="breedid" placeholder = "Breed" autocomplete = "off" required></br>
				<!--<lable><?php echo $brErr?></lable>-->
				
				<input type="text" name="colour" id ="colorid" placeholder = "Colour" autocomplete = "off" required></br>
				<!--<lable><?php echo $clErr?></lable>-->
                                
                                 <input type="text" name="age" id ="ageid" placeholder = "Age(months)" autocomplete = "off" required></br>
				<!--<lable><?php echo $agErr?></lable>-->
				
				
                           	<select name="species" id='state'>
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

                                 
                  
                                

													  <br>
                                
             
		 <input type="submit" id ="submit" name="submit" value="Save Details"></center>
                                
								

			</div>
			 <a href="#" onClick="autoFill();return true;">DEMO</a>

		</form>
        <script type="text/javascript">
		function autoFill(){
			document.getElementById('pnameid').value="rafael";
			document.getElementById('userid').value="114";
			document.getElementById('breedid').value="alsesion";
			document.getElementById('colorid').value="brown";
			document.getElementById('ageid').value="12";
			document.getElementById('state').value="Dog";
		}
		</script>
			
			
				
		
	</body>
	</html>