<?php
 include "../database/database.php";
if(isset($_GET["pragment"])):

$query ="SELECT * FROM team";
$result =Query($query);
$records =$result->fetch_assoc();
echo json_encode($records);

else:




endif;







?>
