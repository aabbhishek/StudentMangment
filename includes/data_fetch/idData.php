<?php
require '../conn/conn.php';
if($_POST['sid']){
   $id=$_POST['sid'];

   $sql="SELECT fname,lname,sgrade,addemail,fpno FROM `student_record` WHERE `sid`=".$id;
   $result=$conn->query($sql);
   if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        $studentName=$row["fname"].' '.$row["lname"];
        $studentGrade=$row["sgrade"];
        $studentEmail=$row["addemail"];
        $studentFaNum=$row["fpno"];

        echo ' {"name":"'.$studentName.'","grade":"'.$studentGrade.'","email":"'.$studentEmail.'","fnum":"'.$studentFaNum.'"}';
           }
      }

}
?>
