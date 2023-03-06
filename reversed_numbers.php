<?php

$string = $_GET["string"];

$string_array=str_split($string);

$numbers = [];
$letters =[];


  $size = sizeof($string_array);
  //separate the letters from numbers
  for ($i = 0; $i < $size; $i++) {
   $char = intval($string_array[$i]);
    if ($char == 0){
      array_push($letters,$string_array[$i]);
      } else {
        array_push($numbers,$string_array[$i]);
          }
        }
       $reversed_array = array_reverse($numbers);
      
        $result = ''; 
        $j = 0; // j indicates the numbers' index
      
        for ($i = 0; $i < $size; $i++) {
          $char = intval($string_array[$i]);
          if ($char==0) {
            $result = $result.$letters[$i - $j]; 
          } else {
            $result = $result.$reversed_array[$j]; 
            $j++; 
          }
        }
        echo $result;
    

?>