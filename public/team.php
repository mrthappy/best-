<?php

include "../database/database.php";
$team=isset($_GET["team"])?htmlspecialchars(cleanser($_GET["team"])):"";
$sql ="SELECT * FROM TEAMS";
$query=$database->queri($sql);
if(!$query):
  echo "it is not there";
else:
  echo "it is there";

endif;

 ?>
