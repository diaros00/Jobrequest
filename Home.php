<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Job Request</title>
   <style>
      form {
         margin: 20px 0;
      }

      form input,
      button {
         padding: 5px;
      }



      div.dt-button-collection {
         width: 400px;
         height: auto !important;

      }

      div.dt-button-collection button.dt-button {
         display: inline-block;
         width: 32%;
      }

      div.dt-button-collection button.buttons-colvis {
         display: inline-block;
         width: 49%;
      }

      div.dt-button-collection h3 {
         margin-top: 5px;
         margin-bottom: 5px;

         border-bottom: 1px solid black;
         font-size: 1em;
         color: black !important;
      }

      div.dt-button-collection h3.not-top-heading {
         margin-top: 10px;
      }

      .dt-button {
         border: none !important;
         outline: none !important;
         padding-left: 18px !important;
         -webkit-border-radius: 3px !important;
         -moz-border-radius: 3px !important;
         border-radius: 3px !important;
         height: 40px !important;
         background: #444 !important;
         display: -webkit-box !important;
         display: -webkit-flex !important;
         display: -moz-box !important;
         display: -ms-flexbox !important;
         display: flex !important;
         -webkit-box-align: center !important;
         -webkit-align-items: center !important;
         -moz-box-align: center !important;
         -ms-flex-align: center !important;
         align-items: center !important;
         color: #fff !important;
         font-size: 14px !important;

         border-color: #fff transparent transparent transparent;
      }

      .dt-button-collection {

         display: block;
         height: 450px !important;


      }

      #loader {
         position: fixed;
         display: flex;
         justify-content: center;
         align-items: center;
         width: 100%;
         height: 100%;
         top: 0;
         left: 0;
         opacity: 0.7;
         background-color: white;
         z-index: 99;
      }

      #loader-image {
         z-index: 100;
         width: 250px;
         height: 250px;
      }

      @-webkit-keyframes spin {
         0% {
            -webkit-transform: rotate(0deg);
         }

         100% {
            -webkit-transform: rotate(360deg);
         }
      }

      @keyframes spin {
         0% {
            transform: rotate(0deg);
         }

         100% {
            transform: rotate(360deg);
         }
      }

      /* Add animation to "page content" */
      .animate-bottom {
         position: relative;
         -webkit-animation-name: animatebottom;
         -webkit-animation-duration: 1s;
         animation-name: animatebottom;
         animation-duration: 1s
      }

      @-webkit-keyframes animatebottom {
         from {
            bottom: -100px;
            opacity: 0
         }

         to {
            bottom: 0px;
            opacity: 1
         }
      }

      @keyframes animatebottom {
         from {
            bottom: -100px;
            opacity: 0
         }

         to {
            bottom: 0;
            opacity: 1
         }
      }

      #myDiv {
         display: none;

      }
   </style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

   <script src="js/jquery-3.5.1.min.js"></script>

   <script type="text/javascript" charset="utf8" src="js/jquery-3.5.1.js"></script>
   <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/dataTables.buttons.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/jszip.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/pdfmake.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/vfs_fonts.js"></script>
   <script type="text/javascript" charset="utf8" src="js/buttons.html5.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/buttons.print.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/dataTables.rowGroup.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/buttons.colVis.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="css/rowGroup.dataTables.min.css">



</head>

<body>

</body>

</html>











<?php
ini_set('session.gc_maxlifetime', 1000);
error_reporting(~E_NOTICE);
session_start();

if ($_SESSION["Username"] == "") {
   echo "<script type=\"text/javascript\">alert(\"กรุณาเข้าสู่ระบบ\");</script>";
   echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
   exit();
}

$Username = $_SESSION["Username"];

$DepartmentCode = $_SESSION["DepartmentCode"];

include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">


<head>
   <!-- Required meta tags-->
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="au theme template">
   <meta name="author" content="Hau Nguyen">
   <meta name="keywords" content="au theme template">




   <!-- Title Page-->
   <title>Health Condition</title>

   <!-- Fontfaces CSS-->

   <link href="css/font-face.css" rel="stylesheet" media="all">
   <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
   <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

   <!-- Bootstrap CSS-->
   <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

   <!-- Vendor CSS-->
   <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
   <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
   <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
   <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
   <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
   <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
   <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

   <!-- Main CSS-->
   <link href="css/theme.css" rel="stylesheet" media="all">


</head>

