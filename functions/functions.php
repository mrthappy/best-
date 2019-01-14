<?php


function cleanser ($string){
  global $database;
  $string =$database->real_escape_string($string)
  return $string ;
}

function query ($sql){
global $database ;
$sql= $database->query($sql);
$sql=confirm_query($sql);
}
function confirm_query($query){
 if(!$query){
   exit("no connection could be made to database");
 }else{
   return $query ;
 }

 function savehtml($data){
  return htmlspecialchars($data);
}
}




 ?>
