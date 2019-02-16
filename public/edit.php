<?php
session_start();
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
        <link rel ="stylesheet" href="../stylesheet/edit.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="../javascript/edit.js" async ></script>
      <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
      <script src="../javascript/edit2.js" asyn></script>

</head>
<body>


           <?php include "userheader.php"?>
           <!-- end of the header here -->
           <section class="Textintro">
              <div class="first-panel margin">
                <div class="into">
                  <p class="para">Profile</p>
                  <span class="fonticons"></span>
                </div>
                <div class="panel_content">
                  <?php
                  if(isset($_SESSION["user"]) && isset($_GET["id"])){
                    include "../database/database.php";



                    $user=$_SESSION["user"];
                    $id=$user["memberid"];
                    $userinfo ="SELECT * FROM registration WHERE memberid='$id'";
                    $records =Query($userinfo);
                    $result =$records->fetch_assoc();





                  }
                  ?>


                  <form method="POST" action="imageloader.php" enctype="multipart/form-data" class="form">
                    <input type ="hidden" name="id" value =<?php echo $result["memberid"];?> class="input">
                    <div class="labelinput">
                    <label for="fileimage" class="label">
                      <span class="icons"></span>


                      <span class="paratext"><p>Enter your Upload:</p></span>
                    </label>
                       <input type="file" id="fileimage" class="input" name="fileimage">
                    </div>
                    <div class="inputholder inputdiv">
                      <input type ="text" class="input" placeholder="firstname" name="firstname"value=<?php echo $result["firstname"];?>>
                      <input type="text" class="input" placeholder="lastname" name="lastname"value=<?php echo $result["lastname"];?>>
                    </div>
                    <div class="inputholder inputdiv">
                      <input type="email" class="input" placeholder="email-address" name="email" value=<?php echo $result["email"];?>>
                    </div>

                    <div class="inputsubmit">
                      <button  class="btn" name="submit">submit</button>
                    </div>
                  </form>
                </div>


                </div>
                <div class="first-panel">
                  <div class="into">
                    <p class="para">Password</p>
                    <span class="fonticons"></span>
                  </div>
                  <div class="panel_content">
                    <form method="POST" action="#" >
                      <div class="inputholder style">
                        <input type="password" class="passwordinput" placeholder="Current Password">
                          <input type="password" class="passwordinput" placeholder="New Password">
                            <input type="password" class="passwordinput" placeholder="Confirm New Password">
                          </div>
                          <div class="inputsubmit">
                            <input type="submit" class="btn">
                          </div>

                           </form>

                      </div>













https://www.youtube.com/watch?v=_Hp_dI0DzY4

           </section>









<?php include "footer.php";?>

         </body>


         </html>
