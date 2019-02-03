<?php

include "../database/database.php";
$firstname =isset($_POST["firstname"])?cleanser($_POST["firstname"]):"";
$lastname=isset($_POST["lastname"])?cleanser($_POST["lastname"]): " ";
$file=isset($_FILES["fileimage"])?cleanser($_FILES["fileimage"]["name"]): "";
$filetmp=isset($_FILES["fileimage"])?cleanser($_FILES["fileimage"]["tmp_name"]):"";
$email=isset($_POST["email"])?cleanser($_POST["email"]): "";
$error=[];
$data=[];
  $upload ="../upload/";

if($firstname && $lastname&&$email&&$file){
  $extension = strtolower(pathinfo($_FILES['fileimage']['name'], PATHINFO_EXTENSION));
  $allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');
  if(!in_array($extension, $allowed_extensions)) {
   echo "Ungültige Dateiendung. Nur png, jpg, jpeg und gif-Dateien sind erlaubt";
   exit;
  }

  // checkout for the image

if(move_uploaded_file($_FILES["fileimage"]["tmp_name"],$upload.$file)){
  echo " it was done";
}else{
  echo "it was not uploased";
}

}else {
  echo "please edit any of the fieldds";
}


?>
