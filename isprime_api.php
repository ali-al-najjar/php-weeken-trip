<?php

$year_of_birth = $_POST["year_of_birth"];
$current_year= date("Y");
$age = $current_year - $year_of_birth;

function isPrime($num){
if ($num <= 1) return 0;
for ($i = 2; $i <= $num / 2; $i++) {
    if ($num % $i == 0) {
      return 0;
    }
    
  }
  return 1;
}

$flag= isPrime($age);
if($flag == 0){
  echo "$age is not prime";
}else{
  echo "$age is prime";
}

?>