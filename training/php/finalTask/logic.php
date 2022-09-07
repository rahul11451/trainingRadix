<?php
require_once 'query.php';
require_once '../finalTask/PHPMailer_old/myphpmailer.php';

$dbConn = new Query();
// when get method
if (isset($_GET['nId']) && $_GET['nId'] != '') {
    $nId = $_GET['nId'];
    $select = $dbConn->select('information', '*', array('nId' => array($nId, '=')));
    if (empty($select)) {
        header('Location: index.php');
    } else {
        $userName = $select[0]['sName'];
        $email = $select[0]['sEmail'];
        $desc = $select[0]['sDescription'];
    }
}

// Insertion
if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];
    if (empty($userName)) {
        $erName = 'Name is required';
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $erName = 'Name must a string';
    }
    if (empty($email)) {
        $erEmail = 'Email is required';
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erEmail = "Email is Invalid";
    }
    if (empty($desc)) {
        $erDesc = 'Description is required';
    }
    if ($erName == '' && $erEmail == '' && $erDesc == '') {
        $inData = array(
            'sName' => $userName,
            'sEmail' => $email,
            'sDescription' => $desc
        );
        $insert = $dbConn->insert('information', $inData);
        if ($insert != '') {
            $insert = 1;
            // header('Location: index.php?');
        } else {
            $insert = 01;
        }
    }
}

// Listing
$select = $dbConn->select('information');
$srNo = 1;
if (!empty($select)) {
    foreach ($select as $key => $value) {
        $table .= "<tr>
                <td>" . $srNo++ . "</td>
                <td>" . $select[$key]['sName'] . "</td>
                <td>" . $select[$key]['sEmail'] . "</td>
                <td> <div class='description'>" . $select[$key]['sDescription'] . "</div></td>
                <td><div class='dropdown'>
                <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                  Action
                </button>
                <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton1'>
                  <li><p class='dropdown-item edit' id='" . $select[$key]['nId'] . "'><i class='fa-solid fa-pen-to-square'></i>Edit</p></li>
                  <li><p class='dropdown-item delete' id='" . $select[$key]['nId'] . "'><i class='fa-solid fa-trash-can'></i>Delete</p></li>
                  <li><form action='dom.php' method='post'>
                  <button name='pdf' class='dropdown-item'><i class='fa-solid fa-file-pdf'></i>PDF</button>
                  <input type='hidden' name='id' value='" . $select[$key]['nId'] . "'>
              </form></li>
              <li><p class='dropdown-item email' id='" . $select[$key]['nId'] . "'><i class='fa-solid fa-envelope'></i>Email</p></li>
                </ul>
              </div><div class='d-flex justify-center'></div></td>
            </tr>";
    }
} else {
    $table = 'No result Found';
}

// Edit
if (isset($_POST['edit'])) {
    $nId = $_GET['nId'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];
    if (empty($userName)) {
        $erName = 'Name is required';
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $erName = 'Name must a string';
    }
    if (empty($email)) {
        $erEmail = 'Email is required';
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erEmail = "Email is Invalid";
    }
    if (empty($desc)) {
        $erDesc = 'Description is required';
    }
    if ($erName == '' && $erEmail == '' && $erDesc == '') {
        $updateData = array(
            'sName' => $userName,
            'sEmail' => $email,
            'sDescription' => $desc
        );
        $update = $dbConn->update('information', $updateData, array('nId' => array($nId, '=')));
        if ($update != '') {
            $insert = 1;
            header('Location: index.php');
        } else {
            $insert = 01;
        }
    }
}

// delete
if (isset($_POST['action']) && $_POST['action'] == 'delete') {
    $nId = $_POST['nId'];

    $delete = $dbConn->delete('information', array('nId' => array($nId, '=')));

    if ($delete != '') {
        $del = 1;
    } else {
        $del = 0;
    }
    echo $del;
    exit;
}

// mail
if (isset($_POST['action']) && $_POST['action'] == 'emailSend') {
    $mailObj = new myphpmailer();
    $nId = $_POST['nId'];

    $select = $dbConn->select('information', '*', array('nId' => array($nId, '=')));
    if (empty($select)) {
        header('Location: index.php');
    } else {
        $userName = $select[0]['sName'];
        $email = $select[0]['sEmail'];
        $desc = $select[0]['sDescription'];
        $emailContent = $desc;

        $to = 'nensi.darji@radixweb.com';
        $from = 'nensi.darji@radixweb.com';
        $subject = "Email Verification";
        $content = $emailContent;
        $mailData = $mailObj->sendEmail_phpmailer($to, $from, $subject, $content);
    }
    echo $mailData;
    exit;
}
