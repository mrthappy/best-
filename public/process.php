
<?php
session_start();
include "../database/database.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
  $firstname=htmlspecialchars(trim(cleanser($_POST["firstname"])));
  $lastname=trim(cleanser($_POST["lastname"]));
  $email=cleanser(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL));
  $password=cleanser($_POST["pass"]);
  $response=array();
  $data=array();
  if(empty($firstname)):
    $response["firstname"]="firstname is needed";
  endif;
  if(empty($lastname)):
    $response["lastname"]="lastname is needed";
  endif;
  if(empty($email)):
    $response["email"]="email is needed";
  endif;
    if(empty($password)):
      $response["pass"]="pasword is needed";
    endif;
  if(!(empty($firstname))&& !(empty($lastname)) && !(empty($password)) && !(empty($email)) ) {
    $password=password_hash($password,PASSWORD_BCRYPT);
    $checkemail="select email from registration where email='$email' limit 1";
    $emailquery=$database->query($checkemail);
    $numrows=$emailquery->num_rows;
    if($numrows >0){
     $response["email"]="User with this email aleady exist";
     $errors=array("email"=>$response);
     echo json_encode($errors) ;
     exit;
    }else{
      $query="insert into registration(firstname,lastname,password,email,date)values('$firstname','$lastname','$password','$email',NOW())";
      $request=$database->query($query);
      $result="select * from registration where email='$email'limit 1";
      $resultfound=$database->query($result);
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
  }else{
         $errors=array("errors"=>$response);
       echo json_encode($errors) ;
       exit;
  }
}
?>
