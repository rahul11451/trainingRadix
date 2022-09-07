<?php

include('../classpath.php');

class Hotel extends DatabaseQuery{

    // hotel data listing 
    function hotelInsertion($data){

        if (empty($data)) {
            $resultData = '<h1 class="text-white text-center ">Opps, No data is here. <br><span class="h5 "> Please Add Hotels.</span></h1>';
        } else {
            $id = 1;
            $resultData = "<table class='table ' id='tabledata'>
                    <thead class='text-black'>
                        <tr class='h5'>
                            <th>Sr No.</th>
                            <th>Small Photo</th>
                            <th>Large Photo</th>
                            <th>Details</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach ($data as $key => $value) {
                $location = $this->select('hotel_location', '*', array('hotel_location_id' => array($data[$key]['hotel_location_id'], '=')));
                $resultData .= '<tr class="h6 fw-bold">
                                    <td>' . $id++ . '</td>
                                    <td><img src="'.NENSI . $data[$key]['hotel_id'] . '/' . $data[$key]['small_pic'] . '" alt="" class="" width="200" height="150"></td>
                                    <td><img src="'.NENSI . $data[$key]['hotel_id'] . '/' . $data[$key]['large_pic'] . '" alt="" class="" width="200" height="150"></td>
                                    <td> <ul class="list-unstyled">
                                            <li class="py-2">Hotel Title: ' . $data[$key]['hotel_title'] . '</li>
                                            <li class="py-2">No of Rooms: ' . $data[$key]['no_of_room'] . '</li>
                                            <li class="py-2">Room Type: ' . $data[$key]['room_type'] . '</li>
                                            <li class="py-2">Hotel Star: ' . $data[$key]['hotel_star'] . '</li>
                                        </ul></td>
                                    <td> <ul class="list-unstyled">
                                        <li class="py-2">Location: ' . $location[0]['location'] . '</li>
                                        <li class="py-2">City: ' . $location[0]['city'] . '</li>
                                        <li class="py-2">State: ' . $location[0]['state'] . '</li>
                                    </ul></td>
                                    <td> <ul class="list-unstyled">
                                            <li class="py-2">Registration Date: ' . $data[$key]['hotel_regi_date'] . '</li>
                                            <li class="py-2">Created Date: ' . $data[$key]['created_date'] . '</li>
                                            <li class="py-2">Modified Date: ' . $data[$key]['modified_date'] . '</li>
                                        </ul>
                                    </td>
                                    <td>' . $data[$key]['short_desc'] . '</td>
                                    <td>' . $data[$key]['long_desc'] . '</td>
                                    <td><div class="flex-fill mb-0 ms-4 form-check form-switch"><input class="form-check-input h4 border-dark border-2 stat" name="switch" type="checkbox" id="' . $data[$key]['hotel_id'] . '"' ?>
                                    <?php
                                    if ($data[$key]['status'] == 1) {
                                        $resultData .= 'checked';
                                    }
                                    ?>
                            <?php
                            $resultData .= '></div></td>
                                    <td>
                                        <a href="addHotel.php?id=' . $data[$key]['hotel_id'] . '" class="edit me-1"><span class="fa-regular fa-pen-to-square h3 text-dark"></span></a>

                                        <input type="submit" class="btn btn-outline-primary deleteValue" id="' . $data[$key]['hotel_id'] . '" name="delete" hidden>
                                    
                                        <a href="" class="delete"><span class="fa-regular fa-trash-can h3 text-dark"></span></a>
                                    </td>
                                </tr>';
                        }
                        $resultData .= '</tbody>
                    </table>';
                    }

                    return $resultData;
                }


    // delete hotel logic
    function deleteData($value){
        $photo = $this->select('hotel', 'small_pic, large_pic', array('hotel_id' => array($value, '=')));

        $small_pic = '../main_images/' . $value . '/' . $photo[0]['small_pic'];
        $large_pic = '../main_images/' . $value . '/' . $photo[0]['large_pic'];

        unlink($small_pic);
        unlink($large_pic);
        rmdir('../main_images/' . $value);

        $this->delete('hotel', array('hotel_id' => array($value, '=')));
    }
}

?>