<body>
   <!-- <body class="animsition"> -->

   <!-- <body onload="myFunction()" style="margin:0;"> -->

   <div class="page-wrapper">

      <!-- HEADER MOBILE-->
      <?php include("sidebar.php"); ?>
      <script>
         $('#HomeNav').addClass('active has-sub');
         $("#HomeNavA").attr("href", "#");
      </script>
      <!-- <header class="header-mobile d-block d-lg-none">
         <div class="header-mobile__bar">
            <div class="container-fluid">
               <div class="header-mobile-inner">
                  <a class="logo" href="index.html">
                     <h1>Job Request</h1>
                  </a>
                  <button class="hamburger hamburger--slider" type="button">
                     <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                     </span>
                  </button>
               </div>
            </div>
         </div>
         <nav class="navbar-mobile">
            <div class="container-fluid">
               <ul class="navbar-mobile__list list-unstyled">
                  <li class="active has-sub">
                     <a href="#">
                        <i class="fas fa-home"></i>Dashboard</a>
                  </li>
                  <li>
                     <a href="job_all.php">
                        <i class="fas fa-align-justify"></i>All Job</a>
                  </li>

                  <li>
                     <a href="logout.php">
                        <i class="fas fa-power-off"></i>Log Out</a>
                  </li>

               </ul>
            </div>
         </nav>
      </header> -->
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <!-- <aside class="menu-sidebar d-none d-lg-block">
         <div class="logo">
            <a href="#">
               <h3>Job Request</h3> <img src="images/icon/logo.png" alt="Cool Admin" />
            </a>
         </div>
         <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
               <ul class="list-unstyled navbar__list">
                  <li class="active has-sub">
                     <a href="#">
                        <i class="fas fa-home"></i>Dashboard</a>
                  </li>
                  <li>
                     <a href="job_all.php">
                        <i class="fas fa-align-justify"></i>All Job</a>
                  </li>

                  <li>
                     <a href="logout.php">
                        <i class="fas fa-power-off"></i>Log Out</a>
                  </li>
                  <div style="position: absolute;  bottom: 10px;">
                     <li>
                        <div class="account-wrap">
                           <div class="account-item clearfix js-item-menu">

                              <a class="js-arrow" href="#">
                                 <?php

                                 $sqlT = "SELECT * FROM vw_Employee where EmployeeUsername = '$Username' ";
                                 $queryT = sqlsrv_query($conn, $sqlT);
                                 $resultT = sqlsrv_fetch_array($queryT, SQLSRV_FETCH_ASSOC);
                                 if (!$resultT) {
                                    // echo "Error while fetching array.\n";
                                    die(print_r(sqlsrv_errors(), true));
                                 } else if ($resultT === null) {
                                    echo "No results were found.\n";
                                 } else {
                                    do { ?>

                                       <i class="fas fa-user"></i><?php echo $resultT["ThFirstName"]; ?> <?php echo $resultT["ThLastName"]; ?>
                                       <?php echo $resultT["EmployeeCode"]; ?>

                              </a>



                        <?php
                                    } while ($resultT = sqlsrv_fetch_array($queryT, SQLSRV_FETCH_ASSOC));
                                 }
                        ?>


                           </div>
                        </div>
                     </li>
                  </div>
               </ul>
            </nav>
         </div>
      </aside> -->
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->




      <div class="page-container">
         <!-- <div id="loader">
            <img id="loader-image" src="Infinity-1.1s-224px.gif" alt="Loading..." /><br />

         </div>
         <div style="display:none;" id="myDiv" class="animate-bottom"> -->

         <!-- MAIN CONTENT-->
         <div class="main-content" style="    padding-top: 20px;">
            <div class="section__content section__content--p30">
               <div class="container-fluid">

                  <?php

                  $count_job_all = 0;
                  $count_job_inprocess = 0;
                  $count_job_success = 0;
                  $count_job_unsuccess = 0;

                  $sqlT1 = "SELECT Job_ID FROM Job_desc ";
                  $queryT1 = sqlsrv_query($conn, $sqlT1);
                  $rowscount = sqlsrv_fetch_array($queryT1, SQLSRV_FETCH_ASSOC);
                  if ($rowscount === false) {
                     // echo "Error while fetching array.\n";
                     die(print_r(sqlsrv_errors(), true));
                  } else if ($rowscount === null) {
                     // echo "No results were found.\n";
                  } else {
                     do {
                        $count_job_all++;
                     } while ($resultT1 = sqlsrv_fetch_array($queryT1, SQLSRV_FETCH_ASSOC));
                  }
                  // echo "<h2>count_job_all " . $count_job_all . "</h2>";



                  $sqlT2 = "SELECT * FROM Job_desc WHERE Status < '6' ";
                  $queryT2 = sqlsrv_query($conn, $sqlT2);
                  $rowscount2 = sqlsrv_fetch_array($queryT2, SQLSRV_FETCH_ASSOC);
                  if ($rowscount2 === false) {
                     // echo "Error while fetching array.\n";
                     die(print_r(sqlsrv_errors(), true));
                  } else if ($rowscount2 === null) {
                     // echo "No results were found.\n";
                  } else {
                     do {
                        $count_job_inprocess++;
                     } while ($rowscount2 = sqlsrv_fetch_array($queryT2, SQLSRV_FETCH_ASSOC));
                  }

                  // echo "<h2>count_job_inprocess " . $count_job_inprocess . "</h2>";



                  $sqlT3 = "SELECT * FROM Job_desc WHERE Status = '6' ";
                  $queryT3 = sqlsrv_query($conn, $sqlT3);
                  if ($queryT3) {
                     $rowsT3 = sqlsrv_has_rows($queryT3);
                     if ($rowsT3 === true) {
                        while ($resultT3 = sqlsrv_fetch_array($queryT3, SQLSRV_FETCH_ASSOC)); {
                           $count_job_success++;
                        }
                     } else {
                        $count_job_success;
                     }
                  }
                  // echo "<h2>count_job_success " . $count_job_success . "</h2>";

                  $sqlTT = "SELECT *  FROM Job_desc where Status = '7' ";
                  $queryTT = sqlsrv_query($conn, $sqlTT);
                  if ($queryTT) {
                     $rowsTT = sqlsrv_has_rows($queryTT);
                     if ($rowsTT === true) {
                        while ($resultTT = sqlsrv_fetch_array($queryTT, SQLSRV_FETCH_ASSOC)); {
                           $count_job_unsuccess++;
                        }
                     } else {
                        $count_job_unsuccess;
                     }
                  }
                  // echo "<h2>count_job_unsuccess " . $count_job_unsuccess . "</h2>";



                  ?>

                  <!-- โชว์ข้อมูลบน console log -->
                  <span id="storage" data-variable-1="<?php echo $count_job_all; ?>" data-variable-2="<?php echo $count_job_inprocess; ?>" data-variable-3="<?php echo $count_job_success; ?>" data-variable-4="<?php echo $count_job_unsuccess; ?>"></span>
                  <script>
                     window.onload = function() {
                        count_job_all = document.getElementById("storage").getAttribute("data-variable-1");
                        count_job_inprocess = document.getElementById("storage").getAttribute("data-variable-2");
                        count_job_success = document.getElementById("storage").getAttribute("data-variable-3");
                        count_job_unsuccess = document.getElementById("storage").getAttribute("data-variable-4");
                        console.log("count_job_all -> " + count_job_all);
                        console.log("count_job_inprocess -> " + count_job_inprocess);
                        console.log("count_job_success -> " + count_job_success);
                        console.log("count_job_unsuccess -> " + count_job_unsuccess);
                     }
                  </script>
                  <?php




                  $count_job_unsuccess_month = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);


                  $year = date('Y');
                  $month = date('m');

                  $sqlP1 = "SELECT *  FROM Job_desc where Status = '7'";
                  $queryP1 = sqlsrv_query($conn, $sqlP1);
                  while ($resultP1 = sqlsrv_fetch_array($queryP1, SQLSRV_FETCH_ASSOC)) {
                     // echo "<h2>" . $resultP1["Status"] . "</h2>";
                     $mymonth = date_format($resultP1["Date_create"], "m");
                     $myyear = date_format($resultP1["Date_create"], "Y");

                     if ($myyear == $year) {
                        if ($mymonth == '1') {
                           $count_job_unsuccess_month[0]++;
                        } elseif ($mymonth == '2') {
                           $count_job_unsuccess_month[1]++;
                        } elseif ($mymonth == '3') {
                           $count_job_unsuccess_month[2]++;
                        } elseif ($mymonth == '4') {
                           $count_job_unsuccess_month[3]++;
                        } elseif ($mymonth == '5') {
                           $count_job_unsuccess_month[4]++;
                        } elseif ($mymonth == '6') {
                           $count_job_unsuccess_month[5]++;
                        } elseif ($mymonth == '7') {
                           $count_job_unsuccess_month[6]++;
                        } elseif ($mymonth == '8') {
                           $count_job_unsuccess_month[7]++;
                        } elseif ($mymonth == '9') {
                           $count_job_unsuccess_month[8]++;
                        } elseif ($mymonth == '10') {
                           $count_job_unsuccess_month[9]++;
                        } elseif ($mymonth == '11') {
                           $count_job_unsuccess_month[10]++;
                        } else {
                           $count_job_unsuccess_month[11]++;
                        }
                     }
                  }
                  // ใช้ echo แสดงข้อมูลบนหน้าจอ
                  // echo "<h2>OUT " . $count_job_unsuccess_month[10] . "</h2>";




                  $count_job_success_month = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                  $sqlP2 = "SELECT * FROM Job_desc WHERE Status = '6'";
                  $queryP2 = sqlsrv_query($conn, $sqlP2);
                  while ($resultP2 = sqlsrv_fetch_array($queryP2, SQLSRV_FETCH_ASSOC)) {
                     $mymonth = date_format($resultP2["Date_create"], "m");
                     $myyear = date_format($resultP2["Date_create"], "Y");
                     if ($myyear == $year) {
                        if ($mymonth == '1') {
                           $count_job_success_month[0]++;
                        } elseif ($mymonth == '2') {
                           $count_job_success_month[1]++;
                        } elseif ($mymonth == '3') {
                           $count_job_success_month[2]++;
                        } elseif ($mymonth == '4') {
                           $count_job_success_month[3]++;
                        } elseif ($mymonth == '5') {
                           $count_job_success_month[4]++;
                        } elseif ($mymonth == '6') {
                           $count_job_success_month[5]++;
                        } elseif ($mymonth == '7') {
                           $count_job_success_month[6]++;
                        } elseif ($mymonth == '8') {
                           $count_job_success_month[7]++;
                        } elseif ($mymonth == '9') {
                           $count_job_success_month[8]++;
                        } elseif ($mymonth == '10') {
                           $count_job_success_month[9]++;
                        } elseif ($mymonth == '11') {
                           $count_job_success_month[10]++;
                        } else {
                           $count_job_success_month[11]++;
                        }
                     }
                  }



                  $count_job_inprocess_month = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                  $sqlP3 = "SELECT * FROM Job_desc WHERE Status < '6'";
                  $queryP3 = sqlsrv_query($conn, $sqlP3);
                  while ($resultP3 = sqlsrv_fetch_array($queryP3, SQLSRV_FETCH_ASSOC)); {
                     $mymonth = date_format($resultP3["Date_create"], "m");
                     $myyear = date_format($resultP3["Date_create"], "Y");
                     if ($myyear == $year) {
                        if ($mymonth == '1') {
                           $count_job_inprocess_month[0]++;
                        } elseif ($mymonth == '2') {
                           $count_job_inprocess_month[1]++;
                        } elseif ($mymonth == '3') {
                           $count_job_inprocess_month[2]++;
                        } elseif ($mymonth == '4') {
                           $count_job_inprocess_month[3]++;
                        } elseif ($mymonth == '5') {
                           $count_job_inprocess_month[4]++;
                        } elseif ($mymonth == '6') {
                           $count_job_inprocess_month[5]++;
                        } elseif ($mymonth == '7') {
                           $count_job_inprocess_month[6]++;
                        } elseif ($mymonth == '8') {
                           $count_job_inprocess_month[7]++;
                        } elseif ($mymonth == '9') {
                           $count_job_inprocess_month[8]++;
                        } elseif ($mymonth == '10') {
                           $count_job_inprocess_month[9]++;
                        } elseif ($mymonth == '11') {
                           $count_job_inprocess_month[10]++;
                        } else {
                           $count_job_inprocess_month[11]++;
                        }
                     }
                  }


                  ?>




                  <div class="row">
                     <div class="col-lg-12">
                        <div id="snoAlertBox" class="sufee-alert alert with-close alert-primary alert-dismissible fade show " style=" position:fixed; z-index: 999; width:60%; margin-left: 10px ; margin-top: auto; display: none;">
                           <span class="badge badge-pill badge-primary">Success</span>
                           You successfully read this important alert.
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <h2 class="title-1 m-b-5" style="margin-bottom: auto;">Dashboard</h2>

                        <section class="statistic statistic2">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-6 col-lg-3">
                                    <div class="statistic__item statistic__item--blue">
                                       <h2 class="number"><?php echo $count_job_all ?></h2>
                                       <span class="desc"><b>Job All</b></span>
                                       <div class="icon">
                                          <i class="zmdi zmdi-calendar-note"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-3">
                                    <div class="statistic__item statistic__item--orange">
                                       <h2 class="number"><?php echo $count_job_inprocess ?></h2>
                                       <span class="desc"><b>Job Inprocess</b></span>
                                       <div class="icon">
                                          <i class="zmdi zmdi-code-setting"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-3">
                                    <div class="statistic__item statistic__item--green">
                                       <h2 class="number"><?php echo $count_job_success ?></h2>
                                       <span class="desc"><b>Job Success</b></span>
                                       <div class="icon">
                                          <i class="zmdi zmdi-check-all"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-3">
                                    <div class="statistic__item statistic__item--red">
                                       <h2 class="number"><?php echo $count_job_unsuccess ?></h2>
                                       <span class="desc"><b>Job Unsuccess</b></span>
                                       <div class="icon">
                                          <i class="zmdi zmdi-close-circle-o"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <div class="row" style=" margin:0 0 auto auto;">
                           <div class="col-md-7 col-lg-7">
                              <!-- CHART-->
                              <div class="container-fluid" style="background-color: white; padding: 40px 40px; height: 100%; ">
                                 <h3 class="title-3 m-b-30">Chart Job All In Year <span class="badge badge-danger"><?php echo $year ?></span></h3>


                                 <canvas id="myChart3"></canvas>

                                 <!-- <div>
                                    <span class="big"><?php echo $count_job_all ?></span>
                                    <span>/ 16220 items sold</span>
                                 </div> -->
                              </div>
                              <!-- END CHART-->
                           </div>

                           <div class="col-md-5 col-lg-5">
                              <!-- CHART PERCENT-->
                              <div class="container-fluid" style="background-color: white; padding: 40px 40px;  height: 100%; ">
                                 <h3 class=" title-3 m-b-10">chart by All Job</h3>
                                 <canvas id="myChart2"></canvas>

                                 <!-- CHART PERCENT-->
                              </div>

                           </div>

                        </div>


                     </div>

                  </div>
               </div>

            </div>
         </div>
         <!-- </div> -->

         <script>
            var myVar;

            function myFunction() {
               myVar = setTimeout(showPage, 500);
            }

            function showPage() {
               document.getElementById("loader").style.display = "none";
               document.getElementById("myDiv").style.display = "block";
            }
         </script>
         <!-- </div> -->
         <!-- END MAIN CONTENT-->
         <!-- END PAGE CONTAINER-->
      </div>


