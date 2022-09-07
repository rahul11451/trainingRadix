<?php
require_once 'dompdf/autoload.inc.php';
require_once 'query.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dbConn = new Query();

if (isset($_POST['pdf'])) {
    $nId = $_POST['id'];
    $select = $dbConn->select('information', '*', array('nId' => array($nId, '=')));

    $html = $select[0]['sDescription'];

    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

    exit;
}
