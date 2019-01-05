<?php
// session_start();
// if(isset($_SESSION["user"])):
//
//   header("location:trial.php");
//
// endif;
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>

       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>ostudio</title>
	     <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
       <link rel="stylesheet" href="../stylesheet/loginstyle.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

       <script src="../javascript/login.js"></script>
      <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
  <div id ="cover">
  <header class="logo_header">
    <div class="logo_image"> </div>
  </header><!-- end of the logo Area -->
</div>
  <div class="view">


<div class="page_holder" ng-app="myApp">
<div  class="result"></div>
  <form  id="register" action="process.php" method="POST">

    <div class="div">
      <i class="fas fa-user-circle"></i>
        <input type="text" name="firstname"  id="email" Placeholder="Firstname" class="input">

    </div>
    <div class="div">
        <i class="fas fa-user-circle"></i>
        <input type="text" name="lastname"   Placeholder="Lastname" class="input">

    </div>

      <div class="div">
          <i class="far fa-envelope"></i>
          <input type="email" name="email"   Placeholder="E-mail" class="input">

      </div>
      <div class="div">
          <i class="fas fa-unlock"></i>
          <input type="password" name="pass" Placeholder="Password" class="input"  >

      </div>


    <div class="div">
        <input type="submit" value="REGISTER" class="submitbtn"name="Register">
    </div>
  </form>
  <span class="register_span"><a href="login.php?login=login" class="register">Already Memeber</a></span>



</div>

</div>

</body>
