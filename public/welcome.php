<?php
session_start();
if(isset($_SESSION["user"])&& isset($_GET["id"])){
    $id=$_GET["id"];
  include "user.php";




}else{
  session_destroy();
}


 ?>
<!doctype html>
<body>
</body>
</html>
