<?php
require '../conn/conn.php';
if($_POST['id']){
   $id=$_POST['id'];

   $sql="DELETE FROM `student_record` WHERE `sid`=".$id;

   if ($conn->query($sql) === TRUE) {
    echo "true";
} else {
    echo "Error deleting record: " . $conn->error;
}


}
?>
