<?php
include 'Query.php';
class ServiceList extends Query
{
    function pagination($query, $results_per_page, $page)
    {
        $val = $_GET['serviceId'];
        $numbers = '';
        $number_of_result = count($query);

        //determine the total number of pages available  
        $number_of_page = ceil($number_of_result / $results_per_page);

        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($page - 1) * $results_per_page;

        for ($pages = 1; $pages <= $number_of_page; $pages++) {
            if(isset($_GET['serviceId'])) {
                if($pages == $page) {
                    $numbers .= '<a href = "serviceList.php?serviceId='.$val.'&page=' . $pages . '" class="btn btn-danger mx-4  ">' . $pages . ' </a>';
                } else {
                    $numbers .= '<a href = "serviceList.php?serviceId='.$val.'&page=' . $pages . '" class="btn btn-dark mx-4  ">' . $pages . ' </a>';
                }
            } else {

                if($pages == $page) {
                    $numbers .= '<a href = "serviceList.php?page=' . $pages . '" class="btn btn-danger mx-4  ">' . $pages . ' </a>';
                } else {
                    $numbers .= '<a href = "serviceList.php?page=' . $pages . '" class="btn btn-dark mx-4  ">' . $pages . ' </a>';
                }
            }
        }

        return array($numbers, $page_first_result);
    }

    function frontServiceList($tableData)
    {
        $result = '';
        $colId = 0;
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
            $result .= '<div class="col-lg-4">
            <div class="nav w-100 nav-pills cards overflow-scroll">';
            foreach ($servs as $nId => $serId) {
                if ($nId == $tableData[$key]['nId']) {
                    foreach ($serId as $keyId => $value) {
                        if ($keyId % 2 == 0) {
                            $colId = $keyId;
                            $result .= '
                                <button class="nav-link w-100 text-start p-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                                    <a class="text-decoration-none h4 m-0 fw-bolder text-danger" data-bs-toggle="collapse" href="#id_'.$nId.$colId.'" role="button" aria-expanded="false">
                                        '.$value.' <i class="fa fa-chevron-down"></i></a>';
                        } else {
                            $result .= '<div class="collapse" id="id_'.$nId.$colId.'">
                            <div class="">
                                <p class="ms-3 text-dark">'.$value.'</p>
                            </div>
                        </div>
                    </button>
                    ';
                        }
                    }
                }
            }
            $result .= '
            </div>
            </div><div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="' . NENSI . '/' . $tableData[$key]['nId'] . '/smallPhoto/' . $tableData[$key]['sSmPic'] . '" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body cards">
                                    <h5 class="card-title">' . $tableData[$key]['sName'] . '</h5>
                                    <div class="card-text">
                                        <span><i class="fa fa-phone pe-2"></i>' . $tableData[$key]['nPhoneNumber'] . '</span><br>
                                        <span class=""><i class="fa fa-envelope pe-2"></i>' . $tableData[$key]['sEmail'] . '</span>
                                    </div>
                                    
                                    <p class="card-text"><i class="fa fa-map-marker-alt pe-3"></i>' . $tableData[$key]['sAddress'] . ', ' . $tableData[$key]['sCity'] . ', ' . $tableData[$key]['nPincode'] . '</p>
                        
                                    <a href="" class="btn btn-danger form-control mb-2 contactUs" id="' . $tableData[$key]['nId'] . '">CONTACT US <i class="fa fa-envelope ps-2"></i></a>
                                    <a href="tel:+917046379223" class="btn btn-danger form-control">CALL US <i class="fa fa-phone ps-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
        return $result;
    }
}
