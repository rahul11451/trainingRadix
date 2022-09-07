<?php
include '../../model/ServiceList.php';

$listing = new ServiceList();

// dropdown
$dropdown = $listing->select('service_details', 'nId, sServiceName');

foreach ($dropdown as $key => $value) {
    $drop .= '<option value="' . $dropdown[$key]['nId'] . '" id= "' . $dropdown[$key]['nId'] . '">' . $dropdown[$key]['sServiceName'] . '</option>';
}

$results_per_page = 3;

//determine which page number visitor is currently on  
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

//find the total number of results stored in the database  
$query = $listing->select('service_provider', '*', array('bStatus' => array('1', '=')));

$pageData = $listing->pagination($query, $results_per_page, $page);

$numbers = $pageData[0];

$tableData = $listing->select('service_provider', '*', array('bStatus' => array('1', '=')), 'LIMIT ' . $pageData[1] . ',' . $results_per_page);

$result = $listing->frontServiceList($tableData);

if ($_POST['action'] == 'serviceValue') {
    $searchValue = $_POST['values'];

    if (!empty($searchValue)) {
        $query = $listing->join('SELECT service_provider.* from business_details', 'service_provider', array('business_details.nProviderId' => array('service_provider.nId', '=')), array('business_details.nServiceDetailId' => array($searchValue, '=')));

        $pageData = $listing->pagination($query, $results_per_page, $page);

        $tableData = $listing->join('SELECT service_provider.* from business_details', 'service_provider', array('business_details.nProviderId' => array('service_provider.nId', '=')), array('business_details.nServiceDetailId' => array($searchValue, '=')), 'LIMIT ' . $pageData[1] . ',' . $results_per_page);


        $result = $listing->frontServiceList($tableData);
    } else {
        $query = $listing->select('service_provider', '*', array('bStatus' => array('1', '=')));

        $pageData = $listing->pagination($query, $results_per_page, $page);

        $numbers = $pageData[0];

        $tableData = $listing->select('service_provider', '*', array('bStatus' => array('1', '=')), 'LIMIT ' . $pageData[1] . ',' . $results_per_page);

        $result = $listing->frontServiceList($tableData);
    }


    echo $result . '$' . $pageData[0];
    exit;
}

if ($_POST['action'] == 'search') {
    $searchData = $_POST['search'];

    $query = $listing->select('service_provider', '*', array('bStatus' => array('1', '=', 'AND ( '), 'sAddress' => array('%' . $searchData . '%', 'LIKE', 'OR'), 'sCity' => array('%' . $searchData . '%', 'LIKE', ' )')));

    $pageData = $listing->pagination($query, $results_per_page, $page);

    $tableData = $listing->select('service_provider', '*', array('bStatus' => array('1', '=', 'AND ( '), 'sAddress' => array('%' . $searchData . '%', 'LIKE', 'OR'), 'sCity' => array('%' . $searchData . '%', 'LIKE', ' )')), 'LIMIT ' . $pageData[1] . ',' . $results_per_page);

    $result = $listing->frontServiceList($tableData);

    echo $result . '$' . $pageData[0];
    exit;
}
