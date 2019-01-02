<?php
include "../database/database.php";
include "../functions/functions.php";
$firstname =isset($_POST["firstname"])?cleanser($_POST["firstname"]):"";
$lastname =isset($_POST["lastname"])?cleanser($_POST["lastname"]):"";
$email =isset($_POST["email"])?cleanser(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)):"";
$message =isset ($_POST["message"]):cleanser($_POST["message"]):"";
$error=new Array();
$data =new Array();
// checking for errors
if(empty($firstname)):
  $error["firstname"]="firstname required";


  endif ;

if(empty($lastname)):
  $error["lastname"]="lastname is required";
endif;
if(empty($message)):
  $error["message"]="message is required";
endif;
 if($firstname && $lastname && $email && $message):
   $insert ="INSERT INTO contact(firstname,lastname,email,message) VALUES('$firstname','$lastname','$email','$message')";
   $query =query($insert);
   $query=confirm_query($query);
   $data["success"]="we shall get back to you soonest";
   echo json_enc




 endif;

?>
