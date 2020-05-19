<?php 
				
	/*function fetch_data()
	{
		if(isset($_POST['view']))
		{
			$output = '';
			require_once('connection.php');
							
			$petId = $_POST['petId'];
							
							
			$sql = "SELECT sv.LastVaccinateDate, v.VaccineName from systamaticvaccinatedetails sv, vaccines v where sv.PetId = '$petId' and sv.LastVaccineId = v.VaccineId";
			$result = mysqli_query($con,$sql);
							
			if(mysqli_num_rows($result)>0){
								
				while($row = mysqli_fetch_assoc($result))
				{
					$output .= '
						<tr>
							<td>'.$row["VaccineId"].'</td>
							<td>'.$row["VaccineName"].'</td>
						</tr>
					';
				}
				return $output;
								
						
			}
			else
			{
				echo "0 result";
			}
							
			mysqli_close($con);
		}
	}*/
	
	/*if(isset($_POST["create-pdf"]))
	{
		require_once("tcpdf/tcpdf_min/tcpdf.php");
		$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$obj_pdf->SetCreater(PDF_CREATOR);
		$obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");
		$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
		$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MaIN));
		$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$obj_pdf->SetDefaultMonospacedFont('helvetica');
		$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
		$obj_pdf->setPrintHeader(false);
		$obj_pdf->setPrintFooter(false); //or true
		$obj_pdf->SetAutoPageBreak(TRUE, 10);
		$obj_pdf->SetFont('helvetica', '', 12);
		
		$content = '';
		
		$content .= '
			<h3 align = "center">Export HTML Table data to PDF using TCPDF in PHP</h3>
			<table border="1" cellspacing="0" cellpadding="5">
				<tr>
					<th width = "45%">Vaccinate Date</th>
					<th width = "35%">Vaccine Name</th>
				</tr>
					
		';
		
		$content .= fetch_data();
		
		$content .= '</table>';
		
		$obj_pdf->writeHTML($content);
		
		$obj_pdf->Output("sample.pdf", "I");
		
	}*/

					
?>


<!DOCTYPE html>
<html>
<head>

	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
	
	<title>Vaccination History</title>
	
	<style>
		body
		{
			background:url(images/puppy.jpg);
			background-size:cover;
			background-repeat:repeat;
			
			 

			  <!--Center and scale the image nicely
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;-->
				   
		}
	</style>
	
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel = "stylesheet" type="text/css" href = "styles/petVaccinateHistory.css">
	
</head>

	<body>
	
		
	
		<div id = "side">
			
			<span><h4><a href = "../Home/MainHomePetOwner.php">Home<a><h4></span>
			<!--<span><h4><font color = "white"><a href = "searchVaccination.php">Search Vaccination Info</a></font><h4><span></br>-->
			
		
		</div>
	
		<div id = "nav">
		
			<h3>Vaccination History Of Your Pet</h3>
			
			<form action = "viewVaccinateHistory.php" method = "post">
			
				<input type = "text" name = "petId" id = "pid" placeholder = "Select Pet Id" required readonly><br><br>
				
				<input type = "submit" name = "view" id = "view" value = "View Details" required ><br><br>
			
			</form>
		
		</div>

		<div id = "direction">
		
			<!--</br>
			<h2><marquee direction = "right">*****YOU CAN SEE VACCINATION HISTORY OF YOUR PETS*****</marquee></h2>
			</br>-->
			
		</div>
		
		<div class = "col-md-9" id = "output">
			
		</div>
		
		<!--for pet details-->
		<script>
			
				$(document).ready(function(){
					
					$("#output").load("viewPets.php");
					
					//delete
					
					$(document).on("click",".search",function()
					{
						var search = $(this);
						var searchPetId =$(this).attr("data-id");
						$("#pid").val(searchPetId);
						
					
					});
				});
			
			
		</script>
		
		<!--for vaccination history of above pets-->
		<div id = "sidnav">
				
			<table border = "1">

				<tr>
				
					<th>Vaccinate Date</th>
					<th>Vaccine Name</th>
					
				</tr>
			
			
				<?php 
				
					//echo fetch_data();
					
						if(isset($_POST['view']))
						{
							require_once('connection.php');
							
							$petId = $_POST['petId'];
							
							
							$sql = "SELECT sv.LastVaccinateDate, v.VaccineName from systamaticvaccinatedetails sv, vaccines v where sv.PetId = '$petId' and sv.LastVaccineId = v.VaccineId";
							$result = mysqli_query($con,$sql);
							
							if(mysqli_num_rows($result)>0){
								
								while($row = mysqli_fetch_assoc($result))
								{
									echo "<tr><td>".$row["LastVaccinateDate"]."</td><td>".$row["VaccineName"]."</td></tr>";
									
								}
								
								echo "</table>";
						
							}
							else
							{
								echo "0 result";
							}
							
							mysqli_close($con);
						}
				?>

			</table>
			</br>
			
			<form method ="post">
				<input type = "submit" name = "create-pdf" class="btn btn-danger" value="Create PDF"/>
			</form>
			
		</div>
		
		

	</body>

</html>

<!--?php
	if(isset($_POST["create-pdf"]))
	{
		require_once("tcpdf/tcpdf_min/tcpdf.php");
		$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$obj_pdf->SetCreator(PDF_CREATOR);
		$obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");
		$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
		$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		/*$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$obj_pdf->SetDefaultMonospacedFont('helvetica');
		$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
		$obj_pdf->setPrintHeader(false);
		$obj_pdf->setPrintFooter(false); //or true*/
		$obj_pdf->SetAutoPageBreak(TRUE, 10);
		$obj_pdf->SetFont('helvetica', '', 12);
		
		$content = '';
		
		$content .= '
			<h3 align = "center">Export HTML Table data to PDF using TCPDF in PHP</h3>
			<table border="1" cellspacing="0" cellpadding="5">
				<tr>
					<th width = "45%">Vaccinate Date</th>
					<th width = "35%">Vaccine Name</th>
				</tr>
					
		';
		
		$content .= fetch_data();
		
		$content .= '</table>';
		
		$obj_pdf->writeHTML($content);
		
		$obj_pdf->Output("sample.pdf", "I");
		
	}



?>-->