</body>









<div class=" modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            Confirm Submit
         </div>
         <div class="modal-body">
            Are you sure you want to submit ?

            <!-- We display the details entered by the user here -->


         </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a type="submit" id="submit" class="btn btn-success success">Submit</a>
         </div>
      </div>
   </div>
</div>


<!-- Jquery JS-->
<!-- <script src="vendor/jquery-3.2.1.min.js"></script> -->
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">

</script>
<script src="vendor/chartjs/chart.js"></script>
<!-- Main JS
      -->
<script src="js/main.js"></script>






</body>

</html>



<script>
   // === include 'setup' then 'config' above ===
   // <block:setup:1>
   const data = {
      labels: [
         'Success',
         'Inprocess',
         'Unsuccess',


      ],


      datasets: [{
         label: 'My First Dataset',
         data: [<?php echo $count_job_success ?>, <?php echo $count_job_inprocess ?>, <?php echo $count_job_unsuccess ?>],

         backgroundColor: [
            '#00b26f',
            '#ff8300',
            '#fa4251',


         ],
         hoverOffset: 4,

         borderAlign: 'center',

      }],

   };
   // </block:setup>

   // <block:config:0>
   const config = {
      type: 'doughnut',
      data: data,
   };
   // </block:config>

   // module.exports = {
   //    actions: [],
   //    config: config,
   // };
