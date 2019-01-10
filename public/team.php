
 <!DOCTYPE html>
 <html lang="en" >
 <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Project</title>
      <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">

     <!--  <link rel="stylesheet"  type="text/css"  href="../stylesheet/newcss.css">-->

     <script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
 crossorigin="anonymous"></script>
      <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="../stylesheet/team.css">
        <link rel="stylesheet" href="../stylesheet/style.css">


 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
 </head>
 <body>
   <?php include "pageheader.php";?>


   <?php

    if(isset($_GET["team"])){
      include "../database/database.php";

      $team =htmlspecialchars(cleanser($_GET["team"]));
      $sql ="SELECT * FROM team  ";
      $result =Query($sql);





    }
   ?>
   <section class="wrappers">
     <?php
     while ($row =$result->fetch_assoc()){


     ?>
     <section class="fotos">

       <?php

       echo "<div class=\"figure\">";
       echo '<img src="../images/'.$row["team_image"].'">';
       echo "<p>" . $row["firstname"]. "</p>";
       echo "<p>" . "Lead Designer". "</p>";
       echo "</div>";
       ?>

     </section>
 <?php }?>
   </section>


<!--
   <section class="wrappers">

     <section class="fotos">
       <div class="figure">
      <img src="../images/team3.jpg">
        <p>John</p>
        <p>Lead Dsigner</p>

    </div>

    <div class="figure">
      <img src="../images/team2.jpg">
      <p>John</p>
      <p>Lead Dsigner</p>

  </div>

  <div class="figure">
    <img src="../images/team3.jpg">
    <p>John</p>
    <p>Lead Dsigner</p>

</div>

<div class="figure">
  <img src="../images/team.jpg">
  <p>John</p>
  <p>Lead Dsigner</p>

</div>
<div class="figure">
  <img src="../images/team3.jpg">
  <p>John</p>
  <p>Lead Dsigner</p>
</div>

<div class="figure">
  <img src="../images/team4.jpg">
  <p>John</p>
  <p>Lead Dsigner</p>

</div>

     </section>

   </section>
-->
   <?php include "footer.php";?>

 </body>
 </html>
