<?php
include('frontHeader.php');

include('class/DatabaseQuery.php');

$listing = new DatabaseQuery();
$id = $_REQUEST['id'];
$data = $listing->select('hotel', '*', array('hotel_id' => array($id, '=')));

foreach ($data as $key => $value) {
    $locData = $listing->select('hotel_location', '*', array('hotel_location_id' => array($data[$key]['hotel_location_id'], '=')));
    $result .= '<img src="main_images/' . $data[$key]['hotel_id'] . '/' . $data[$key]['large_pic'] . '" class="" alt="img" width="1825" height="550">
                <h3 class="text-center my-3 text-decoration-underline">' . $data[$key]['hotel_title'] . '</h5>
                <p class=""><span class="h5 ms-5 me-3 text-decoration-underline">Description: </span>' . $data[$key]['long_desc'] . '</p>
                <p class=""><span class="h5 ms-5 me-3 text-decoration-underline">Address: </span>' . $locData[0]['location'] . ', ' . $locData[0]['city'] . ', ' . $locData[0]['state'] . '</p>
                <div class="d-flex">
                    <p class=""><span class="h5 ms-5 me-2 text-decoration-underline">Number of Rooms: </span>' . $data[$key]['no_of_room'] . '</p>
                    <p class=""><span class="h5 ms-5 me-2 text-decoration-underline">Room Type: </span>' . $data[$key]['room_type'] . '</p>
                    <p class=""><span class="h5 ms-5 me-2 text-decoration-underline">Hotel Star: </span>' . $data[$key]['hotel_star'] . '</p>
                </div>';
}

?>

<div class="container-fluid mt-5 mb-3 py-5">
    <?php
    echo $result;
    ?>

</div>

<?php
include('mainFooter.php');
?>