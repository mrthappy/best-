
<?php
include "../database/database.php";
?>

<!DOCTYPE html>
<html lang="en" >
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Project</title>
     <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,400" rel="stylesheet">

    <!--  <link rel="stylesheet"  type="text/css"  href="../stylesheet/newcss.css">-->


     <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="../javascript/java.js"></script>
     <link rel ="stylesheet" href="../stylesheet/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body>
  <section class ="main_header" data-role="header_holder">
    <header class="header">
    <div class ="logo">
      <img src="../images/newlogo-Recovered.png">
    </div>
    <div id="hamburger">
      <span class="burger_icon"></span>
    </div>

    </header>

  </section>
  <div id="welcome_text">
    <h1>We are a small Team obsessed with producing the best models the world has never seen</h2>
  </div>
  <section class="photo_grid">
    <div class="img_holder">
      <img src="../images/model1.jpg">
    </div>
    <div class="img_holder">
      <img src="../images/model13.jpg">
    </div>
    <div class="img_holder">
      <img src="../images/model13.jpg">
    </div>
    <div class="img_holder">
      <img src="../images/model13.jpg">
    </div><div class="img_holder">
      <img src="../images/model12.jpg">
    </div>
    <div class="img_holder">
      <img src="../images/model13.jpg">
    </div>

  </section>
  <section class="connection" data-role="contact_details">
    <form id ="form">
      <h5>Make A Connect?? </h5>
      <input type="submit" name="submit" value="Connect"class="connect">


    </form>
  </section>

  <section class="contactform">
    <form method="POST" action="">
      <form class="login_form"  name="loginForm" action="contact.php" METHOD="POST" ng-controller="controller">

        <div class="div">
            <i class="far fa-envelope"></i>
            <input type="text" name="firstname"  id="email" Placeholder="Firstname" class="input">

        </div>
        <div class="div">
            <i class="far fa-envelope"></i>
            <input type="text" name="lastname"  id="email" Placeholder="Lirstname" class="input">

        </div>
          <div class="div">
              <i class="far fa-envelope"></i>
              <input type="email" name="email"  id="email" Placeholder="E-mail" class="input">

          </div>

          <div class="div">
              <i class="fas fa-unlock"></i>
              <input type="password" name="password" id="password" placeholder="Password" class="input">

          </div>

          <div class="div">
              <input type="submit" value="LOGIN" class="submitbtn"name="submit">
          </div>
          <span class="register_span">Do You have an account?<a href="login.php?login=register"class="register">Register</a></span>
          <span class="password_reset"><a href="login.php?login=password" class="register">Forgot Password</a></span>


      </form>
  </section>
  <section class="footerdiv">

  <section class="footer">


  <section class="footer">

    <?php include "footer.php";?>
  </section>

</body>
</html>
