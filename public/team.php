<?php

include "../database/database.php";
$team=isset($_GET["team"])?cleanser($_GET["team"]):"";
$format =["id"=>1,
            "customer"=>"jdkdjd"];

foreach($format as $var=>$value){
  $output="<p>";
  $output.= $value;
  $output.="</p>";
  echo $output;
}

 ?>
