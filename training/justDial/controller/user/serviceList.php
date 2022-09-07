<?php
session_start();
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

if (isset($_GET['serviceId'])) {

    $serviceId = $_GET['serviceId'];

    $query = $listing->join('SELECT service_provider.* from business_details', 'service_provider', array('business_details.nProviderId' => array('service_provider.nId', '=')), array('business_details.nServiceDetailId' => array($serviceId, '=', 'AND'), 'bStatus' => array('1', '=')));
    
    $pageData = $listing->pagination($query, $results_per_page, $page);

    $numbers = $pageData[0];
    
    $tableData = $listing->join('SELECT service_provider.* from business_details', 'service_provider', array('business_details.nProviderId' => array('service_provider.nId', '=')), array('business_details.nServiceDetailId' => array($serviceId, '=', 'AND'), 'bStatus' => array('1', '=')), 'LIMIT ' . $pageData[1] . ',' . $results_per_page);
    
    if(empty($tableData)) {
        $result = '<h1 class="text-center text-danger"> Oops, No Data Available </h1>';
    } else {

        $result = $listing->frontServiceList($tableData);
    }
    
    
    
} else {
    //find the total number of results stored in the database  
    $query = $listing->select('service_provider', '*', array('bStatus' => array('1', '=')));
    
    $pageData = $listing->pagination($query, $results_per_page, $page);

    $numbers = $pageData[0];

    $tableData = $listing->select('service_provider', '*', array('bStatus' => array('1', '=')), 'LIMIT ' . $pageData[1] . ',' . $results_per_page);

    $result = $listing->frontServiceList($tableData);
}


// search using service value
if ($_POST['action'] == 'serviceValue') {
    $searchValue = $_POST['values'];

    if (!empty($searchValue)) {

        $query = $listing->join('SELECT service_provider.* from business_details', 'service_provider', array('business_details.nProviderId' => array('service_provider.nId', '=')), array('business_details.nServiceDetailId' => array($searchValue, '=', 'AND'), 'bStatus' => array('1', '=')));

        $pageData = $listing->pagination($query, $results_per_page, $page);

        $tableData = $listing->join('SELECT service_provider.* from business_details', 'service_provider', array('business_details.nProviderId' => array('service_provider.nId', '=')), array('business_details.nServiceDetailId' => array($searchValue, '=', 'AND'), 'bStatus' => array('1', '=')), 'LIMIT ' . $pageData[1] . ',' . $results_per_page);


        $result = $listing->frontServiceList($tableData);
    } else {
        $query = $listing->select('service_provider', '*', array('bStatus' => array('1', '=')));

        $pageData = $listing->pagination($query, $results_per_page, $page);

        $numbers = $pageData[0];

        $tableData = $listing->select('service_provider', '*', array('bStatus' => array('1', '=')), 'LIMIT ' . $pageData[1] . ',' . $results_per_page);

        $result = $listing->frontServiceList($tableData);
    }

    if (empty($result)) {
        $result = '<script>
        swal({
            title: "Data is not available!",
            text: "' . $result . '",
            icon: "warning",
            buttons: {
                confirm: {
                    className: "bg-danger"
                }
            }
        });
    </script> 
    <h1 class="text-danger text-center"> Sorry! No Data Available</h1>';
    }


    echo $result . '$' . $pageData[0];
    exit;
}

// search using address and city
if ($_POST['action'] == 'search') {
    $searchData = $_POST['search'];

    $query = $listing->select('service_provider', '*', array('bStatus' => array('1', '=', 'AND ( '), 'sAddress' => array('%' . $searchData . '%', 'LIKE', 'OR'), 'sCity' => array('%' . $searchData . '%', 'LIKE', ' )')));

    $pageData = $listing->pagination($query, $results_per_page, $page);

    $tableData = $listing->select('service_provider', '*', array('bStatus' => array('1', '=', 'AND ( '), 'sAddress' => array('%' . $searchData . '%', 'LIKE', 'OR'), 'sCity' => array('%' . $searchData . '%', 'LIKE', ' )')), 'LIMIT ' . $pageData[1] . ',' . $results_per_page);

    $result = $listing->frontServiceList($tableData);

    if (empty($result)) {
        $result = '<script>
        swal({
            title: "Data is not available!",
            text: "' . $result . '",
            icon: "warning",
            buttons: {
                confirm: {
                    className: "bg-danger"
                }
            }
        });
    </script> 
    <h1 class="text-danger text-center"> Sorry! No Data Available</h1>';
    }

    echo $result . '$' . $pageData[0];
    exit;
}

if($_POST['action'] == 'contactValue') {
    $valID = $_POST['idVal'];
    if(!isset($_SESSION['user_id'])) {

        $flag = 1;

    } else {
        $flag = 0;
    }

    echo $flag;
    exit;
} 
