<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require_once 'query.php';

$db = new Query();

// insert
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datas = json_decode(file_get_contents("php://input"));

    $sName = $datas->sName;
    $nPrice = $datas->nPrice;
    $nWeight = $datas->nWeight;
    $sImg = addslashes(file_get_contents($datas->sImg));

    $result = $db->insert('products', array('sName' => "'$sName'", 'nPrice' => $nPrice, 'nWeight' => $nWeight, 'sImg' => "'$sImg'"));
    echo $result;
}

// select

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['nId'])) {
        $nId = $_GET['nId'];

        if (empty($nId)) {
            $result = $db->select('products');
        } else {
            $result = $db->select('products', '*', array('nId' => array($nId, '=')));
        }
    } else {

        $result = $db->select('products');
    }

    $finalAns = array();
    while ($datas = mysqli_fetch_assoc($result)) {
        $array = array(
            "nId" => $datas['nId'],
            "sName" => $datas['sName'],
            "nPrice" => $datas['nPrice'],
            "nWeight" => $datas['nWeight'],
            "sImg" => "<img src='data:image/jpg;charset=utf8;base64,".base64_encode($datas['sImg']) ."' />",
            "dCreatedDate" => $datas['dCreatedDate'],
            "dModifiedDate" => $datas['dModifiedDate']
        );

        array_push($finalAns, $array);
    }
    echo json_encode($finalAns);
}

// UPDATE
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $datas = json_decode(file_get_contents("php://input"));

    $nId = $datas->nId;
    $sName = $datas->sName;
    $nPrice = $datas->nPrice;
    $nWeight = $datas->nWeight;
    $sImg = $datas->sImg;

    // update
    $result = $db->update('products', array('sName' => "'$sName'", 'nPrice' => $nPrice, 'sImg' => '"' . $sImg . '"', 'nWeight' => $nWeight), array('nId' => array($nId, '=')));
    echo $result;
}

// DELETE
if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
$datas = json_decode(file_get_contents("php://input"));

$nId = $datas->nId;

// insert
$result = $db->delete('products', array('nId' => array($nId, '=')));
echo $result;
}