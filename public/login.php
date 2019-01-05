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
<p class="success"style="background:lightgreen;color:white;text-align:center;"></p>
<form class="login_form"  name="loginForm" action="test.php" METHOD="POST" ng-controller="controller">

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
</body>
</html>
