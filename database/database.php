

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

function find_all($tableName){
  global $database;
  $query ="SELECT * FROM $tableName";
  $result =Query($query);
  return $result;


}


function find_page_by_id($id){
  global $database;
  $query ="SELECT * FROM page WHERE page_id='$id'";
  $query = Query($query);
  return $query;
}

function Query ($sql){
global $database ;
$sql= $database->query($sql);
$result =confirm_query($sql);
return $result;
}
function confirm_query($query){
 global $database;

 if(!$query){
    echo $database->errno;
 }else{
   return $query ;
 }

}


function savehtml($data){
 return htmlspecialchars($data);
}

?>
