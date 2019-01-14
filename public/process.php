
<?php
session_start();
header("Content-Type: application/json");
include "../database/database.php";

if($_SERVER['REQUEST_METHOD']==="POST"){
$firstname=htmlspecialchars(trim(cleanser($_POST["firstname"])));
  $lastname=trim(cleanser($_POST["lastname"]));
  $email=cleanser(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL));
  $password=cleanser($_POST["pass"]);
$error=array();
  $data=array();

  if(empty($firstname)):
    $error["firstname"]="firstname is needed";
  endif;
  if(empty($lastname)):
    $error["lastname"]="lastname is needed";
  endif;
  if(empty($email)):
    $error["email"]="email is needed";
  endif;
    if(empty($password)):
      $error["pass"]="pasword is needed";
    endif;


  if(!(empty($firstname))&& !(empty($lastname))  && !(empty($email)) &&!empty($password)) {
      $password=password_hash($password,PASSWORD_BCRYPT);
        $checkemail="select * from registration where email='$email' limit 1";
          $emailquery=Query($checkemail);
            $numrows=$emailquery->num_rows;
            if($numrows > 0){
              $error["email"]="user alredy exist";
              $data =array("error"=>$error);
              echo json_encode($data);
              
            }else{
              $query="insert into registration(firstname,lastname,password,email,date)values('$firstname','$lastname','$password','$email',NOW())";
              $request=Query($query);
              $result="select * from registration where email='$email'limit 1";
              $resultfound=Query($result);
              while($row=$resultfound->fetch_assoc()){
                   $_SESSION["user"]=$row;

                   $data=array("user"=>"thanks for joining");
                   echo json_encode($data);
              }

            }

   }else {
          $data =array("error"=>$error);
      echo json_encode($data );
    }
  }
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
      // $fetch =$resultfound->fetch_assoc();2
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
