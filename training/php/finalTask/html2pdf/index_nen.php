<?php
// require('fpdf/fpdf.php');
require('html2pdf/HTML2PDF.php');

// $pdf = new FPDF();
// $pdf->AddPage();
// $row=file('toys.txt');
// $pdf->SetFont('Arial','B',12);	
// // foreach($row as $rowValue) {
// // 	$data=explode(';',$rowValue);
	
// // }
// $pdf->Write(5, '<h1>Hello World!</h1>');
// $pdf->Output();
// try
// {
    $html2pdf = new HTML2PDF('P','A4', 'fr', false, 'ISO-8859-15');
    // $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML('<h5>Hello world!</h5>', false);
    $html2pdf->Output('pdf_demo.pdf'); 
// }
// catch(HTML2PDF_exception $e) { echo $e; }
?>