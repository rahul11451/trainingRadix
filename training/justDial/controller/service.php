<?php
session_start();
include '../../model/Service.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: '.SITE_URL.'/view/login.php');
}

$id = $_GET['id'];

$name = $_POST['name'];
$description = $_POST['desc'];
$createdDate = date('Y-m-d');
$modifiedDate = date('Y-m-d');

$serviceObj = new Service();

function validate($name, $description)
{

    if (empty($name)) {
        $erName = 'Service Name is required';
    } else {
        $erName = '';
    }

    if (empty($description)) {
        $erDesc = 'Description is Required';
    } else {
        $erDesc = '';
    }

    return array($erName, $erDesc);
}

// editing form
if (isset($id)) {

    $editAr = $serviceObj->select('service_details', '*', array('nId' => array($id, '=')));
}


// adding data after click on save button
if (isset($_POST['saveService'])) {

    $error = validate($name, $description);

    $erName = $error[0];
    $erDesc = $error[1];

    if ($erName == '' && $erDesc == '') {
        $result = $serviceObj->serviceLogic($name, $description, $createdDate, $modifiedDate);
        
        $result = ' <script>
                        swal({
                            title: "Good job!",
                            text: "'.$result.'",
                            icon: "success",
                            buttons: {
                                confirm: {
                                    className: "bg-dark"
                                }
                            }
                        });
                    </script>';
    } else {
        $nameVal = $name;

        $descVal = $description;
    }
}

// adding data after click on save and back button
if (isset($_POST['save&back'])) {
    $error = validate($name, $description);

    $erName = $error[0];
    $erDesc = $error[1];

    if ($erName == '' && $erDesc == '') {
        if (isset($id)) {
            $result = $serviceObj->serviceEdit($name, $description, $id, $modifiedDate);
            header('Location: serviceList.php');
        } else {
            $result = $serviceObj->serviceLogic($name, $description, $createdDate, $modifiedDate);
            header('Location: index.php');
        }
    } else {
        $nameVal = $name;

        $descVal = $description;
    }
}
