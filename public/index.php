
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
    <section class="contact1">
    <div class="divider">
      <h3>BEST ADVICE</h3>
      <a href="team.php">Meet our Team </a>
    </div>
    <div class="contactf">


    <form name="contactform" class="contactform"  method="POST" action="contact.php">
      <span class="close">X</span>

      <h1>Write Us An Email</h1>
      <div class="messagediv"></div>
      <input type ="text" name="firstname" class="inputtag" placeholder="firstname">
        <input type ="text" name="lastname" class="inputtag" placeholder="lastname">
          <input type ="text" name="email" class="inputtag" placeholder="email">
            <input type ="textarea" name="message" class="area" placeholder="Message">
              <input type ="submit" name="submit" class="inputtags" value="submit">

      </form>
    </div>
  </section>
  <script>
  let closebtn=document.querySelector(".close");
  closebtn.addEventListener("click",CloseMenu);
  function CloseMenu(){
  console.log("this is the best");
  }

  </script>



  </section>
  <form id ="form" method ="POST">
    <h5>Make A Connect?? </h5>
    <input type="submit" name="submit" value="Connect"class="connect">




  </form>

  <section class="contactform">

  </section>



  <section class="footer">

    <?php include "footer.php";?>
  </section>

</body>
</html>
