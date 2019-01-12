<?php
require '../conn/conn.php';
if($_POST['id'] && $_POST['grade'] && $_POST['email'] && $_POST['fnumer']){
   $id=$_POST['id'];
   $grade=$_POST['grade'];
   $email=$_POST['email'];
   $fnum=$_POST['fnumer'];

   $sql="UPDATE `student_record` SET addemail='".$email."',fpno='".$fnum."',sgrade=".$grade." WHERE sid=".$id;

   if ($conn->query($sql) === TRUE) {
    echo "true";
  } else {
     echo "Error updating record: " . $conn->error;
}
}

?>
