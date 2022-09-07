<?php

$arr = array(80, 30, 30);

$result =  $results = 0;
foreach ($arr as $key=>$value){
    // if else

    if(($key+1) % 2 == 0){
        $results -= $value;
    } else {
        $results += $value;
    }
}


echo $results;

?>