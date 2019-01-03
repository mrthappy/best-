<?php
include "../database/database.php";

$firstname =isset($_POST["firstname"])?cleanser($_POST["firstname"]):"" ;
$lastname =isset($_POST["lastname"])?cleanser($_POST["lastname"]):"";
$email =isset($_POST["email"])?cleanser(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)):"";
$message =isset($_POST["message"])?cleanser($_POST["message"]):"";

$error=array();
$data =array();
$message=array();
// checking for errors
if(empty($firstname)):
  $error["firstname"]="the firstname is required";
endif;

if(empty($lastname)):
  $error["lastname"]="the lastname is required";
endif;

if(empty($email)):
  $error["email"]="the email is required";
endif;

if(empty($message)):
  $error["message"]="the message is required";
endif;

if(!empty($error)){
$data=array("fail"=>$error);
  echo json_encode($data) ;
}else{
  $message =array("success"=>"thank you")
  echo json_encode($message);
}






?>
