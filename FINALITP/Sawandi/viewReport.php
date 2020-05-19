<?php

	$report = $_POST['report'];
	
	$filename = "newpdffile";

	// include autoloader
	require_once 'dompdf/autoload.inc.php';

	// reference the Dompdf namespace
	use Dompdf\Dompdf;

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();

	$dompdf->loadHtml($report);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'landscape');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream($filename,array("Attachment"=>0));

?>