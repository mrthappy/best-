
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
  <?php
  if(isset($_SESSION["user"]) && isset($_GET["id"])){

    $session=$_SESSION["user"];
    $id=$_GET["id"];
    // get the category from the database
    include "../database/database.php";
    $result=find_all("categorylist");





  }



  ?>
<?php include "userheader.php"?>
<!-- end of the logo Area -->
<?php while($row =$result->fetch_assoc()){?>
<section class="news">
<?php
$output="";
$output.= '<a  class="anchor"href="page.php?id='.$row["category_id"].'"> ';
$output.= '<article class="article"> ';
$output.= '  <div class="articlepage"> ';
$output.='  <div class="articlepage"> ';
$output.=' <img src ="../images/'.$row["category_img"].'"> ';
$output.='  <div class="headingdiv"> ';
$output.=' <span class="headingspan"> ';
$output.= '<h1 class="heading">' .$row["category_header"]. '</h1> ';
$output.= ' <p class="heading-para">' .$row["category_date"]. '</p> ';
$output.= ' </span> ';
$output.=' <div> ';
$output.= '</article> ';
$output.='</a> ';

echo $output;





?>


<?php }?>


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

let anchor=document.querySelector(".anchor");
anchor.addEventListener("click",function(event){
  event.preventDefault();
  let self =this ;
  let href =self.getAttribute("href");
   return fetch(href).then(function(data){
    return data.json();
  }).then(function(result){
    console.log(result);
  });

});

});
</script>

</body>
</html>
