
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

    }
   ?>
   <section class="wrappers">
    <?php

   switch($team){
     case 1:
     include "tes.php";
     break;
     case  2:
     include "tes.php";
     break;
     case  3:
     include "tes.php";
     break;

     case  4:
     include "tes.php";
     break;
     case  5:
     include "tes.php";
     break;
     case  6:
     include "tes.php";
     break;
     default:
     include "member.php";


   }




    ?>


     </section>

   </section>

   <div class="div">
   </div>




   <?php include "footer.php";?>


 </body>
 <script>

 // get the positon and animate it accordingly ;
 window.addEventListener("load",function(){
   setTimeout(function(){
      let image=document.querySelector(".team_image");
      image.classList.add("transition");
   },40);
 });





 </script>

 </html>
