<?php
  include "../database/database.php";
if(isset($_GET["id"])){

  $id =htmlspecialchars(htmlentities(cleanser($_GET["id"])));
  $page = find_page_by_id($id);


}


 ?>
 <!DOCTYPE html>
 <html lang="en" >
 <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ostudio</title>
 	     <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel ="stylesheet" href="../stylesheet/user.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


       <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
 </head>
 <body>
   <?php while($row=$page->fetch_assoc()){?>
   <section class="page_wrapper">
     <div class="page_div page_center">
       <span class="header">
         <h1><?php echo $row["page_author"];?></h1>
       </span>
     </div>
     <?php
   }
      ?>
   </section>
 </body>
 </html>
