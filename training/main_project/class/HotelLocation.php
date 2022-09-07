<?php
include('../classpath.php');

class HotelLocation extends DatabaseQuery
{

    function listingData($data)
    {
        if (empty($data)) {
            $resultData = '<h1 class="text-white text-center  mt-5 pt-5">Opps, No data is here. <br><span class="h5 text-sty"> Please Add Locations.</span></h1>';
        } else {
            $resultData = "<table class='table ' id='tabledata'>
                <thead class='text-black'>
                    <tr class='h5 text-center'>
                        <th>Sr No.</th>
                        <th>Location</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Sort Order</th>
                        <th>Status</th>
                        <th>Created_date</th>
                        <th>Modified_date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>";
            $srNo = 1;
            foreach ($data as $key => $value) {
                $hotel = $this->select('hotel', 'hotel_location_id', array('hotel_location_id' => array($data[$key]['hotel_location_id'], '=')));
                $resultData .= '<tr class="h6 fw-bold">
                                <td class="text-center ">' . $srNo++ . '</td>
                                <td class="text-center ">' . $data[$key]['location'] . '</td>
                                <td class="text-center ">' . $data[$key]['city'] . '</td>
                                <td class="text-center ">' . $data[$key]['state'] . '</td>
                                <td class="text-center ">' . $data[$key]['sort_order'] . '</td>
                                <td class="text-center "><div class="flex-fill mb-0 ms-4 form-check form-switch"><input class="form-check-input h4 border-dark border-2 status" name="switch" type="checkbox" id="' . $data[$key]['hotel_location_id'] . '"' ?>
                                <?php
                                if ($data[$key]['status'] == 1) {
                                    $resultData .= 'checked';
                                }
                                ?>
                        <?php
                        $resultData .= '></div></td>
                                <td class="text-center ">' . $data[$key]['created_date'] . '</td>
                                <td class="text-center ">' . $data[$key]['modified_date'] . '</td>
                                <td>
                                    <a href="addLocation.php?id=' . $data[$key]['hotel_location_id'] . '" class="edit me-3"><span class="fa-regular fa-pen-to-square h2 text-dark"></span></a>

                                    <input type="submit" class="btn btn-outline-primary deleteValue" id="' . $data[$key]['hotel_location_id'] . '" name="delete" hidden> '
                        ?>
                                    <?php
                                    if (empty($hotel)) {
                                        $resultData .= '<a href="" class="delete"><span class="fa-regular fa-trash-can h2 text-dark"></span></a>';
                                    }
                                    ?>
                                    <?php

                                    $resultData .= '</td>
                            </tr>';
                                }
                                $resultData .= '</tbody>
                </table>';
                            }

                            return $resultData;
                        }

                        function deleteData($value)
                        {
                            $array = $this->select('hotel', 'hotel_location_id', array('hotel_location_id' => array($value, '=')));
                            if (empty($array)) {
                                $this->delete('hotel_location', array('hotel_location_id' => array($value, '=')));
                                $error =  'Data Deleted Successfully';
                            } else {
                                $error = 'Location Is available for hotels so it can not be delet.';
                            }

                            return $error;
                        }
                    }

?>