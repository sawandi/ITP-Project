<?php
session_start();
    $PetId="";
	$Date="";
	$Service="";
	$con = mysqli_connect("localhost","root","", "animalcare");
	$id=0;
	$edit_state = false;
	
	if(isset($_POST['save'])){
		
		$PetId = $_POST['petid'];
		$Date = $_POST['date'];
		$Service = $_POST['serviceType'];
		
		   
		$sql = "insert into  medicalreports (PetId,Date,ServiceType) values ('$PetId','$Date','$Service')";
        mysqli_query($con,$sql);
		header('location: updateMedicalRecordList.php');
		$_SESSION['msg'] = " Details Saved !!!";
	}
	  if(isset($_POST['update'])){
		  $PetId=$_POST['petid'];
		  $Date=$_POST['date'];
		  $Service=$_POST['serviceType'];
		  $id=$_POST['id'];
		  
		  mysqli_query($con,"UPDATE medicalreports SET PetId='$PetId',Date ='$Date',ServiceType='$Service' WHERE ReportId=$id");
		  $_SESSION['msg']= "Record updated !!!";
		  header('location:updateMedicalRecordList.php');
	  }
	
	if(isset($_GET['del'])){
	   $id= $_GET['del'];
	   mysqli_query($con,"DELETE FROM medicalreports WHERE ReportId=$id");
	   $_SESSION['msg']= "Record deleted !!!";
	   header('location:updateMedicalRecordList.php');
	}
		$query =  mysqli_query($con,"select * from medicalreports");
	   
	
	
	
?>