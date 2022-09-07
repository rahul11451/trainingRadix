<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://nensi.localhost/api/index.php?nId=16',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET'
));

$response = curl_exec($curl);

curl_close($curl);
echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r(json_decode($response));echo '</pre>'; die();



// From URL to get webpage contents.
// $url = "http://nensi.localhost/api/index.php?nId=16";
 
// // Initialize a CURL session.
// $ch = curl_init();
 
// // Return Page contents.
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
// //grab URL and pass it to the variable.
// curl_setopt($ch, CURLOPT_URL, $url);
 
// $result = curl_exec($ch);
 
// echo '<br>Nensi<br>File: '. __FILE__.'<br>Line: '.__LINE__.'<br><pre>';print_r($result);echo '</pre>'; die();
