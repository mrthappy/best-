
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
<?php include "userheader.php"?>
<!-- end of the logo Area -->
<?php
if(isset($_SESSION["user"])):
  $userinfor=$_SESSION["user"];
  include "../database/database.php";
  $category="SELECT * FROM category";
  $query =Query($category);

endif;
?>
 <?php while $category =$query->fetch_assoc()){?>
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
let hamburger=document.getElementById("hamburger");
// add a  animation to the hamburger element

hamburger.addEventListener("click",function(){
  let self =this ;
  let respond=false;
  if(!(self.classList.contains("active"))){
    // animattion starts here
      self.classList.add("active");
      respond=true;
  }else{
    self.classList.remove("active");
    respond=false;
  }
});






console.log(hamburger);
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
