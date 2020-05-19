<!DOCTYPE html>
<html>
<head>
	<title>Staff Details</title>
	
	<style>
		body
		{
			background:url(images/images8.jpg);
			background-size:100% 9000%;
			background-repeat:no-repeat;
				   
		}
	</style>
	

<link rel = "stylesheet" type="text/css" href = "styles/ProductStock.css">


</head>
<body>
		
		<div class="sidenav">

<button class="button1" style ="float:center"><a href="StaffRegSelect.php"><font size="5em">View Staff Details</font></a></button>


</div>

</body>

</html>


<?php
	//$response = array();		
	if(isset($_POST['signup'])){
	require_once('config.php');
	
	$stafId = $_POST['staffid'];
	
	/*echo $prodId;
	echo $avileqty;
	echo $reolimit;
	echo $utprice;
	echo $expdqty;*/
	
	$sql = "DELETE FROM `staffdetails` WHERE StaffId = '$stafId'";
	mysqli_query($conn,$sql);
	
//$response = array();
//if( isset($_GET['id'] ) ) {

    //$id=$_GET['id'];
    //$data=$_GET['data'];   // not tested for so dont use
    //$item=$_GET['item'];   // not tested for so dont use
    //$time=$_GET['time'];   // not tested for so dont use

    //$sql = "delete from myorder where id=$id";
   // $result = mysql_query($sql);

    // you shoud always be checking error status after this command.
    //if ( ! mysql_query ) {
       // $response['mysql_query'] = $sql;
       // $response['mysql_error'] = mysql_error();
        //echo json_encode($response);
       // exit;
   // }

    //$row_count = mysql_affected_rows();
   // $response['affectedRows'] = mysql_affected_rows();

   // if($row_count>0){
       // $response["success"] = 1;
        //$response["message"] = "Deleted Sucessfully.";
   // } else {
        //$response["success"] = 0;
      //  $response["message"] = "Failed To Delete";
   // }
  // echoing JSON response
  //echo json_encode($response);

 
	
	
	if(mysqli_query($conn,$sql)){
		echo '<span style="color:white;text-align:center;font-size:1.5em;font-weight:bold;">Data Delete successfully!!!..</span>';
	}else{
		echo "Error: ". $sql ."<br>" . mysqli_error($conn);
		
	}
	mysqli_close($conn);
	
	




	}
?>
	