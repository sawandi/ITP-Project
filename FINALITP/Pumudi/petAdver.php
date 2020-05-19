<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
           <title>Pet Advertisement Page</title>
       <style>
		body
		{
			background:url(images/images9.jpg);
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

			<form id ="regForm" onsubmit = "return Validate()" action="PetAdverInsert.php" method="post">
		
			<div id ="nav">
			
				<center><h3>Pet Advertisement</h3></center>

				<input type="text" name="name" id ="nameid" placeholder = "Customer Name" required pattern = "^[A-Za-z]+"></br>
				<!--<span id = "cerr"><?php echo $cnErr?></span>-->
                               
                 <input type="text" name="phoneno" id ="phoneid" placeholder = "Phone No" required></br>
				<!--<span id = "pnerr"><?php echo $pnErr?></span>-->
				
				<input type="text" name="email" id ="emailid" placeholder = "Email" autocomplete = "off" required></br>
				<!--<lable><?php echo $emErr?></lable>-->
				
				<input type="text" name="petdescription" id ="desid" placeholder = "Pet Description " autocomplete = "off" required></br>
				<!--<lable><?php echo $dsErr?></lable>-->
                                
                  <br>
                   <lable><font-size:2px>Pet Advertisement:</font></lable>
                    <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>
                                 
             
				
				
				<input type="submit" id ="submit" name="submit" value="Save Details"></center>
                                
								

			</div>
			<a href="#" onClick="autoFill();return true;">DEMO</a>

		</form>
        <script type="text/javascript">
		function autoFill(){
			document.getElementById('nameid').value="Britney";
			document.getElementById('phoneid').value="0112223456";
			document.getElementById('emailid').value="btni4@gmail.com";
			document.getElementById('desid').value="healthy dog";
			
		}
		</script>

				
		
	</body>
	</html>