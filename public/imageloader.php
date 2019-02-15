<?php
header("Content-Type: application/json");
include "../database/database.php";

$id =isset($_POST["id"])?cleanser($_POST["id"]):"";
 $filename=isset($_FILES["fileimage"]["name"])?cleanser($_FILES["fileimage"]["name"]):" ";
 $tmp=isset($_FILES["fileimage"]["tmp_name"])?cleanser($_FILES["fileimage"]["tmp_name"]):" ";
$firstname =isset($_POST["firstname"])?cleanser($_POST["firstname"]):" ";
$lastname =isset($_POST["lastname"])?cleanser($_POST["lastname"]):" ";
$email=isset($_POST["email"])?cleanser($_POST["email"]):" ";
 if($filename){
    $upload_folder = '../upload/'; //Das Upload-Verzeichni
    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');
    if(!in_array($extension, $allowed_extensions)) {
     $error["failure"]="this is not allowed";

   }else{
     move_uploaded_file($tmp,$upload_folder.$filename);


   }
  if(empty($error)){
    $data["success"]="thank you";
    echo json_encode($data);

  }else{
    echo json_encode($error);
  }
   }
