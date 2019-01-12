<?php
require 'includes/conn/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php
          include 'includes/vendor.php';
          // <!-- App styles -->
          include 'includes/app-min.php';
        ?>


    </head>

    <body data-ma-theme="green" style="overflow-x:hidden;">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

          <?php
          include 'includes/header.php';
          ?>


          <div class="main" style="position:relative;top:130px;left:1%;">
            <div class="row col-md-12">
              <div class="col-md-4">

                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title">Add Topper's</h4>
                              <h6 class="card-subtitle">Add Name,Section,grade and GPA of toppers. </h6>

                              <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" id="name_top" class="form-control form-control-lg" placeholder="Petter Parker">
                                        <i class="form-group__bar"></i>
                             </div>

                             <div class="form-group">
                                       <label>Grade</label>
                                       <input type="text" id="grade_top" class="form-control form-control-lg" placeholder="12">
                                       <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                      <label>Section</label>
                                      <input type="text" id="sec_top" class="form-control form-control-lg" placeholder="A">
                                      <i class="form-group__bar"></i>
                           </div>
                           <div class="form-group">
                                     <label>GPA</label>
                                     <input type="text" id="gpa_top" class="form-control form-control-lg" placeholder="9.5">
                                     <i class="form-group__bar"></i>
                          </div>

                          <button type="button" id="fill_top" class="btn btn-success btn-block btn-lg">DONE <i class="zmdi zmdi-arrow-forward"></i> </button>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-8">
                          <div class="card data-man">
                            <div class="card-body">
                                <h4 class="card-title"> Class Topers</h4>
                                <h6 class="card-subtitle">Name, Class , Section and GPA of Topper's.</h6>
                                <table class="table mb-3">
                                <thead  class="thead-dark">
                                <tr>
                                    <th>Grade</th>
                                    <th>Name</th>
                                    <th>Section</th>
                                    <th>GPA</th>
                                </tr>

                                </thead>
                                <tbody>

                                <?php
                                $sql_data="SELECT * FROM `toppers-awd`";
                                $result_two = $conn->query($sql_data);

                                if ($result_two->num_rows > 0 && $result_two->num_rows < 10) {
                                    // output data of each row

                                    while($row = $result_two->fetch_assoc()) {
                                      echo '<tr>
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
                                </tbody>
                            </table>


                            </div>
                          </div>
                      </div>

            </div>
          </div>


        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <script src="vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
        <script src="vendors/jquery.sparkline/jquery.sparkline.min.js"></script>
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Charts and maps-->
        <script src="data/js/flot-charts/curved-line.js"></script>
        <!-- <script src="data/js/flot-charts/dynamic.js"></script> -->
        <script src="data/js/flot-charts/line.js"></script>
        <script src="data/js/flot-charts/chart-tooltips.js"></script>
        <script src="data/js/other-charts.js"></script>
        <script src="data/js/jqvmap.js"></script>
          <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
            <script src="js/myscript.js"></script>
    </body>
</html>
