

<?php
include "datbase_credentials.php";
// making a connection to the database
$database= new mysqli(DB_SERVER,DB_ROOT,DB_PASSWORD,DB_DATABASE);
if($database->connect_errno){
  $message="database connectin failed ";
  $message.= "reason :" . $database->connect_error;
  $message.=  "(" . $database->connect_errno.")";
  exit($message);
}
function cleanser ($string){
  global $database;
  return $database->real_escape_string($string);
}

function Query ($sql){
global $database ;
$sql= $database->query($sql);
$sql=confirm_query($sql);
}
function confirm_query($query){

 if(!$query){
   exit("no connection could be made to ");
 }else{
   return $query ;
 }
}
function queri($sql){
  global $database;
  $sql =$datbase->query($sql);
  return $sql;
}


?>
