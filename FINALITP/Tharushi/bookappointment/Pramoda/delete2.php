<?php require_once('connection.php');?>
<?php
	if(isset($_GET['PId'])){
		$id=mysqli_real_escape_string($con,$_GET['PId']);
		$query = "UPDATE payments SET status=1 WHERE PaymentId={$id} LIMIT 1";
		$result = mysqli_query($con,$query);
		
		if($result){
			header('Location:paymentTable.php?msg=service-deleted');
		}
	}else{
			header('Location:paymentTable.php?err=delete_failed');
		}
?>