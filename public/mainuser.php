<?php
include "../config/connection.php";
 $array=$_SESSION["user"]["firstname"];
$s=str_split($array);
$firstletter=reset($s);
 ?>


<!DOCTYPE html>
<html lang="en" >

<head>

       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>ostudio</title>
	     <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
       <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
       <link rel="stylesheet" href="../stylesheet/loginstyle.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
       <script src="../javascript/login.js"></script>

</head>

<body ng-app="app">
  <div id ="cover">
  <header class="logo_header sec">
    <div class="logo_image"> </div>
    <div id="avatar">
      <i class="far fa-user "></i>

      <div id="username" class="margin"style="margin-left:10px;"><p class="firstname"><?php echo strtoupper($firstletter);?></p></div>
      <p style="margin-right:10px;"><?php echo strtoupper($_SESSION["user"]["firstname"]);?></p>
      <li class=""><i class="fas fa-angle-down"></i>


    </div>

  </header><!-- end of the logo Area -->
  <div class="menu_container">
  <nav class="nav_bar">
    <ul class="nav_menu">
          <li class="list"><a href="#">Edit</a></li>
            <li class="list"><a href="#">Logout</a></li>
              <li class="list"><a href="#">logout</a></li>

    </ul>
  </nav>
</div>

</div>
<?php
if(isset($_GET["mainuser"])):
  $page_id=$_GET["mainuser"];
  include "../config/connection.php";
// make a query to the database
endif;
$page="SELECT * FROM pages";
$result=$database->query($page);
 ?>
 <div class="image_pages" ng-controller="controller">
   <?php
   switch($page_id){
     case "mainuser":
     include "page.php";
     break;
     case "page1":
     include "page1.php";
     default :"mainuser.php";
     break;
   }
?>
 </div>

<?php include "footer.php";?>

</body>
</html>
