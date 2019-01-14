
<?php
session_start();
header("Content-Type: application/json");
include "../database/database.php";

$firstaname =cleanser(savehtml($_POST["firstname"]));
$lastname=cleanser(savehtml($_POST["lastname"]));
$email=cleanser(savehtml(filter_var($_POST["email"],FILTER_VALIDATE_EMAI)));
$password=savehtml(cleanser($_POST["password"]));

echo json_encode($_POST);

  /*

  if(!(empty($firstname))&& !(empty($lastname)) && !(empty($password)) && !(empty($email)) ) {
    $password=password_hash($password,PASSWORD_BCRYPT);
    $checkemail="select email from registration where email='$email' limit 1";
    $emailquery=Query($checkemail);
    $numrows=$emailquery->num_rows;
    if($numrows >0){
     $response["email"]="User with this email aleady exist";
     $error=array("errors"=>$response);
     echo json_encode($error) ;

    }else{
      $query="insert into registration(firstname,lastname,password,email,date)values('$firstname','$lastname','$password','$email',NOW())";
      $request=Query($query);
      $result="select * from registration where email='$email'limit 1";
      $resultfound=Query($result);
      while($row=$resultfound->fetch_assoc()){
          $session;
           $_SESSION["user"]=$row;
           $session= $_SESSION["user"];
           $data=array("user"=>$session);
           echo json_encode($data);
      }
      // $fetch =$resultfound->fetch_assoc();
      // $data =array("user"=>$fetch);
      // echo json_encode($data);
    }
  }

  else {
        echo json_encode($error);
       exit;
  }
  */

?>
