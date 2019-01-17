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
  <div id ="cover">
  <header class="logo_header">
    <div class="logo_image"> </div>
    <div  class="user_div">
      <span class="avatar_parent"><i class="fas fa-user"></i></span>
      <nav class="user-details">
      <ul>
        <li><a href ="#" class="listanchor">EDIT PROFILE</a></li>
          <li><a href ="#" class="listanchor">Change Password</a></li>
            <li><a href ="#" class="listanchor">Logout</a></li>

      </ul>
    </nav>



    </div>
    <div id="hamburger">
      <span class="burger_icon"></span>
    </div>
  </header>
</div>
<!-- end of the logo Area -->
<a href="files.php?id=dkd" class="a">url</a>
<section class="news">

  <article class="article">
    <img src ="../images/user.jpeg">
   <h1>Header for the Article</h1>
  </article>

  <article class="article">
    <img src ="../images/user2.jpeg">
   <h1>Header for the Article</h1>
  </article>
  <article class="article">
    <img src ="../images/user1.jpeg">
   <h1>Header for the Article</h1>
  </article>
</section>
<script>
let anchors =document.querySelector(".a");
console.log(anchors);
anchors.addEventListener("click",function (event){
event.preventDefault();
let href =this.getAttribute("href");
let url =this.getAttribute("url");
let target =(event.target);
fetch(target).
then(function(response){
  return response.text();
}).then(function(data){
  console.log(data);
})

});
</script>

</body>
</html>
