<?php
include "../database/database.php";

$firstname =isset($_POST["firstname"])?cleanser($_POST["firstname"]):" ";
$lastname =isset($_POST["lastname"])?cleanser($_POST["lastname"]):" ";
$email =isset($_POST["email"])?cleanser(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)):" ";
$message =isset($_POST["message"])?cleanser($_POST["message"]):"";
echo $firstname .", ". $lastname ." ,". $email ." ," .$message;
$error=array();
$data =array();
// checking for errors

if(empty($firstname)):
  $error["firstname"]="firstname required";
  endif ;

if(empty($lastname)):
  $error["lastname"]="lastname is required";
endif;
if(empty($email)):
  $error["email"]="email needed";
endif;
if(empty($message)):
  $error["message"]="message is required";
endif;

if(!empty($error)){
  $data=array("fail"=>$error);
  echo json_encode($data);
}
  // pile up the erros and create a new array holding the data

else{

  $insert ="INSERT INTO contact(firstname,lastname,email,message) VALUES('$firstname','$lastname','$email','$message')";
  $query=query($insert);
  if($query){
    $data=array("success"=>"Thanks for the time");
    echo json_encode($data);


}





}





?>
