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
