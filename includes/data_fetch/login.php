<?php
require '../conn/conn.php';

if($_POST['email'] && $_POST['pass']){

  $email=$_POST['email'];
  $pass=$_POST['pass'];

  $sql="select email, password from `student_info` where email='".$email."' and password='".$pass."'";
  $result=$conn->query($sql);

  if ($result->num_rows > 0 ) {

    echo "true";
    
 }
 else{
   echo "false";
 }
}

?>
