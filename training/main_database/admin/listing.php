<?php
session_start();
include("../lib/ClassFile.php");

if (!isset($_SESSION['user_name'])) {
    header('Location: index.php');
}

$formDetails = new ClassFile();
$joinResult = $formDetails->join();

if ($_POST['action'] == 'id_value') {
    $value = $_POST['data'];
    $idResult = $formDetails->select('employees', '*', array('emp_id' => array($value, '=')));
    $pic = $idResult[0]['profile_pic'];
    $pic = '../images/' . $value . '/' . $pic;
    unlink($pic);
    rmdir('../images/' . $value);
    $formDetails->delete('employees', array('emp_id' => array($value, '=')));
    exit;
}


if ($_POST['action'] == 'edit') {
    $data = $_POST['data_edit'];
    $_SESSION['id'] = $data;
    exit;
}

if ($_POST['action'] == 'search') {
    $searchData = $_POST['search'];
    $searchResult = $formDetails->select('employees', '*');
    $id =1 ;
    $resultSearch = '<table class="table"><tr>
    <th>Sr. No</th>
    <th>Photo</th>
    <th>Details</th>
    <th>Address Details</th>
    <th>Register Date</th>
    <th>Status</th>
    <th>Action</th>
</tr>';
    foreach ($searchResult as $key => $array) {
        if (preg_match('/' . $searchData . '/i', $searchResult[$key]['name']) || preg_match('/' . $searchData . '/i', $searchResult[$key]['email'])) {
            $img_path = '../images/' . $searchResult[$key]['emp_id'] . '/' . $searchResult[$key]['profile_pic'];
            if($searchResult[$key]['gender'] == 'F'){
                $resultGender = 'Female';
            } else {
                $resultGender = 'Male';
            }
            $resultSearch .= '<tr>
                    <td>' . $id++ . '</td>
                    <td> <img src="' . $img_path . '" alt="img" width="200"></td>
                    <td>
                        <ul>
                            <li>Name : ' . $searchResult[$key]['name'] . '</li>
                            <li>Email: ' . $searchResult[$key]['email'] . '</li>
                            <li>Gender: ' . $resultGender . '</li>
                            <li>Birth date: ' . $searchResult[$key]['birth_date'] . '</li>
                            <li>Phone Number: ' . $searchResult[$key]['phone_number'] . '</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-unstyled">
                            <li>' . $searchResult[$key]['street_address'] . '</li>
                            <li>' ?>
            <?php
            foreach ($joinResult as $keys => $arrays) {
                if ($joinResult[$keys]['city_id'] == $searchResult[$key]['city']) {
                    $resultSearch .= $joinResult[$keys]['city_name'];
                }
            }
            ?>
            <?php
            $resultSearch .= ' , ' . $searchResult[$key]['postcode'] . '</li>' ?>
            <?php
            foreach ($joinResult as $keys => $arrays) {
                if ($joinResult[$keys]['city_id'] == $searchResult[$key]['city']) {
                    $resultSearch .= '<li>' . $joinResult[$keys]['state_name'] . '</li>
                                        <li>' . $joinResult[$keys]['country_name'] . '</li>';
                }
            }
            ?>
            <?php
            $resultSearch .= '
                        </ul>
                    </td>
                    <td>' . $searchResult[$key]['register_date'] . '</td>
                    <td>
                        <div class="flex-fill mb-0 form-check form-switch">
                        <input class="form-check-input h3" name="switch" type="checkbox" id="flexSwitchCheckChecked" ' ?>
            <?php
            if ($searchResult[$key]['status'] == 1) {
                $resultSearch .= 'checked';
            }
            ?>
    <?php
            $resultSearch .= '>
                            </div>
                    </td>
                    <td>
                        <a href="editForm.php" class="btn btn-primary me-2 px-4 edit">Edit</a>
                        <input type="submit" class="btn btn-outline-primary deleteValue" id="' . $searchResult[$key]['emp_id'] . '" name="delete" hidden>
                        <a href="" class="btn btn-danger me-2 px-4 delete">Delete
                        </a>
                    </td>
                </tr>';
        }
    }
    $resultSearch .= '</table>';
    echo $resultSearch;
    exit;
}

include("headerAdmin.php");
$details = $formDetails->select('employees');



$id = 1;
foreach ($details as $key => $array) {

    $img_path = SITE_URL . '/main_database/images/' . $details[$key]['emp_id'] . '/' . $details[$key]['profile_pic'];
    if($details[$key]['gender'] == 'F'){
        $resultGender = 'Female';
    } else {
        $resultGender = 'Male';
    }
    $result .= '<tr>
                    <td>' . $id++ . '</td>
                    <td> <img src="' . $img_path . '" alt="img" width="200"></td>
                    <td>
                        <ul>
                            <li>Name : ' . $details[$key]['name'] . '</li>
                            <li>Email: ' . $details[$key]['email'] . '</li>
                            <li>Gender: ' . $resultGender . '</li>
                            <li>Birth date: ' . $details[$key]['birth_date'] . '</li>
                            <li>Phone Number: ' . $details[$key]['phone_number'] . '</li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-unstyled">
                            <li>' . $details[$key]['street_address'] . '</li>
                            <li>' ?>
    <?php
    foreach ($joinResult as $keys => $arrays) {
        if ($joinResult[$keys]['city_id'] == $details[$key]['city']) {
            $result .= $joinResult[$keys]['city_name'];
        }
    }
    ?>
    <?php
    $result .= ' , ' . $details[$key]['postcode'] . '</li>' ?>
    <?php
    foreach ($joinResult as $keys => $arrays) {
        if ($joinResult[$keys]['city_id'] == $details[$key]['city']) {
            $result .= '<li>' . $joinResult[$keys]['state_name'] . '</li>
                                        <li>' . $joinResult[$keys]['country_name'] . '</li>';
        }
    }
    ?>
    <?php
    $result .= '
                        </ul>
                    </td>
                    <td>' . $details[$key]['register_date'] . '</td>
                    <td>
                        <div class="flex-fill mb-0 form-check form-switch">
                        <input class="form-check-input h3" name="switch" type="checkbox" id="flexSwitchCheckChecked" ' ?>
    <?php
    if ($details[$key]['status'] == 1) {
        $result .= 'checked';
    }
    ?>
<?php
    $result .= '>
                            </div>
                    </td>
                    <td>
                        <a href="editForm.php" class="btn btn-primary me-2 px-4 edit">Edit</a>
                        <input type="submit" class="btn btn-outline-primary deleteValue" id="' . $details[$key]['emp_id'] . '" name="delete" hidden>
                        <a href="" class="btn btn-danger me-2 px-4 delete">Delete
                        </a>
                    </td>
                </tr>';
}




?>
<div class="container-fluid">
    <div class="row mb-3">
        <?php
        include("../sidebarData.php");
        ?>
        <div class="col-lg-10 lg:ps-5 pt-2 column10">
            <div class="p-md-5 bg-white border border-primary">
                <div class="input-group rounded mb-5">
                    <input type="search" class="form-control rounded searchData" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary searchClick">search</button>
                </div>
                <div class=" screen">
                    <form action="" class="nen" method="POST">
                        <table class='table' id='tabledata'>
                            <tr class='tr'>
                                <th>Sr. No</th>
                                <th>Photo</th>
                                <th>Details</th>
                                <th>Address Details</th>
                                <th>Register Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            echo $result;
                            ?>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="listing.js"></script>

<?php
include("../footerData.php");
?>