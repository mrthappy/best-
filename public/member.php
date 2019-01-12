<?php

$sql ="SELECT * FROM teamlist ";
$result =Query($sql);



?>



<section class="fotos">
 <?php while ($row =$result->fetch_assoc()){
   $id=$row["team_id"];

  echo "<div class=\"figure\"> ";
  echo '<a class="a" href ="team.php?team='.$id.'"> ';
  echo '<img src="../images/'.$row["team_image"].'"> ';
  echo   "<p>" . $row["firstname"]. "</p> ";
  echo "<p>" . "Lead Designer". "</p> ";
  echo  "<a/> ";
  echo "</div>";


}
?>

</section>
