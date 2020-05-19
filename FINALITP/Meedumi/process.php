<?php 

session_start();

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
$mysqli = new mysqli('localhost:3306','root','','animalcare') or die(mysqli_error($mysqli));

$id=0;
$update= false;
$stype = '';
$descript = '';
$stime = '';
$etime = '';

if(isset($_POST['submit'])){
	$stype=$_POST['serviceType'];
	$descript = $_POST['description'];
	$stTime = $_POST['startTime'];
	$enTime = $_POST['endTime'];
	
	
	$mysqli->query("INSERT INTO services(serviceType,description,startTime,endTime) VALUES('$stype','$descript','$stTime','$enTime')") or
		die($mysqli->error);
		
		$_SESSION['message']="Record has been saved!";
		$_SESSION['msg_type']="success";
		
		header("location: index.php");
	
}
if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query( "UPDATE  services SET status = 1 WHERE serviceId =$id") or die($mysqli->error);

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location: index.php");
}

if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	//$selected_val=$_POST['serviceType'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM services WHERE serviceId=$id") or die($mysqli->error);
	if(mysqli_num_rows($result) == 1){
		$row = $result->fetch_array();
		$stype = $row['serviceType'];
		$descript = $row['description'];
		$stime = $row['startTime'];
		$etime = $row['endTime'];
		
	}
	
}

if(isset($_POST['update'])){
	$id=$_POST['id'];
	$stype=$_POST['serviceType'];
	$descript=$_POST['description'];
	$stime=$_POST['startTime'];
	$etime=$_POST['endTime'];
	
	$mysqli->query("UPDATE services SET serviceType='$stype',description='$descript', startTime='$stime',endTime='$etime' WHERE serviceId=$id") or die($mysqli->error);
	
	$_SESSION['message']="Record has been updated!";
	$_SESSION['msg_type']="warning";
	
	header('location:index.php');
	
}
?>