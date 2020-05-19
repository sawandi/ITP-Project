<?php 

session_start();

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
$mysqli = new mysqli('localhost:3306','root','','animalcare') or die(mysqli_error($mysqli));

$id=0;
$update= false;
$scId = '';
$sId='';
$age = '';
$scharge = '';
$ptype = '';

if(isset($_POST['submit'])){
	//$scId=$_POST['ServiceChargeId'];
	$sId = $_POST['serviceId'];
	$age = $_POST['AgeGap'];
	$scharge = $_POST['ServiceCharge'];
	$ptype = $_POST['petType'];
	
	
	mysqli_query($mysqli,"INSERT INTO servicecharges(serviceId,AgeGap,ServiceCharge,PetType) VALUES('$sId','$age','$scharge','$ptype')") or
		die($mysqli->error);
		
		$_SESSION['message']="Record has been saved!";
		$_SESSION['msg_type']="success";
		
		header("location: ServiceCharge.php");
	
}
if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->mysqli_query( "UPDATE  servicecharges SET Status = 1 WHERE ServiceChargeId=$id") or die($mysqli->error);

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location: ServiceCharge.php");
}

if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = mysqli_query($mysqli,"SELECT * FROM servicecharges WHERE ServiceChargeId=$id") or die($mysqli->error);
	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_array($result);
		$sId = $row['ServiceId'];
		$age = $row['AgeGap'];
		$scharge = $row['ServiceCharge'];
		$ptype = $row['PetType'];
	}
	
}

if(isset($_POST['update'])){
	$id=$_POST['id'];
	$sId = $_POST['serviceId'];
	$age = $_POST['AgeGap'];
	$scharge = $_POST['ServiceCharge'];
	$ptype = $_POST['petType'];
	
	mysqli_query($mysqli,"UPDATE servicecharges SET ServiceId='$sId',AgeGap='$age',ServiceCharge='$scharge',PetType='$ptype' WHERE ServiceChargeId=$id") or die($mysqli->error);
	
	$_SESSION['message']="Record has been updated!";
	$_SESSION['msg_type']="warning";
	
	header('location:ServiceCharge.php');
	
}
?>