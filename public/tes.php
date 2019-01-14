<?php
if(isset($_GET["team"])):
  $id=htmlentities(htmlspecialchars(cleanser($_GET["team"])));
$teamselect="SELECT * FROM  teamlist WHERE  team_id ='$id'";
$record=Query($teamselect);
while($userrow=$record->fetch_assoc()){
  $result='<div class="membercontainer">';
  $result.='<img  class="team_image"  src ="../images/'.$userrow["team_image"].'"> ';
  $result.= '<p class="team_para" > All About '.$userrow["firstname"]. '</p> ';
  $result.= '<p class="team_para">' .$userrow["About"] . '</p> ';
  $result.= "</div>";
  echo $result;




}
endif;










?>
<script>

// get the positon and animate it accordingly ;
window.addEventListener("load",function(){
  let image=document.querySelector(".team_image");
   image.style.left=`200px`;
})


</script>
