<?php

$email = $_POST["email"];
$password = $_POST["password"];
 
$number = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
$email_validation =filter_var($email,FILTER_VALIDATE_EMAIL);

$response = [];
if(!$email_validation){
  $response['Status'] = False;
  // echo "Your email format is wrong";
}else if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
//  echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
$response['Status'] = False;
} else {
//  echo "Your email is: $email & your strong password is: $password";
$response['Status'] = True;
}

echo json_encode($response);

?>