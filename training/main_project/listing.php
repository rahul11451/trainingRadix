<?php
include('classpath.php');
include 'filepath.php';

$listing = new Frontend();

$results_per_page = 2;



//determine which page number visitor is currently on  
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}


// listing data

$optionState = $listing->select('hotel_location', 'DISTINCT state');
$optionCity = $listing->select('hotel_location', 'DISTINCT city');
$optionLoc = $listing->select('hotel_location', 'DISTINCT location');
foreach ($optionState as $key => $value) {
    $state .= '<option value="' . $optionState[$key]['state'] . '">' . $optionState[$key]['state'] . '</option>';
}

foreach ($optionCity as $key => $value) {
    $city .= '<option value="' . $optionCity[$key]['city'] . '">' . $optionCity[$key]['city'] . '</option>';
}

foreach ($optionLoc as $key => $value) {
    $location .= '<option value="' . $optionLoc[$key]['location'] . '">' . $optionLoc[$key]['location'] . '</option>';
}

// filter

if ($_POST['action'] == 'stateSelect') {
    $stateSelect = $_POST['state'];
    $opData = $listing->select('hotel_location', 'DISTINCT city', array('state' => array($stateSelect, '=')));
    $opDatas = $listing->select('hotel_location', 'DISTINCT location', array('state' => array($stateSelect, '=')));

    if (empty($opData)) {
        $cities = '<option value="">-- City --</option>';
    } else {
        $cities = '<option value="">-- City --</option>';
        foreach ($opData as $key => $value) {
            $cities .= '<option value="' . $opData[$key]['city'] . '">' . $opData[$key]['city'] . '</option>';
        }
    }

    if (empty($opData)) {
        $locations = '<option value="">-- Location --</option>';
    } else {
        $locations = '<option value="">-- Location --</option>';
        foreach ($opDatas as $key => $value) {
            $locations .= '<option value="' . $opDatas[$key]['location'] . '">' . $opDatas[$key]['location'] . '</option>';
        }
    }

    echo $cities . ',' . $locations;
    exit;
}
include('frontHeader.php');

if ($_POST['action'] == 'searchData' || isset($_GET['state'])) {
    if (isset($_GET['state'])) {
        $states = $_GET['state'];
        $city = $_GET['city'];
        $location = $_GET['loc'];
    } else {
        $states = $_POST['state'];
        $city = $_POST['city'];
        $location = $_POST['location'];
    }

    if (empty($states)) {
        $results = $listing->select('hotel');
    } else {
        $id = $listing->select('hotel_location', 'hotel_location_id', array('city' => array($city, '=', 'AND'), 'state' => array($states, '=', 'AND'), 'location' => array($location, '=')));

        $number_of_result = $listing->select('hotel', '*', array('hotel_location_id' => array($id[0]['hotel_location_id'], '=', 'AND'), 'status' => array('1', '=')));

        //determine the total number of pages available  
        $number_of_page = ceil(count($number_of_result) / $results_per_page);
        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($page - 1) * $results_per_page;

        $results = $listing->select('hotel', '*', array('hotel_location_id' => array($id[0]['hotel_location_id'], '=', 'AND'), 'status' => array('1', '=')), 'LIMIT ' . $page_first_result . ',' . $results_per_page);
    }

    if (!empty($results)) {
        $result = $listing->loop($results);
        $result .= '<div class="d-flex justify-content-end mx-lg-5 mb-5">';
        for ($page = 1; $page <= $number_of_page; $page++) {
            $result .= '<a href = "listing.php?page=' . $page . '&state=' . $states . '&city=' . $city . '&loc=' . $location . '" id="' . $page . '" class="page btn btn-primary mx-4  ">' . $page . ' </a>';
        }
        $result .= '</div>';
    } else {
        $result = '<h1 class="text-danger text-center"> Upps, Not matched any data. </h1>';
    }

    if ($_POST['action'] == 'searchData') {
        echo $result;
        exit;
    }
}

