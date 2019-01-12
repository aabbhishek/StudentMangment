<?php
session_start();


require 'includes/conn/conn.php';
if($_GET['id']){
  $eid=$_GET['id'];
  $sql_q="SELECT name,email FROM `student_info` WHERE email='".$eid."'";
  $result=$conn->query($sql_q);

  if ($result->num_rows > 0 ) {
      // output data of each row

      while($row = $result->fetch_assoc()) {
        $_SESSION["name"] =$row["name"];
        $_SESSION["email"]=$row["email"];
      }
  }
  else{

  }
}



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

    <body data-ma-theme="green">
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
            <aside class="sidebar">
                <div class="scrollbar-inner">
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="data/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name"><?php echo $_SESSION["name"]; ?></div>
                                <div class="user__email"><?php echo $_SESSION["email"]; ?></div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="navigation__active"><a href="#"><i class="zmdi zmdi-home"></i> Home</a></li>


                        <li><a href="#"><i class="zmdi zmdi-triangle-up zmdi-hc-fw"></i> CLass Toppers</a></li>

                        <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

                        <li><a href="asr.php"><i class="zmdi zmdi-accounts-list zmdi-hc-fw"></i> All Student Record</a></li>

                        <li><a href="addStudent.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Add Student </a></li>


                    </ul>
                </div>
            </aside>



            <section class="content">
                <header class="content__title">
                    <h1>Dashboard</h1>
                    <small>Welcome , Let's work </small>


                </header>

                <div class="row quick-stats">
                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item bg-blue">
                            <div class="quick-stats__info">
                                <h2>700</h2>
                                <small>Total Admission Stat</small>
                            </div>

                            <div class="quick-stats__chart sparkline-bar-stats">140,50,120,120,180,100,200,300</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item bg-amber">
                            <div class="quick-stats__info">
                                <h2>30</h2>
                                <small>Total Faculty</small>
                            </div>

                            <div class="quick-stats__chart sparkline-bar-stats">2,3,1,1,1,4,5,5,3,3,4</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item bg-purple">
                            <div class="quick-stats__info">
                                <h2>&#x20B9; 1,50,000</h2>
                                <small>Total Finance</small>
                            </div>

                            <div class="quick-stats__chart sparkline-bar-stats">4000,5000,10000,30000,60000,4000,20000,30000,40000</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item bg-red">
                            <div class="quick-stats__info">
                                <h2>15</h2>
                                <small>Non-Teaching Staff</small>
                            </div>

                            <div class="quick-stats__chart sparkline-bar-stats">3,2,1,4,6,5,4,3,7</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Max Marks</h4>
                                <h6 class="card-subtitle">Maxium Marks Obtained by Students in Bored 2017 and 2018 <b>X</b> shows number of Marks & <b>Y</b> show Number of students.</h6>

                                <div class="flot-chart flot-curved-line"></div>
                                <div class="flot-chart-legends flot-chart-legends--curved"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Best parforming Classes</h4>
                                <h6 class="card-subtitle">Top 3 classes which Performing Best this year <b>X</b>-Test Number <b>Y</b>-having marks obtained </h6>

                                <div class="flot-chart flot-line"></div>
                                <div class="flot-chart-legends flot-chart-legends--line"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-columns>




                  <div class="calendar-data">
                    <?php include 'includes/data_fetch/calendar.php '; ?>
                  </div>

                    <div class="card allclass-toper">
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
                          require 'includes/data_fetch/topget.php';
                          ?>
                          </tbody>
                      </table>

                      <button onclick=" window.location.href='add_new.php'" class="btn btn-danger btn--icon" style="position:relative;left:90%;"><i class="zmdi zmdi-plus"></i></button>
                      </div>
                    </div>







                </div>

                <footer class="footer hidden-xs-down">
                    <p>© Material Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="#">Homepage</a>

                        <a class="nav-link" href="#">Company</a>

                        <a class="nav-link" href="#">Support</a>

                        <a class="nav-link" href="#">News</a>

                        <a class="nav-link" href="#">Contacts</a>
                    </ul>
                </footer>
            </section>
        </main>

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

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>
