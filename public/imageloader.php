<?php
header("Content-Type: application/json");
include "../database/database.php";

$id =isset($_POST["id"])?cleanser($_POST["id"]):"";
 $filename=isset($_FILES["fileimage"]["name"])?cleanser($_FILES["fileimage"]["name"]):" ";
 $tmp=isset($_FILES["fileimage"]["tmp_name"])?cleanser($_FILES["fileimage"]["tmp_name"]):" ";
$firstname =isset($_POST["firstname"])?cleanser($_POST["firstname"]):" ";
$lastname =isset($_POST["lastname"])?cleanser($_POST["lastname"]):" ";
$email=isset($_POST["email"])?cleanser($_POST["email"]):" ";
 // begin to extract the image and its content
 $upload_folder ="../upload";
 $data =[];
 $error=[];
 $ext =pathinfo($filename,PATHINFO_EXTENSION);
$allowed =["png","jpeg","png","jpg"];
if(!(in_array($ext,$allowed))){
  $error["invalid"]="please use only jpg,jpeg,png files";
}
if(!empty($error)){
  $data=array("error"=>$error);
  echo json_encode($data);
}else{
  $filename=round(microtime(true)) . mt_rand() . '.' . $ext;
  move_uploaded_file($_FILES["fileimage"]["tmp_name"],$upload_folder."-"."$id"."-".$filename);
  $sql="SELECT * FROM registration WHERE memberid='$id'";
  $query=Query($sql);
  if($query->num_rows >0){
    $record =$query->fetch_assoc();
    if($record["avatar"]=="NULL"){
      // start to change the user account on the databaase
      $newquery ="UPDATE registration SET avatar='$filename' WHERE memberid='$id' LIMIT 1";
      $setquery =Query($newquery);
      $data=array("success"=>$record["firstname"]);
    echo json_encode($data);
  }else{
    $newquery ="UPDATE registration SET avatar='$filename' WHERE memberid='$id' LIMIT 1";
    $setquery =Query($newquery);
    $data=array("success"=>$record["lastname"]);
  echo json_encode($data);
  }


  }

}