</script>


<!-- <script>
   // === include 'setup' then 'config' above ===

   const ctx = document.getElementById('myChart1');
   ctx.height = 300;

   const myChart1 = new Chart(ctx, {
      type: 'bar',
      data: {
         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August ', 'September', 'October', 'November', 'December'],
         datasets: [{
            axis: 'y',
            label: 'All Job',
            fill: false,
            data: [12, 19, 3, 5, 2, 3, 1, 1, 1, 1, 1, 1],
            backgroundColor: [
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)',
               'rgb(54, 162, 235)'

            ],

         }]
      },
      options: {

         animation: {
            onComplete: () => {
               delayed = true;
            },
            delay: (context) => {
               let delay = 0;

               return delay;
            },
         },

         indexAxis: 'y',
         scales: {
            x: {
               stacked: true,
            },
            y: {
               stacked: true
            }
         }

      }
   });
</script> -->
<script>
   // === include 'setup' then 'config' above ===

   const ctx2 = document.getElementById('myChart3');
   ctx2.height = 200;

   const myChart3 = new Chart(ctx2, {

      data: {
         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August ', 'September', 'October', 'November', 'December'],
         datasets: [{
               type: 'line',
               label: 'Unsuccess',
               fill: false,
               data: [<?php echo $count_job_unsuccess_month[0] ?>,
                  <?php echo $count_job_unsuccess_month[1] ?>,
                  <?php echo $count_job_unsuccess_month[2] ?>,
                  <?php echo $count_job_unsuccess_month[3] ?>,
                  <?php echo $count_job_unsuccess_month[4] ?>,
                  <?php echo $count_job_unsuccess_month[5] ?>,
                  <?php echo $count_job_unsuccess_month[6] ?>,
                  <?php echo $count_job_unsuccess_month[7] ?>,
                  <?php echo $count_job_unsuccess_month[8] ?>,
                  <?php echo $count_job_unsuccess_month[9] ?>,
                  <?php echo $count_job_unsuccess_month[10] ?>,
                  <?php echo $count_job_unsuccess_month[11] ?>
               ],

               borderColor: '#fa4251',
               tension: 0.1,
               fill: false,
            }, {
               type: 'line',
               label: 'success',
               fill: false,
               data: [<?php echo $count_job_success_month[0] ?>,
                  <?php echo $count_job_success_month[1] ?>,
                  <?php echo $count_job_success_month[2] ?>,
                  <?php echo $count_job_success_month[3] ?>,
                  <?php echo $count_job_success_month[4] ?>,
                  <?php echo $count_job_success_month[5] ?>,
                  <?php echo $count_job_success_month[6] ?>,
                  <?php echo $count_job_success_month[7] ?>,
                  <?php echo $count_job_success_month[8] ?>,
                  <?php echo $count_job_success_month[9] ?>,
                  <?php echo $count_job_success_month[10] ?>,
                  <?php echo $count_job_success_month[11] ?>
               ],
               borderColor: '#00b26f',
               tension: 0.1,
               fill: false,
            },
            {
               type: 'line',
               label: 'Inprocess',
               fill: false,
               data: [<?php echo $count_job_inprocess_month[0] ?>,
                  <?php echo $count_job_inprocess_month[1] ?>,
                  <?php echo $count_job_inprocess_month[2] ?>,
                  <?php echo $count_job_inprocess_month[3] ?>,
                  <?php echo $count_job_inprocess_month[4] ?>,
                  <?php echo $count_job_inprocess_month[5] ?>,
                  <?php echo $count_job_inprocess_month[6] ?>,
                  <?php echo $count_job_inprocess_month[7] ?>,
                  <?php echo $count_job_inprocess_month[8] ?>,
                  <?php echo $count_job_inprocess_month[9] ?>,
                  <?php echo $count_job_inprocess_month[10] ?>,
                  <?php echo $count_job_inprocess_month[11] ?>
               ],
               borderColor: '#ff8300',
               tension: 0.1,
               fill: false,
            }

         ]
      },
      options: {

         animation: {
            onComplete: () => {
               delayed = true;
            },
            delay: (context) => {
               let delay = 0;

               return delay;
            },
         },
      }


   });
</script>


<script>
   // === include 'setup' then 'config' above ===

   const myChart2 = new Chart(
      document.getElementById('myChart2'),
      config
   );
</script>

<script type="text/javascript">
   $(document).ready(function() {
      $('#example').DataTable({

         order: [
            [1, 'asc']
         ],
         // rowGroup: {
         //    dataSrc: 1
         // },
         dom: 'Bfrtip',
         buttons: [{
               extend: 'collection',
               text: 'Export  <i class="fa fa-files-o" style="margin-left:10px;"></i>',
               className: 'custom-html-collection',
               buttons: [
                  '<h3>Export</h3>',
                  'pdf',
                  'csv',
                  'excel',

               ]
            },


         ]
      });

   });
</script>


<!-- end document-->
<?php sqlsrv_close($conn); ?>