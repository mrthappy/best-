<!DOCTYPE html>
<html lang="en" >
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
}
.contact1{
  height:100vh;
  width:100%;
  display:flex;
}
.divider{
  display:flex;
  background:rgba(10,120,34,.8);
  flex-direction:column;
  justify-content:center;
  align-items:center;
  color:white;
  flex:25%;
}
.divider h3{
  font-size:2.3em;
  margin-bottom:1rem;
}
.divider a {
  display:block;
  color:white;
  text-decoration:none;
}

.area{
  display:block;
  border-radius:6px;

  height:100px;
  width:100%;
}
.contactf{

  flex:48%;
  display:flex;
  justify-content:center;
  align-items:center;
}
.contactf h1{
  font-size:1rem;
  margin-bottom:20px;

}
.contactf > form {
  display:block;
  width:50%;
}
.inputtags{
  display:block;
  background:#234440;
  color:white;
  border:1px solid transparent;
  outline:none;
  border-radius:8px ;
  width:100%;
  height:100px;
  text-align:center;
  margin-top:20px;
  text-transform:uppercase;
}
.inputtag{
  display:block;
  margin-bottom:20px;
  border-color: #bdc7d8;
  border:1px solid transparent;
  outline:none;
  border-radius:5px;
  padding: 26px 16px;
border: 1px solid #d3d3d3;
height:40px;
width:100%;



}
.close{

  color:#1fd3c6;
  font-size:3rem;
  position:absolute;
  right:50px;
  top:20px;
  cursor:pointer;
}

</style>
</head>

<body>
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
          <input type ="textarea" name="textarea" class="area" placeholder="Message">
            <input type ="submit" name="submit" class="inputtags" value="submit">

    </form>
  </div>
</section>
<script>


</script>
</body>

</html>
