<?php
require_once('connection.php');

$id = $_GET['id'];
$getdata = mysqli_query($con, "Select * from carddetails  where CardId ='$id'");
$rows = mysqli_fetch_array($getdata);
$CVVC= $rows['CVVCode'];
$CardNo = $rows['CardNumber'];
$BankNa = $rows['BankName'];
$ExpireDa = $rows['ExpireDate'];
$CardTy = $rows['CardType'];





if(isset($_POST['update'])){
	//echo "Updated Successfully";
	
	$CardId  = $_POST['Cardid'];
	$CardType = $_POST['CardType'];
	$BankName= $_POST['Bankname'];
	$CardNumber = $_POST['CardNumber'];
	$CVVCode = $_POST['CVVCode'];
	$ExpireDate = $_POST['ExpiredDate'];
	
	
	
	$sql = "UPDATE carddetails SET CVVCode ='$CVVCode', CardNumber ='$CardId ', BankName ='$BankName', ExpireDate ='$ExpireDate',CardType ='$CardType' WHERE CardId = '$CardId'";
		//$sql = "UPDATE productstock SET AvailableQTY ='$avilqty', ReOrderLimit ='$reolimit', UnitPrice ='$utprice', ExpiredQTY ='$expdqty' WHERE ProductId = '$prodId' && Status=1";

	mysqli_query($con,$sql);
	echo "<script>alert('Updated Successfully');window.location.href='carddetailstables.php';</script>";
		//echo "<script>alert('Updated Successfully');window.location.href='ProductStockSelect.php';</script>";

}
?>



<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title> Update Card Details</title>
	
	<style>
		body
		{
			background:url(images/117.jpg);
			background-size:100% 350%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/CardDetails.css">
	
</head>
	<body>
	
	<form id ="regForm"  action="" method="post">
		

			
			<div id ="nav">
			
				<h1><center><b><u>Update Card Details</u></b></center></h1>
				
                <input type="text" name="Cardid" id ="cid" value="<?php echo $id; ?>" placeholder = "Card ID"></br>
				
				<input type="text" name="CardType" id ="cardtypeid"value="<?php echo $CardTy; ?>"  placeholder = "Enter New Card Type" required pattern = "^[A-Za-z]+"></br>
				<!--<span id = "ferr"><?php echo $ctErr?></span>-->
				
				<input type="text" name="Bankname" id="banknameid" value="<?php echo $BankNa; ?>"  placeholder = "Enter New Bank name" required pattern = "^[A-Za-z]+"></br>
				<!--<lable><?php echo $bnErr?></lable>-->
				
				<input type="text" name="CardNumber" id = "cardnumberid" value="<?php echo $CardNo; ?>"  placeholder = "Enter New Card Number" autocomplete = "off" required></br>
												
				<input type="text" name="CVVCode" id = "cvvcodeid" value="<?php echo $CVVC; ?>"  placeholder = "Enter New CVV Code" autocomplete = "off" maxlength = "3" required  ></br>
								
				<input type="date" name="ExpiredDate" id="expireddateid" value="<?php echo $ExpireDa; ?>"  placeholder = "Enter New Expired Date" autocomplete = "off" required pattern = "^[A-Za-z0-9]+"></br>
				<!--<lable><?php echo $usnErr?></lable>--><br>
							
				
				
				
				
				<input type="submit" id ="submit" name="update" value="Update Details">
								

			</div>

		</form>
		
		
	</body>
	
</html>
		
	
	
	
