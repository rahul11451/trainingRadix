<?php
include 'Query.php';
class ServiceList extends Query
{
    function pagination($query, $results_per_page, $page)
    {
        $numbers = '';
        $number_of_result = count($query);

        //determine the total number of pages available  
        $number_of_page = ceil($number_of_result / $results_per_page);

        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($page - 1) * $results_per_page;

        for ($page = 1; $page <= $number_of_page; $page++) {
            $numbers .= '<a href = "serviceList.php?page=' . $page . '" class="btn btn-dark mx-4  ">' . $page . ' </a>';
        }

        return array($numbers, $page_first_result);
    }

    function frontServiceList($tableData)
    {
        $result = '';
        // service datail table selected
        $serData = $this->join('SELECT service_details.*, business_details.nProviderId FROM business_details', 'service_details', array('business_details.nServiceDetailId' => array('service_details.nId', '=')));

        $services = array();
        $serv = array();
        $servs = array();

        foreach ($tableData as $key => $value) {
            foreach ($serData as $keys => $values) {
                if ($tableData[$key]['nId'] == $serData[$keys]['nProviderId']) {

                    $services[$tableData[$key]['nId']][] = $serData[$keys]['sServiceName'];
                    $services[$tableData[$key]['nId']][] = $serData[$keys]['sDescription'];
                }
            }
        }

        foreach ($services as $ke => $val) {
            $serv = array_unique($services[$ke]);
            $servs[$ke] = $serv;
        }

        // table listing
        foreach ($tableData as $key => $value) {
            $result .= '<div class="col-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <img src="' . NENSI . '/' . $tableData[$key]['nId'] . '/smallPhoto/' . $tableData[$key]['sSmPic'] . '" class="img-fluid h-100" alt="photo">
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="card-body cards overflow-scroll">';

?>
                    <?php

                    foreach ($servs as $nId => $serId) {
                        if ($nId == $tableData[$key]['nId']) {
                            foreach ($serId as $keyId => $value) {
                                if ($keyId % 2 == 0) {
                                    $result .= '<h5 class="card-title">' . $value . '</h5>';
                                } else {
                                    $result .= '<p class="text-muted ms-3">
                                    <a class="text-decoration-none text-muted fw-bolder" data-bs-toggle="collapse" href="#id'.$nId.$keyId.'" role="button" aria-expanded="false">
                                    Description <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    </p>
                                    <div class="collapse" id="id'.$nId.$keyId.'">
                                    <div class="">
                                    <p class="text-muted ms-3">' . $value . '</p>
                                    </div>
                                    </div>';
                                }
                            }
                        }
                    }
                    ?>
                    <?php

                    $result .= '</div>
                        </div>
                        <div class="col-md-4 bg-success bg-opacity-25 border-start border-2">
                            <div class="card-body cards">
                                <h5 class="card-title">' . $tableData[$key]['sName'] . '</h5>
                                <div class="card-text">
                                    <span><i class="fa-solid fa-phone pe-2"></i>' . $tableData[$key]['nPhoneNumber'] . '</span><br>
                                    <span class=""><i class="fa-solid fa-envelope pe-2"></i>' . $tableData[$key]['sEmail'] . '</span>
                                </div>
                                <p class="card-text"><i class="fa-solid fa-location-dot pe-2"></i>' . $tableData[$key]['sAddress'] . ', ' . $tableData[$key]['sCity'] . ', ' . $tableData[$key]['nPincode'] . '</p>
                                <a href="' . SITE_URL . '/view/user/contact.php?serviceId=' . $tableData[$key]['nId'] . '" class="btn btn-dark form-control mb-2">CONTACT US <i class="fa-solid fa-envelope ps-2"></i></a>
                                <a href="tel:+917046379223" class="btn btn-outline-dark form-control">CALL US <i class="fa-solid fa-phone ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
                }
                return $result;
            }
        }
