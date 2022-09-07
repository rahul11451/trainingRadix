<?php

    include 'classpath.php';

    $try = new Frontend();
    $results_per_page = 3;  
  
    //find the total number of results stored in the database  
    $query = $try->select('hotel');  
    $number_of_result = count($query);  
  
    //determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
  
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  
    $result = $try->select('hotel','*', array(), 'LIMIT '. $page_first_result .','. $results_per_page);
    $results =$try->loop($result);
    // echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($result);echo '</pre>'; die();

    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '<a href = "try.php?page=' . $page . '">' . $page . ' </a>';  
    } 
?>

<div class="">
    <?php
        echo $results; 
    ?>
</div>