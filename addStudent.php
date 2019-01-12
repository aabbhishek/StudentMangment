<?php ?>

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
        <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">
        <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">

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
            <div class="card col-md-12">
                      <div class="card-body">
                          <h4 class="card-title">ADD NEW STUDENT</h4>
                          <h6 class="card-subtitle">Adding of new student. Fill all data to take addmision.</h6>

                          <form>
                              <div class="form-row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>First Name</label>
                                      <input type="text" id="fname" class="form-control" placeholder="Peter">
                                      <i class="form-group__bar"></i>
                                  </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Last Name</label>
                                      <input type="text" id="lname" class="form-control" placeholder="Parker">
                                      <i class="form-group__bar"></i>
                                  </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                <label>Email address</label>
                                <input type="email" id="addemail" class="form-control" placeholder="peter@parker@.com">
                                <i class="form-group__bar"></i>
                            </div>

                              <div class="form-row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Father Name</label>
                                      <input type="text" id="faname" class="form-control" placeholder="James Parker">
                                      <i class="form-group__bar"></i>
                                  </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Mother Name</label>
                                      <input type="text" id="maname" class="form-control" placeholder="Eva Parker">
                                      <i class="form-group__bar"></i>
                                  </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                <label>Address</label>
                                <input type="text" id="address" class="form-control" placeholder="XYZ Street, Jalander, Punjab, India">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-row">
                              <div class="col-md-6">
                                <label>Student Phone Number</label>
                                <input type="text" id="spno" class="form-control input-mask" data-mask="000-00-0000000" placeholder="000-00-0000000">
                                <i class="form-group__bar"></i>
                              </div>

                              <div class="col-md-6">
                                <label>Father Phone Number</label>
                                <input type="text" id="fpno" class="form-control input-mask" data-mask="000-00-0000000" placeholder="000-00-0000000">
                                <i class="form-group__bar"></i>
                              </div>
                             </div>

                             <br>
                             <div class="form-row">
                               <div class="col-md-6">
                                 <label>Date Of Birth</label>
                                 <input type="text" id="dob" class="form-control input-mask" data-mask="00/00/0000" placeholder="10/11/12">
                                 <i class="form-group__bar"></i>
                               </div>

                               <div class="col-md-6">
                                 <label>Grade</label>
                                 <input type="text" id="sgrade" class="form-control input-mask" data-mask="00" placeholder="10">
                                 <i class="form-group__bar"></i>
                               </div>


                               <div class="form-group" style="position:relative;top:15px;left:2px;">
                                    <div class="toggle-switch toggle-switch--green">
                                        <input type="checkbox" id="termCheker" class="toggle-switch__checkbox">
                                        <i class="toggle-switch__helper"></i>
                                    </div>
                                </div>
                                <h6 style="position:relative;top:17px;left:12px;">Agreed with terms. </h6>
                              </div>




                              <button type="button" id="ad_student" class="btn btn-success btn-block btn-lg" disabled >ADD STUDENT </button>
                          </form>
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

        <script src="vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>



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
      <script src="js/studentAdd.js"></script>



  </body>
</html>
