function formValidation(){
		
	$ulErr = $fnErr = $lnErr = $nicErr = $emailErr = $pnoErr = $usnErr = $pwErr = $cpwErr = "";
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
			
			$emailErr = "Email required..!"
			
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
							
		/*if(isset($_POST["chk1"])){
							
			$boolean = true;
							
		}else{
							
			$boolean = false;
		}*/
						
						
		function strlength($str){
							
			$ln = strlen($str);
			if($str>10){
								
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
					
				
				
	}
				
						
}
				