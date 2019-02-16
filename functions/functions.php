<?php


function cleanser ($string){
  global $database;
  $string =$database->real_escape_string($string)
  return $string ;
}


  function find_page_by_id($id){
    global $database;
    $query ="SELECT * FROM page WHERE page_id='$id'";
    $query = Query($page);
    return $query;
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


}




 ?>
