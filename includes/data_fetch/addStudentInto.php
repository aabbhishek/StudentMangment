<?php
require '../conn/conn.php';

if($_POST['fn'] && $_POST['lname'] && $_POST['addemail'] &&
   $_POST['faname'] && $_POST['maname'] && $_POST['address'] &&
   $_POST['spno'] && $_POST['fpno'] && $_POST['dob'] &&
   $_POST['sgrade'] ){

     $fname=$_POST['fn'];
     $lname=$_POST['lname'];
     $addemail=$_POST['addemail'];
     $faname=$_POST['faname'];
     $maname=$_POST['maname'];
     $address=$_POST['address'];
     $spno=$_POST['spno'];
     $fpno=$_POST['fpno'];
     $dob=$_POST['dob'];
     $sgrade=$_POST['sgrade'];

      // $sql="INSERT INTO `student_record` (fname) VALUES('".$fname."')";
     $sql="INSERT INTO `student_record`(fname,lname,addemail,faname,maname,address,spno,fpno,dob,sgrade) VALUES('".$fname."','".$lname."','".$addemail."','".$faname."','".$maname."','".$address."','".$spno."','".$fpno."','".$dob."','".$sgrade."')";

     if($conn->query($sql) === true){
       echo "true";
     }
     else{
      echo "false";
    }
}
  else{
      echo "false";
  }

?>
