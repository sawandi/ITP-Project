<?php
session_start();
    $Email="";
	$staus ="";

	$con = mysqli_connect("localhost","root","", "animalcare");
	$id=0;
	$edit_state = false;
	
	if(isset($_POST['save'])){
		
		$Email = $_POST['email'];
		$staus= $_POST['staus'];
	 
		$sql = "insert into  petadvertisement (email,staus) values ('$Email','$staus')";
        mysqli_query($con,$sql);
		header('location: Acceptadd.php');
		$_SESSION['msg'] = " Details Saved !!!";
	}
	  if(isset($_POST['update'])){
		  $Email = $_POST['email'];
		  $staus= $_POST['staus'];
          $id=$_POST['id'];
		  
		  mysqli_query($con,"UPDATE petadvertisement SET staus='1' WHERE id=$id");
		  $_SESSION['msg']= "Record updated !!!";
		  header('location:Acceptadd.php');
	  }
	
	
		$query =  mysqli_query($con,"select * from petadvertisement");
	   
	
	
	
?>