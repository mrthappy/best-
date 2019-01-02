<?php
include "../database/database.php";

function cleanser (string){
  global $datbase;
  return $database->real_escape_string($string);
}

function query ($sql){
global $database ;
return $database->query($sql);
}
function confirm_query($query){
  global $database ;
 if(!$query){
   exit("no connection could be made to ");
 }elae{
   return $query ;
 }
}



 ?>
