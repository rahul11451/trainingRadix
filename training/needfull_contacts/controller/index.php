<?php
include 'model/Query.php';
$sliderObj = new Query();

$sliderData = $sliderObj->select('service_details', 'nId, sServiceName');

foreach ($sliderData as $key => $value) {
    $imgPath = glob("images/services/" . $sliderData[$key]['sServiceName'] . ".*");
    $slider .= '<div class="swiper-slide h-25">
                    <div class=" bg-dark text-white rounded-3" >
                        <a href="'.SITE_URL.'/view/user/serviceList.php?serviceId='.$sliderData[$key]['nId'].'" class="text-decoration-none text-white">
                            <span class="h2">' . $sliderData[$key]['sServiceName'] . '</span>
                            <img src="' . $imgPath[0] . '" class="" alt="img" heigth ="200">
                        </a>
                    </div>
                </div>';
}
?>
