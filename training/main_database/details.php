<?php
session_start();
include("lib/ClassFile.php");

$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
    header('Location: index.php');
}



$formDetails = new ClassFile();

include("headerData.php");
$details = $formDetails->select('employees');

$joinResult = $formDetails->join();

$id = 1;
foreach ($details as $key => $array) {
    if ($user_id == $details[$key]['emp_id']) {
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
                        <a href="editUserForm.php" class="btn btn-primary me-2 px-4 edit">Edit</a>
                        <input type="submit" class="btn btn-outline-primary deleteValue" id="' . $details[$key]['emp_id'] . '" name="delete" hidden>
                    </td>
                </tr>';
    }
}

?>
<div class="container-fluid">
    <div class="p-md-5 bg-white border border-primary mt-4">
        <div class=" screen">
            <form action="" class="" method="POST">
                <table class='table'>
                    <tr>
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
<script src="details.js"></script>

<?php
include("../footerData.php");
?>