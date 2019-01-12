<?php
  require '../conn/conn.php';

  if($_POST['tname'] && $_POST['tgrade']
      && $_POST['tsec'] && $_POST['tgpa']){

        $name=$_POST['tname'];
        $grade=$_POST['tgrade'];
        $tsec=$_POST['tsec'];
        $tgpa=$_POST['tgpa'];

        $sql="INSERT INTO `toppers-awd` (`grade`, `name`, `section`, `GPA`) VALUES('".$grade."','".$name."','".$tsec."','".$tgpa."')";
        if($conn->query($sql) === true){
          echo "true";
        }
        else{
          echo "false";
        }
      }
?>
