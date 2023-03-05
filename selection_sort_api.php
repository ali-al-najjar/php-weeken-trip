<?php
$numbers =$_GET["numbers"];
$array = explode(",", $numbers);
$size = sizeof($array);

function numbersSort($array, $size){
for($i=0; $i < $size; $i++) {
  $current = $i;
  for($j=$i+1; $j<$size; $j++) {
    if($array[$j] < $array[$current])
      {$current = $j;}
    }
  $temp = $array[$current];
  $array[$current] = $array[$i];
  $array[$i] = $temp;
    }
  echo json_encode($array);};


echo "Your original input is: $numbers </br>";
echo "Your sorted input is:", numbersSort($array,$size);
?>
