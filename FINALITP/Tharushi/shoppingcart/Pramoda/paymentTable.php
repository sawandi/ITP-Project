<?php require_once('connection.php');?>
<?php

$payment_list='';
$query="SELECT * FROM payments WHERE status=0 ORDER BY AccountNo";
$paym=mysqli_query($con,$query);

	if($paym){
		while($pay=mysqli_fetch_assoc($paym)){
			$payment_list.="<tr>";
			$payment_list.="<td>{$pay['Amount']}</td>";
			$payment_list.="<td>{$pay['AccountNo']}</td>";
			$payment_list.="<td>{$pay['AccountName']}</td>";
			$payment_list.="<td>{$pay['CustomerName']}</td>";
			$payment_list.="<td>{$pay['Date']}</td>";
			$payment_list.="<td><a href=\"editPayment.php?PId={$pay['PaymentId']}\">Edit</a></td>";
			$payment_list.="<td><a href=\"delete2.php?PId={$pay['PaymentId']}\"onclick=\"return confirm('Are you sure want to delete this ?');\">Delete</a></td>";
			$payment_list.="<td><a href=\"ViewPayment.php?PId={$pay['PaymentId']}\">Search</a></td>";
			$payment_list.="</tr>";
		}
	}else{
		echo "Database query failed.";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="robots" charset="UTF-8" content="noindex,nofollow">
	<title>payments</title>
	<!--<style>
			body{
				background:url(images/100.jpg);
				background-size:100% 135%;
				background-repeat:no-repeat;
			}
	</style>-->
	<link rel="stylesheet" href="styles/main.css">
</head>
<body>
	<header>
		<!--<div class="webname">Pet Care Animal clnic</div>-->
	</header>

	<main>
		<h1> Payments<span><a href="PaymentDetails.php"> + Add Payment</a></span></h1>
		<h3><span><a href="Cashpayment.php"> + Add CashPayment</a></span></h3>

		<table class="masterlist">
			<tr>
				<th>Amount</th>
				<th>AccountNo</th>
				<th>AccountName</th>
				<th>CustomerName</th>
				<th>Date</th>
				<th>Edit</th>
				<th>Delete</th>
				<th>Search</th>
			</tr>

			<?php echo $payment_list;?>
		</table>
	</main>

</body>
</html>
	