
<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Search Product Stock</title>
	
	<style>
		body
		{
			background:url(images/images8.jpg);
			background-size:100% 200%;
			background-repeat:no-repeat;
				   
		}
	</style>
	
	<link rel = "stylesheet" type="text/css" href = "styles/productstockFilter1XX.css">
	
	<body>
	
		
		
		<div id ="nav">
			
			<form action="" method="POST">
			
				<center><h3><font color="white">Search product items</center><font/></h3>

				<lable>ProductType</lable>
				<input type="text" name="producttype" id ="ptypetype" placeholder = "Enter ProductType"/><br>
				
				<input type="submit" name="search" value="Submit">
				
				<!--<button onclick="myFunction()">Print</button>

<script>
function myFunction() {
  window.print();
}
</script>-->

				
			</form>

		</div>	
				<table>
					<tr>
					<th>ProductId</th>
					<th>ProductType</th>
					<th>ProductName</th>
					<th>AvailableQTY</th>
					<th>ReOrderLimit</th>
					<th>UnitPrice &#8360;  </th>
					<th>ExpiredQTY</th>
					<th>Status</th>
					<th>Action1</th>
					<th>Action</th>
					
				</tr><br>
				
				<?php
					require_once('config.php');
					if(isset($_POST['search'])){
						//require_once('config.php');
						$producttype = $_POST['producttype'];
						$sql = "SELECT * from productstock where ProductType='$producttype' ";
						$sql_run = mysqli_query($conn,$sql);
						
						
	
						 while($row = mysqli_fetch_array($sql_run))
						 {
							
						
							echo "<tr>";

							echo "<td>" . $row['ProductId'] . "</td>";

							echo "<td>" . $row['ProductType'] . "</td>";

							echo "<td>" . $row['ProductName'] . "</td>";

							echo "<td>" . $row['AvailableQTY'] . "</td>";
				
							echo "<td>" . $row['ReOrderLimit'] . "</td>";
				
							echo "<td>" . $row['UnitPrice'] . "</td>";
				
							echo "<td>" . $row['ExpiredQTY'] . "</td>";
				
							echo "<td>" . $row['Status'] . "</td>";
				
							echo "<td><input type=\"button\" value=\"Update\" name=\"update\" onclick=\"location.href = 'UpdateProductStock.php?id=" . $row['ProductId'] . "';\"></td>";
				
							echo "<td><input type=\"button\" value=\"Delete\" name=\"delete\" onclick=\"location.href = 'Delete.php?id=" . $row['ProductId'] . "';\"></td>";

							echo "</tr>";	 
							
					
							
						 
						}
						
				
				echo "</table>";
					} else {
						echo "0 results";
						
					}
					$conn->close();
				?>
				</table>
				
				
			</br>
			
			
<!--if(isset($_POST["create_pdf"])){
	//require_once("tcpdf_min/tcpdf.php");
	//$obj_pdf = new TCPDF('P', PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
	//$obj_pdf->setCreator(PDF_CREATOR);
	//$obj_pdf->setTitle("Export HTML Table data to PDF using TCPDF in PHP");
	//$obj_pdf->SetHeaderData('','',PDF_HEADER_TITLE,PDF_HEADER_STRING);
	//$obj_pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
	//$obj_pdf->SetHeaderFont(Array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));
	//$obj_pdf->SetDefaultMonospacedFont('helvetica');
	//$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	//$obj_pdf->SetMargins(PDF_MARGIN_LEFT,'5',PDF_MARGIN_RIGHT);
	//$obj_pdf->SetPrintHeader(false);
	//$obj_pdf->SetPrintFooter(false); //or true
	//$obj_pdf->SetAutoPageBreak(TRUE,10);
	//$obj_pdf->SetFont('helvetica','',12);
	
	//$content = '';
	
	//$content.= '
		//<h3 align="center">Animal Care -Product item details</h3>
		//<table border="1" cellspacing="0" cellpadding="5">
		//<tr>
			//<th width="5%">ProductId</th>
			//<th width="30%">ProductType</th>
			//<th width="10%">ProductName</th>
			//<th width="10%">AvailableQTY</th>
			//<th width="10%">ReOrderLimit</th>
			//<th width="10%">UnitPrice</th>
			//<th width="10%">ExpiredQTY</th>
		//</tr>
		//';
		
		//$content .= mysqli_fetch_array($sql_run);
	
	//$content.= '</table>';
	
	//$obj_pdf->writeHTML($content);
	
	//$pbj_pdf->Output("sample.pdf","I")
	

//}	-->
	

			
	</body>
	
</html>

		