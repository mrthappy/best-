
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

?>
