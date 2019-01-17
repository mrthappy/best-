<?php
session_start();
if(isset($_SESSION["user"])){
  include "user.php";



}else{
  session_destroy();
}


 ?>
<!doctype html>
<body>
</body>
</html>