// search
if ($_POST['action'] == 'search' || isset($_GET['searches'])) {
    if (isset($_GET['searches'])) {
        $searchData = $_GET['searches'];
    } else {
        $searchData = $_POST['search'];
    }

    $searchResult = $listing->select('hotel', '*', array('status' => array('1', '=', 'AND ('), 'hotel_title' => array('%' . $searchData . '%', 'LIKE', 'OR'), 'hotel_star' => array('%' . $searchData . '%', 'LIKE', 'OR'), 'room_type' => array('%' . $searchData . '%', 'LIKE', ')')));

    $number_of_result = count($searchResult);
    $number_of_page = ceil($number_of_result / $results_per_page);
    $page_first_result = ($page - 1) * $results_per_page;

    $data = $listing->select('hotel', '*', array('status' => array('1', '=', 'AND ('), 'hotel_title' => array('%' . $searchData . '%', 'LIKE', 'OR'), 'hotel_star' => array('%' . $searchData . '%', 'LIKE', 'OR'), 'room_type' => array('%' . $searchData . '%', 'LIKE', ') ')), 'LIMIT ' . $page_first_result . ',' . $results_per_page);
    if (!empty($data)) {
        $result = $listing->loop($data);
        $result .= '<div class="d-flex justify-content-end mx-lg-5 mb-5">';        
        for ($page = 1; $page <= $number_of_page; $page++) {
            $result .= '<a href = "listing.php?page=' . $page .'&searches='.$searchData.'" class="btn btn-primary mx-4  ">' . $page . ' </a>';
        }
        $result .= '</div>';
    } else {
        $result = '<h1 class="text-danger text-center"> Upps, Not matched any data. </h1>';
    }
    if ($_POST['action'] == 'search') {
        echo $result;
        exit;
    }
}


if (!isset($_GET['state']) && !isset($_GET['searches'])) {
    //find the total number of results stored in the database  
    $query = $listing->select('hotel', '*', array('status' => array('1', '=')));
    $number_of_result = count($query);

    //determine the total number of pages available  
    $number_of_page = ceil($number_of_result / $results_per_page);

    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page - 1) * $results_per_page;

    $data = $listing->select('hotel', '*', array('status' => array('1', '=')), 'LIMIT ' . $page_first_result . ',' . $results_per_page);
    $result = $listing->loop($data);

    for ($page = 1; $page <= $number_of_page; $page++) {
        $numbers .= '<a href = "listing.php?page=' . $page . '" class="btn btn-primary mx-4  ">' . $page . ' </a>';
    }
}


?>

<div class="container-fluid mt-5 pt-5">
    <div class="d-md-flex justify-content-between mx-lg-5 mx-2">
        <!-- serach box -->
        <div class="input-group rounded mb-5 mx-lg-5 mx-1">
            <input type="search" class="form-control border border-2 border-success rounded searchData searchClick" placeholder="Search from Hotel title, Room Type and number of Rooms" aria-label="Search" aria-describedby="search-addon" />
            <button class="btn btn-outline-success border-2 search">Search</button>
            <!-- <input type="button" value="Search" class="btn btn-outline-success border-2" name="search" class=""> -->
        </div>
        <!-- filter box -->
        <div class="input-group rounded mb-5 mx-lg-5 mx-1">
            <!-- <form action=""  method="POST"> -->
            <div class="d-flex flex-row gap-5 w-100 justify-content-between">
                <select name="" id="state" class="form-select state border-warning border border-2">
                    <option value="">-- State --</option>
                    <?php echo $state; ?>
                </select>

                <select name="" id="city" class="form-select city border-warning border border-2">
                    <option value="">-- City --</option>
                </select>

                <select name="" id="loc" class="form-select loc border-warning border border-2">
                    <option value="">-- Location --</option>
                </select>
            </div>
            <!-- </form> -->
            <!-- <input type="search" class="form-control border border-2 border-warning rounded filterData" placeholder="Filter by Location" /> -->
        </div>
    </div>
    <section class="container-fluid ">
        <div class="row mb-3 mx-lg-5 nen">
            <?php
            echo $result;
            ?>
            <div class="d-flex justify-content-end mx-lg-5 mb-5">
                <?php
                echo $numbers;
                ?>
            </div>
        </div>
    </section>
</div>
<script src="js/listing.js"></script>
<?php
include('mainFooter.php');
?>