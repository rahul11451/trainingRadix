<?php
session_start();
include '../../model/Query.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: '.SITE_URL.'/view/login.php');
}

$table = new Query();

$tableData = $table -> select('service_details');

$id = 1;
foreach($tableData as $key => $value) {
    $tableRow .= '<tr>
    <td>'.$id++.'</td>
    <td>'.$tableData[$key]['sServiceName'].'</td>
    <td>'.$tableData[$key]['sDescription'].'</td>
    <td>
        <a href="addServices.php?id=' . $tableData[$key]['nId'] . '" class="edit me-3"><span class="fa-regular fa-pen-to-square h4 text-dark"></span></a>
        
        <input type="submit" class="btn btn-outline-primary deleteValue" id="' . $tableData[$key]['nId'] . '" name="delete" hidden>

        <a href="" class="delete"><span class="fa-regular fa-trash-can h4 text-dark"></span></a>
    </td>
</tr>';
}

// delete data
if ($_POST['action'] == 'delete') {
    $deleteId = $_POST['data'];

    $result = $table -> delete('service_details', array('nId' => array($deleteId, '=')));

    echo $result;
    exit;
}
