<?php
header("Content-Type: application/json");
include "../database/database.php";

$firstname =isset($_POST["firstname"])?cleanser($_POST["firstname"]):"" ;
$lastname =isset($_POST["lastname"])?cleanser($_POST["lastname"]):"";
$email =isset($_POST["email"])?cleanser(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)):"";
$message =isset($_POST["message"])?cleanser($_POST["message"]):"";

$error=array();

$data=array();

if(empty($firstname)){
  $error["firstname"]= "firstname required";
}

if(empty($lastname)){
  $error["lastname"] ="lastname is required";
}
if(empty($email)){
  $error["email"] ="Email is required";
}

if(empty($message)){
  $error["message"] =" Message is required";
}
if(!empty($error)){
  $data["fail"]=$error;
  echo json_encode($data);
}else{
  $data["success"]="thank you";
   echo json_encode($data);
}



?>
