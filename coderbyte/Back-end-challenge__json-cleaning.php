<?php
$ch = curl_init('https://coderbyte.com/api/challenges/json/json-cleaning');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch);
curl_close($ch);
$originalArray = json_decode($data, true);
$cleanedArray = array();
    
foreach($originalArray as $keys => $values) {

  if(is_array($values)){
    $auxArray = array();
    foreach($values as $key=>$value){
        if ($value != 'N/A' && $value != '-' && $value != '')
            $auxArray[$key] = $value;
    }
    $cleanedArray[$keys] = $auxArray;
    }
    else{
        if ($values != 'N/A' && $values != '-' && $values != '')
            $cleanedArray[$keys] = $values;
    }
}

$cleanedArray = json_encode($cleanedArray, true);
print_r($cleanedArray);