<?php include    "../database/database.php";?>

<!DOCTYPE html>
<html lang="en" >
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

#btn{
  display:block;
  background:rgba(20,130,34,.6);
  width:300px;
  height:50px;
  border:0px;
  margin:30px auto;
  border-radius:40px;
  color:white;
}
</style>
</head>

<body>
  <?php

  ?>
  <?php while($row=$query->fetch_assoc()){
     $image= $row["team_image"];
     $firstname =$row["firstname"];
     $lastname=$row["lastname"]

    ?>
<div class="div">
<?php
echo "<li>".$firstname."</li>";
echo '<img src="../images/'.$image.'">'
?>
<?php } ?>

</div>
<button id="btn" >BUTTON</button>
<img src="../images/team.jpg">
<script>



</script>
</body>

</html>
