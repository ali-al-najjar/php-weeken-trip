<?php

$string = $_POST["string"];
$string_array = str_split($string);
$size = sizeof($string_array);
$array_vowels = [];
$array_consonants=[];

for($i = 0;$i<$size;$i++){
  if ($string_array[$i] =="a" ||  $string_array[$i] =="e" || $string_array[$i] =="i" || $string_array[$i] =="o" || $string_array[$i] =="u"){
  array_push($array_vowels,$string_array[$i]);
  }else{
    array_push($array_consonants,$string_array[$i]);
  }}
 for($i = 0; $i<$size;$i++){
  if ($array_consonants[0] == $string_array[$i]){
      $string_array[-1] = $array_consonants[0];   
  }
 }
array_shift($string_array);
$new_string = implode('', $string_array);
echo $new_string ."ay";

?>