<?php

include "../database/database.php";
$team=isset($_GET["team"])?htmlspecialchars(cleanser($_GET["team"])):"";
$sql ="SELECT * FROM team ORDER BY team_id ASC";
$query=query($sql);

 ?>
