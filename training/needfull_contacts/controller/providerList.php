<?php
session_start();

include '../../model/Query.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: '.SITE_URL.'/view/login.php');
}

$table = new Query();

$tableData = $table->join('SELECT DISTINCTROW service_provider.*  FROM business_details', 'service_provider', array('business_details.nProviderId' => array('service_provider.nId', '=')));
$serData = $table->join('SELECT service_details.*, business_details.nProviderId FROM business_details', 'service_details', array('business_details.nServiceDetailId' => array('service_details.nId', '=')));
$services = array();
$serv = array();
$servs = array();
foreach ($tableData as $key => $value) {
    foreach ($serData as $keys => $values) {
        if ($tableData[$key]['nId'] == $serData[$keys]['nProviderId']) {

            $services[$tableData[$key]['nId']][] = $serData[$keys]['sServiceName'];
        }
    }
}
foreach ($services as $ke => $val) {
    $serv = array_unique($services[$ke]);
    $servs[$ke] = $serv;
}
$id = 1;
foreach ($tableData as $key => $value) {

        $tableRow .= '<tr><td>' . $id++ . '</td>
                    <td>
                        <img src="' . NENSI . '/' . $tableData[$key]['nId'] . '/smallPhoto/' . $tableData[$key]['sSmPic'] . '" alt="photo" class="" width="200" height="150">
                    </td>
                    <td>
                        <img src="' . NENSI . '/' . $tableData[$key]['nId'] . '/largePhoto/' . $tableData[$key]['sLgPic'] . '" alt="photo" class="" width="200" height="150">
                    </td>
                    <td>' . $tableData[$key]['sName'] . '</td>
                    <td>
                        <ul>
                            <li>' . $tableData[$key]['sEmail'] . '</li>
                            <li>' . $tableData[$key]['nPhoneNumber'] . '</li>
                        </ul>
                    </td>                                    
                    <td>
                        <ul>
                            <li>' . $tableData[$key]['sAddress'] . '</li>
                            <li>' . $tableData[$key]['sCity'] . '</li>
                            <li>' . $tableData[$key]['nPincode'] . '</li>
                        </ul>
                    </td>
                    <td>
                        <ul>';

?>
 <?php

            foreach ($servs as $nId => $serId) {
                if ($nId == $tableData[$key]['nId']) {
                    foreach ($serId as $value) {
                        $tableRow .= '<li>' . $value . '</li>';
                    }
                }
            }
    
    ?>
<?php

            $tableRow .= '</ul></td>
                            <td><div class="flex-fill mb-0 ms-4 form-check form-switch"><input class="form-check-input h4 border-dark border-2 stat" name="switch" type="checkbox" id="' . $tableData[$key]['nId'] . '"'
    
    ?>
<?php
            if ($tableData[$key]['bStatus'] == 1) {
                $tableRow .= 'checked';
            }
    
    ?>
<?php
            $tableRow .= '></div></td>
                    <td><a href="addProvider.php?id=' . $tableData[$key]['nId'] . '" class="edit me-3"><span class="fa-regular fa-pen-to-square h4 text-dark"></span></a>

                    <input type="submit" class="btn btn-outline-primary deleteValue" id="' . $tableData[$key]['nId'] . '" name="delete" hidden>

                    <a href="" class="delete"><span class="fa-regular fa-trash-can h4 text-dark"></span></a></td></tr>';
        }

    // delete data
    if ($_POST['action'] == 'delete') {
        $deleteId = $_POST['data'];

        $result = $table->delete('business_details', array('nProviderId' => array($deleteId, '=')));

        $result = $table->delete('service_provider', array('nId' => array($deleteId, '=')));

        echo $result;
        exit;
    }
