<?php
$sql_data="SELECT * FROM `toppers-awd`";
$result_two = $conn->query($sql_data);

if ($result_two->num_rows > 0 ) {
    // output data of each row

    while($row = $result_two->fetch_assoc()) {
      echo '<tr class="replace">
            <th scope="row">'.$row["grade"].'</th>
            <td>'.$row["name"].'</td>
            <td>'.$row["section"].'</td>
            <td>'.$row["GPA"].'</td>
           </tr>';
    }

    echo '  <thead  class="thead-dark">
            <tr>
              <th colspan="4"> <center> <a href="add_new.php" style="color:#fff;text-decoration:underlined;">Show More</a> </center> </th>
            </tr>
          </thead>';

} else {

  echo '<tr>
        <th scope="row" colspan="4"> <center> <b>No Data To Display</b> <center> </th>
 </tr>';

}
$conn->close();

?>
