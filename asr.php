<?php
require 'includes/conn/conn.php';

$sql="SELECT sid,fname,lname,sgrade,addemail,fpno FROM `student_record`";
$result=$conn->query($sql);


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
        <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

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
                            <h4 class="card-title"> All Student Record's</h4>
                            <h6 class="card-subtitle">This table show recore of all students.</h6>

                            <div class="table-responsive">
                              <table id="data-table" class="table table-bordered">
                                <thead class="thead-default ">
                                  <tr>
                                      <th>Student Id</th>
                                      <th>Name</th>
                                      <th>Grade</th>
                                      <th>Email Address</th>
                                      <th>Father Phone</th>
                                      <th>Operation</th>

                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  if($result->num_rows > 0){
                                     while($row = $result->fetch_assoc()){
                                       $studentid=$row["sid"];
                                       $studentName=$row["fname"].' '.$row["lname"];
                                       $studentGrade=$row["sgrade"];
                                       $studentEmail=$row["addemail"];
                                       $studentFaNum=$row["fpno"];
                                       echo '<tr studentId='.$studentid.'>
                                             <td class="sid" studentId="'.$studentid.'">'.$studentid.'</td>
                                             <td class="sname" studentName="'.$studentName.'"> '.$studentName.'</td>
                                             <td class="sgrade" studentGrade="'.$studentGrade.'">'.$studentGrade.'</td>
                                             <td class="semail" studentEmail="'.$studentEmail.'">'.$studentEmail.'</td>
                                             <td class="sfn" studentFaNum="'.$studentFaNum.'">'.$studentFaNum.'</td>
                                             <td>
                                              <center>
                                              <button class="btn btn-dark btn--raised btn--icon-text update" updateid='.$studentid.' ><i class="zmdi zmdi-triangle-up zmdi-hc-fw"></i> Update Record</button>
                                              <button class="btn btn-danger btn--raised btn--icon-text delete" deleteid='.$studentid.' ><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Delete Record</button>

                                              </center>
                                              </td>
                                       </tr>';
                                     }
                                  }


                                  ?>

                                </tbody>
                              </table>
                            </div>
                        </div>
                </div>
          </div>
        </div>
        <!-- Moadl -->
        <!-- Default -->
                            <div class="modal fade" id="modal-default" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header ">
                                            <h5 class="modal-title pull-left">Update Values</h5>

                                        </div>

                                        <div class="modal-body">
                                          <form>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                   <label>Full Name</label>
                                                   <input type="text" id="ufn" class="form-control " disabled>
                                                   <i class="form-group__bar"></i>
                                                </div>
                                              </div>

                                              <div class="col-md-12">
                                                <div class="form-group">
                                                   <label>Grade</label>
                                                   <input type="text" id="ug" class="form-control ">
                                                   <i class="form-group__bar"></i>
                                                </div>
                                              </div>

                                              <div class="col-md-12">
                                                <div class="form-group">
                                                   <label>Email</label>
                                                   <input type="email" id="ue" class="form-control ">
                                                   <i class="form-group__bar"></i>
                                                </div>
                                              </div>

                                              <div class="col-md-12">
                                                <div class="form-group">
                                                   <label>Father Phone</label>
                                                   <input type="email" id="uf" class="form-control ">
                                                   <i class="form-group__bar"></i>
                                                </div>
                                              </div>


                                            </div>
                                          </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="update_data" class="btn btn-success  ">Save changes</button>
                                            <button type="button"  class="btn btn-dark " data-dismiss="modal">Close</button>
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

      <!-- Vendors: Data tables -->
        <script src="vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="vendors/bower_components/jszip/dist/jszip.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>


      <!-- <script src="data/js/flot-charts/dynamic.js"></script> -->
      <script src="data/js/jqvmap.js"></script>
        <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>

      <!-- App functions and actions -->

      <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>
      <script src="js/app.min.js"></script>
      <script src="js/recordPerform.js"></script>


  </body>
</html>
