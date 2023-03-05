<?php

$text =$_GET["text"];

$text_length = strlen($text)-1;
$counter = 0;
$flag = 0;

  while($counter < $text_length){
      if($text[$counter] != $text[$text_length]){
       $flag = 0;
       break;
      }else{
        $flag= 1;
      }
  $counter ++;
  $text_length = $text_length - 1;}

  if($flag == 1){
    echo "$text is a Palindrome";
  }else{
    echo "$text is not a Palindrome";
  }
  






?>