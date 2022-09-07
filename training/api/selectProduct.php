<?php

header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
require_once 'query.php';

$db = new Query();

if(isset($_GET['nId'])) {
    $nId = $_GET['nId'];

    if(empty($nId)){
        $result = $db -> select('products');
    } else {
        $result = $db -> select('products', '*', array('nId' => array($nId, '=')));    
    }
} else {

    $result = $db -> select('products');
}

$finalAns = array();
while($datas = mysqli_fetch_assoc($result)) {
    $array = array(
        "nId" => $datas['nId'],
        "sName" => $datas['sName'],
        "nPrice" => $datas['nPrice'],
        "nWeight" => $datas['nWeight'],
        "sImg" => $datas['sImg'],
        "dCreatedDate" => $datas['dCreatedDate'],
        "dModifiedDate" => $datas['dModifiedDate']
    );

    array_push($finalAns, $array);
}
echo json_encode($finalAns);
// echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($result['sName']);echo '</pre>'; die();
// foreach($result as $key=>$value) {
//     echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($result['sName']);echo '</pre>';
// }