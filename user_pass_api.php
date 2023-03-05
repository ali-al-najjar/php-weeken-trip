<?php

$email = $_POST["email"];
$password = $_POST["password"];
 
$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
$email_validation =filter_var($email,FILTER_VALIDATE_EMAIL);

if(!$email_validation){
  echo "Your email format is wrong";
}else if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
 echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
} else {
 echo "Your email is: $email & your strong password is: $password";
}


?>