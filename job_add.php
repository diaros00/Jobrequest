<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
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


   <!-- datepicker -->
   <script src="js/jquery-3.5.1.min.js"></script>
   <!-- <script src="js/gijgo.min.js" type="text/javascript"></script>
   <link href="css/gijgo.min.css" rel="stylesheet" type="text/css" /> -->

   <!-- end datepicker -->

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
   <title>Job Request</title>

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



   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

   <script src="js/jquery-3.5.1.min.js"></script>

   <script type="text/javascript" charset="utf8" src="js/jquery-3.5.1.js"></script>
   <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/jszip.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/pdfmake.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/vfs_fonts.js"></script>
   <script type="text/javascript" charset="utf8" src="js/dataTables.buttons.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/buttons.html5.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/buttons.print.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/dataTables.rowGroup.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/buttons.colVis.min.js"></script>
   <!-- input file-->
   <script type="text/javascript" charset="utf8" src="js/piexif.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/sortable.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/fileinput.min.js"></script>
   <script type="text/javascript" charset="utf8" src="js/LANG.js"></script>
   <!--  -->

   <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="css/rowGroup.dataTables.min.css">

   <!-- input -->
   <link rel="stylesheet" type="text/css" href="css/fileinput.css">
   <!--  -->


   <!-- Include Bootstrap Datepicker -->
   <link rel="stylesheet" href="css/font-awesome.css" />
   <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
   <script src="js/bootstrap-datepicker.min.js"></script>

</head>

<body onload="myFunction()" style="margin:0;">

   <!-- <body> -->


   <!--  <body class="animsition"> -->

   <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <?php include("sidebar.php"); ?>
      <script>
         $('#AllJobNav').addClass('active has-sub');
         $("#AllJobNavA").attr("href", "#");
      </script>

      <!-- PAGE CONTAINER-->

      <div class="page-container">

         <div id="loader">
            <img id="loader-image" src="Infinity-1.1s-224px.gif" alt="Loading..." /><br />

         </div>

         <div style="display:none;" id="myDiv" class="animate-bottom">
            <!-- MAIN CONTENT-->
            <div class="main-content" style="padding-top: 20px;">
               <div class="section__content section__content--p30">
                  <div class="container-fluid">

                     <!-- โชว์ alert -->
                     <?php
                     session_start();
                     if (isset($_SESSION['plan'])) {
                        echo '<div class="alert alert-success alert-dismissable" style="display:none; z-index:999;" id="flash-msg">
                           <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                           <i class="icon fa fa-check"></i>' . $_SESSION['plan'] . '
                           </div>';
                        //to not make the error message appear again after refresh:

                     }
                     unset($_SESSION['plan']);
                     ?>


                     <script>
                        $(document).ready(function() {
                           $("#flash-msg").delay(1500).fadeIn(800).delay(4000).fadeOut("slow");
                        });
                     </script>

                     <!-- END โชว์ alert -->

                     <div class="row">
                        <div class="col-lg-12">

                           <div class="row">
                              <div class="col-md-4 col-sm-6">
                                 <h2 class="title-1 m-b-25">Request a Job</h2>
                              </div>
                              <div class="col-md-5 col-sm-2"></div>
                              <div class="col-md-3 col-sm-4">

                                 <a class="btn btn-success btn-block" href="job_all.php"><i class="fa fa-arrow-left"></i> Back</a>
                              </div>
                           </div>
                           <div class="top-campaign" style="padding-bottom: 45px;">

                              <div class="row">
                                 <div class="col-md-3 col-sm-12"></div>
                                 <div class="col-md-6 col-sm-12">
                                    <h3 class="text-center title-10">Job Request Form</h3>
                                 </div>

                                 <?php
                                 include("connect.php");
                                 $month = date('m');
                                 $year = date('Y');
                                 $x = "001";
                                 $fisrt_numRequire = 'REQ';
                                 $x_str = substr("$x", 0);

                                 if ($conn) {


                                    $query = "SELECT TOP 1 * FROM Job_desc ORDER BY Job_ID DESC";
                                    $returnedValue = sqlsrv_query($conn, $query);
                                    $row = sqlsrv_fetch_array($returnedValue, SQLSRV_FETCH_ASSOC);

                                    if ($row === false) {
                                       // echo "Error while fetching array.\n";
                                       die(print_r(sqlsrv_errors(), true));
                                    } else if ($row === null) {
                                       // echo "No results were found.\n";
                                       $numRequire = $fisrt_numRequire . $year . "-" . $month . "-" . $x_str;
                                    } else {
                                       do {
                                          // echo "Inside loop!";
                                          $mymonth = date_format($row["Date_create"], "m");
                                          // echo ">>>>$mymonth.\n";
                                          if ($mymonth == $month) {
                                             // echo "mymonth == month.\n";
                                             // echo "====";
                                             $y = substr($row["Num_req"], 13, 1);
                                             $z =  (int)$y + 1;
                                             $x_str = substr("000" . $z, -3, 3);
                                             $numRequire = $fisrt_numRequire . $year . "-"  . $month . "-" . $x_str;
                                          } else {
                                             // echo "else.\n";
                                             // echo "else";
                                             $y = "000";
                                             $z =  (int)$y + 1;
                                             $x_str = substr("000" . $z, -3, 3);
                                             $numRequire = $fisrt_numRequire . $year . "-" . $month . "-" . $x_str;
                                          }
                                       } while ($row = sqlsrv_fetch_array($returnedValue, SQLSRV_FETCH_ASSOC));
                                    }
                                 } else {
                                    die(print_r(sqlsrv_errors(), true));
                                    echo "aaaa";
                                 }




                                 ?>

                                 <div class="col-md-3 col-sm-12">
                                    <input type="text" class="form-control" value="<?php echo "$numRequire" ?>" disabled>

                                 </div>
                              </div>

                              <hr />

                              <div class="row">


                                 <div class="col-lg-5">



                                    <div class="card">

                                       <div class="card-header"><strong class="card-title"><i class="fa fa-user" aria-hidden="true" style="margin-right: 10px;"></i>
                                             Requester information</strong>
                                       </div>
                                       <form action="db_save_job_request.php" name="save" id="save" method="post" ENCTYPE="multipart/form-data">


                                          <div class="card-body" style="padding-top: 0px ;">

                                             <?php
                                             include("connect.php");

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


                                                   <input id="Num_req" name="Num_req" type="text" value="<?php echo $numRequire ?>" hidden>
                                                   <label for="Employee_request" class="control-label mb-1">Employee Code</label>

                                                   <div class="form-group">
                                                      <div class="input-group">
                                                         <input id="Employee_request" name="Employee_request" class="form-control" type="text" placeholder="กรุณากรอกรหัสพนักงาน" autocomplete="off" value="<?php echo $resultT["EmployeeCode"] ?>" disabled>


                                                      </div>

                                                   </div>

                                                   <div class="form-group">
                                                      <label for="Company_code_request" class="control-label mb-1">Company Code</label>
                                                      <input id="Company_code_request" name="Company_code_request" type="text" autocomplete="off" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $resultT["CompanyCode"] ?>" disabled>

                                                   </div>

                                                   <div class="form-group">
                                                      <label for="Company_name_request" class="control-label mb-1">Company Name</label>
                                                      <input id="Company_name_request" name="Company_name_request" type="text" autocomplete="off" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $resultT["PlantNameTH"] ?>" disabled>

                                                   </div>


                                                   <div class="form-group">
                                                      <label for="FName_request" class="control-label mb-1">Name Th</label>
                                                      <input id="FName_request" name="FName_request" type="text" autocomplete="off" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $resultT["ThFirstName"] . " " . $resultT["ThLastName"] ?>" disabled>

                                                   </div>
                                                   <div class="form-group">
                                                      <label for="LName_request" class="control-label mb-1">Name Eng</label>
                                                      <input id="LName_request" name="LName_request" type="text" autocomplete="off" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $resultT["EngFirstName"] . " " . $resultT["EngLastName"] ?>" disabled>

                                                   </div>

                                                   <div class="form-group has-success">
                                                      <label for="Department_request" class="control-label mb-1">Department</label>
                                                      <input id="Department_request" name="Department_request" type="text" autocomplete="off" class="form-control department valid" aria-required="true" aria-invalid="false" value="<?php echo $resultT["DepartmentName"] ?>" disabled>
                                                   </div>

                                                   <div class="form-group has-success">
                                                      <label for="Department_request" class="control-label mb-1">Department</label>
                                                      <input id="Department_request" name="Department_request" type="text" autocomplete="off" class="form-control department valid" aria-required="true" aria-invalid="false" value="<?php echo $resultT["DivisionName"] ?>" disabled>
                                                   </div>


                                                   <div class="form-group">
                                                      <label for="Telephone_request" class="control-label mb-1">เบอร์ติดต่อ</label>
                                                      <input id="Telephone_request" name="Telephone_request" autocomplete="off" type="tel" class="form-control tel" data-val="true" data-val-required="Please enter telephone number" data-val-tel="Please enter a valid tel number" value="<?php echo $resultT["ContactNo"] ?>" disabled>

                                                   </div>

                                                   <div class="form-group">
                                                      <label for="Email_request" class="control-label mb-1">Email</label>
                                                      <input id="Email_request" name="Email_request" type="email" autocomplete="off" class="form-control email" data-val="true" placeholder="กรุณากรอก email." data-val-required="Please enter your email" data-email="Please enter email" autocomplete="email" value="<?php echo $resultT["Email"] ?>" disabled>
                                                      <span class="help-block" data-valmsg-for="email" data-valmsg-replace="true"></span>

                                                   </div>










                                          </div>

                                    </div>


                                 </div>
                                 <div class="col-lg-7">
                                    <div class="card">
                                       <div class="card-header"><strong class="card-title"><i class="fa fa-check-square-o" aria-hidden="true" style="margin-right: 10px;"></i> Type of Job</strong></div>
                                       <div class="card-body">




                                          <label for="accordion"><b>เลือกประเภทงาน</b></label>

                                          <div id="accordion">
                                             <div class="card" style="margin-bottom: 0px;">
                                                <div class="card-header" id="headingOne">
                                                   <strong class="title">
                                                      <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" onclick="HardwareCollapse()">
                                                         <i class="fa fa-desktop" aria-hidden="true"></i> Hardware
                                                      </a>
                                                   </strong>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                   <div class="card-body">
                                                      <H4> วัตถุประสงค์ </H4>
                                                      <hr>
                                                      <div class="form-group">

                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked" name="Hardware_objective" value="ซื้ออุปกรณ์ใหม่" onclick="clearBox()">
                                                            <label class="custom-control-label" for="defaultUnchecked">ซื้ออุปกรณ์ใหม่</label>
                                                         </div>


                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked1" name="Hardware_objective" value="ปรับปรุง" onclick="clearBox()">
                                                            <label class="custom-control-label" for="defaultUnchecked1">ปรับปรุง</label>
                                                         </div>
                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked2" name="Hardware_objective" value="ทดแทนของเดิม" onclick="clearBox()">
                                                            <label class="custom-control-label" for="defaultUnchecked2">ทดแทนของเดิม</label>
                                                         </div>

                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked3" name="Hardware_objective" value="อื่นๆ" onclick="enableBox()">

                                                            <label class="custom-control-label" for="defaultUnchecked3">อื่นๆ</label>
                                                            <input class="form-control" id="Hardware_other" name="Hardware_other" disabled hidden>
                                                            <script type="text/javascript">
                                                               function clearBox() {
                                                                  document.getElementById('Hardware_other').value = "";
                                                                  document.getElementById('Hardware_other').disabled = true;
                                                                  document.getElementById('Hardware_other').hidden = true;
                                                               }

                                                               function enableBox() {
                                                                  document.getElementById("Hardware_other").disabled = false;
                                                                  document.getElementById("Hardware_other").hidden = false;
                                                               }
                                                            </script>

                                                         </div>


                                                      </div>

                                                      <H4> ประเภทอุปกรณ์ </H4>
                                                      <hr>
                                                      <div class="form-group">

                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked4" name="Hardware_type" value="Computer" onclick="clearBox1()">
                                                            <label class="custom-control-label" for="defaultUnchecked4">Computer</label>
                                                         </div>
                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked5" name="Hardware_type" value="Server" onclick="clearBox1()">
                                                            <label class="custom-control-label" for="defaultUnchecked5">Server</label>
                                                         </div>
                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked6" name="Hardware_type" value="Printer" onclick="clearBox1()">
                                                            <label class="custom-control-label" for="defaultUnchecked6">Printer</label>
                                                         </div>
                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked7" name="Hardware_type" value="Network" onclick="clearBox1()">
                                                            <label class="custom-control-label" for="defaultUnchecked7">Network</label>
                                                         </div>
                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="defaultUnchecked8" name="Hardware_type" value="อื่นๆ" onclick="enableBox1()">
                                                            <label class="custom-control-label" for="defaultUnchecked8">อื่นๆ</label>
                                                            <input class="form-control" id="Hardware_type_other" name="Hardware_type_other" placeholder="กรุณากรอกข้อความ" hidden>

                                                            <script type="text/javascript">
                                                               function clearBox1() {
                                                                  document.getElementById('Hardware_type_other').value = "";

                                                                  document.getElementById('Hardware_type_other').hidden = true;
                                                               }

                                                               function enableBox1() {
                                                                  document.getElementById("Hardware_type_other").hidden = false;
                                                               }
                                                            </script>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="card" style="margin-bottom: 0px;">
                                                <div class="card-header" id="headingTwo">
                                                   <strong class="title">
                                                      <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" onclick="SoftwareCollapse()">
                                                         <i class="fa fa-code" aria-hidden="true"></i> Software
                                                      </a>
                                                   </strong>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                   <div class="card-body">
                                                      <H4> วัตถุประสงค์ </H4>
                                                      <hr>
                                                      <div class="form-group">

                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="softwarecheck" name="Software_objective" value="Software ใหม่" onclick="clearBox2()">
                                                            <label class="custom-control-label" for="softwarecheck">Software ใหม่</label>
                                                         </div>


                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="softwarecheck1" name="Software_objective" value="ปรับปรุงหรือแก้ไข" onclick="clearBox2()">
                                                            <label class="custom-control-label" for="softwarecheck1">ปรับปรุงหรือแก้ไข</label>
                                                         </div>
                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="softwarecheck2" name="Software_objective" value="ทดแทนของเดิม" onclick="clearBox2()">
                                                            <label class="custom-control-label" for="softwarecheck2">ทดแทนของเดิม</label>
                                                         </div>

                                                         <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="softwarecheck3" name="Software_objective" value="อื่นๆ" onclick="enableBox2()">

                                                            <label class="custom-control-label" for="softwarecheck3">อื่นๆ</label>
                                                            <input class="form-control" id="Software_other" name="Software_other" placeholder="กรุณากรอกข้อความ" hidden>
                                                            <script type="text/javascript">
                                                               function clearBox2() {
                                                                  document.getElementById('Software_other').value = "";

                                                                  document.getElementById('Software_other').hidden = true;
                                                               }

                                                               function enableBox2() {

                                                                  document.getElementById("Software_other").hidden = false;
                                                               }
                                                            </script>

                                                         </div>


                                                      </div>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="card">
                                                <div class="card-header" id="headingThree">
                                                   <strong class="title">
                                                      <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" onclick="IntranetCollapse()">
                                                         <i class="fa fa-link" aria-hidden="true"></i> Intranet
                                                      </a>
                                                   </strong>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                   <div class="card-body">
                                                      <div class="form-check">
                                                         <input class="form-check-input" type="checkbox" id="defaultCheck1" value="ขอใช้บริการระบบ Intranet" name="Intranet">
                                                         <label class="form-check-label" for="defaultCheck1">
                                                            ขอใช้บริการระบบ Intranet
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>

                                             <script type="text/javascript">
                                                function HardwareCollapse() {
                                                   var els = document.getElementsByName("Software_objective");
                                                   for (var i = 0; i < els.length; i++) {
                                                      els[i].value = "";
                                                   }
                                                   var els1 = document.getElementsByName("Intranet");
                                                   for (var i = 0; i < els1.length; i++) {
                                                      els1[i].value = "";
                                                   }

                                                }

                                                function SoftwareCollapse() {
                                                   var els = document.getElementsByName("Hardware_objective");
                                                   for (var i = 0; i < els.length; i++) {
                                                      els[i].value = "";
                                                   }
                                                   var els1 = document.getElementsByName("Intranet");
                                                   for (var i = 0; i < els1.length; i++) {
                                                      els1[i].value = "";
                                                   }

                                                }

                                                function IntranetCollapse() {
                                                   var els = document.getElementsByName("Software_objective");
                                                   for (var i = 0; i < els.length; i++) {
                                                      els[i].value = "";
                                                   }
                                                   var els1 = document.getElementsByName("Hardware_objective");
                                                   for (var i = 0; i < els1.length; i++) {
                                                      els1[i].value = "";
                                                   }

                                                }
                                             </script>




                                          </div>

                                          <label>
                                             <b>ใช้สำหรับ</b>
                                          </label>
                                          <div class="form-group form-control">
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="row">
                                                      <div class="col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSG" id="TSG" name="TSG">
                                                            <label for="TSG">
                                                               TSG
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSA" id="TSA" name="TSA">
                                                            <label for="TSA">
                                                               TSA
                                                            </label>
                                                         </div>
                                                      </div>
                                                   </div>





                                                   <div class="row">
                                                      <div class="col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSIS" id="TSIS" name="TSIS">
                                                            <label for="TSIS">
                                                               TSIS
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TCT" id="TCT" name="TCT">
                                                            <label for="TCT">
                                                               TCT
                                                            </label>
                                                         </div>
                                                      </div>
                                                   </div>



                                                   <div class="row">
                                                      <div class="col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSVT" id="TSVT" name="TSVT">
                                                            <label for="TSVT">
                                                               TSVT
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSBP" id="TSBP" name="TSBP">
                                                            <label for="TSBP">
                                                               TSBP
                                                            </label>
                                                         </div>
                                                      </div>
                                                   </div>



                                                   <div class="row">
                                                      <div class="col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSESA" id="TSESA" name="TSESA">
                                                            <label for="TSESA">
                                                               TSESA
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSRA" id="TSRA" name="TSRA">
                                                            <label for="TSRA">
                                                               TSRA
                                                            </label>
                                                         </div>
                                                      </div>
                                                   </div>



                                                   <div class="row">
                                                      <div class="col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSLA" id="TSLA" name="TSLA">
                                                            <label for="TSLA">
                                                               TSLA
                                                            </label>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6 col-sm-6">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSAP" id="TSAP" name="TSAP">
                                                            <label for="TSAP">
                                                               TSAP
                                                            </label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>


                                                <div class="col-md-6">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSAT" id="TSAT-check" name="TSAT" onclick="enableBox1_check()">
                                                            <label for="TSAT">
                                                               TSAT <label style="color: red;">*</label>
                                                            </label>

                                                            <select class="form-control" id="TSAT" name="TSAT_plant_name" hidden>
                                                               <option value="">--Select Plant--</option>

                                                               <?php $query_status = "SELECT * FROM vw_CompanyPlant where PlantNameTH LIKE '%TSAT%'";
                                                               $returnedValue_status = sqlsrv_query($conn, $query_status);
                                                               $row_status = sqlsrv_fetch_array($returnedValue_status, SQLSRV_FETCH_ASSOC);

                                                               if ($row_status === false) {

                                                                  die(print_r(sqlsrv_errors(), true));
                                                               } else if ($row_status === null) {
                                                                  echo "No results were found.\n";
                                                               } else {
                                                                  do { ?>

                                                                     <option value="<?php echo $row_status["PlantNameTH"] ?>"><?php echo $row_status["PlantNameTH"] ?></option>

                                                               <?php } while ($row_status = sqlsrv_fetch_array($returnedValue_status, SQLSRV_FETCH_ASSOC));
                                                               }  ?>

                                                               <script>
                                                                  // function setChk1(value) {
                                                                  //    var chk = document.getElementById('TSAT-check');
                                                                  //    chk.checked = (value != 'null');

                                                                  // }

                                                                  function enableBox1_check() {


                                                                     $("#TSAT-check").on('change', function() {
                                                                        if ($(this).is(':checked')) {
                                                                           // document.getElementById("TSAT").disabled = false;
                                                                           document.getElementById("TSAT").hidden = false;
                                                                        } else {
                                                                           document.getElementById('TSAT').value = "";
                                                                           // document.getElementById("TSAT").disabled = true;
                                                                           document.getElementById("TSAT").hidden = true;

                                                                        }

                                                                     });
                                                                  }
                                                               </script>

                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSPT" id="TSPT-check" name="TSPT" onclick="enableBox2_check()">
                                                            <label for="TSPT">
                                                               TSPT <label style="color: red;">*</label>
                                                            </label>

                                                            <select class="form-control" id="TSPT" name="TSPT_plant_name" hidden>
                                                               <option value="">--Select Plant--</option>

                                                               <?php $query_status = "SELECT * FROM vw_CompanyPlant where PlantNameTH LIKE '%TSPT%'";
                                                               $returnedValue_status = sqlsrv_query($conn, $query_status);
                                                               $row_status = sqlsrv_fetch_array($returnedValue_status, SQLSRV_FETCH_ASSOC);

                                                               if ($row_status === false) {

                                                                  die(print_r(sqlsrv_errors(), true));
                                                               } else if ($row_status === null) {
                                                                  echo "No results were found.\n";
                                                               } else {
                                                                  do { ?>

                                                                     <option value="<?php echo $row_status["PlantNameTH"] ?>"><?php echo $row_status["PlantNameTH"] ?></option>

                                                               <?php } while ($row_status = sqlsrv_fetch_array($returnedValue_status, SQLSRV_FETCH_ASSOC));
                                                               }  ?>

                                                               <script>
                                                                  // function setChk2(value) {
                                                                  //    var chk = document.getElementById('TSPT-check');
                                                                  //    chk.checked = (value != 'null');



                                                                  // }

                                                                  function enableBox2_check() {


                                                                     $("#TSPT-check").on('change', function() {
                                                                        if ($(this).is(':checked')) {
                                                                           // document.getElementById("TSPT").disabled = false;
                                                                           document.getElementById("TSPT").hidden = false;
                                                                        } else {
                                                                           document.getElementById('TSPT').value = "";
                                                                           // document.getElementById("TSPT").disabled = true;
                                                                           document.getElementById("TSPT").hidden = true;

                                                                        }

                                                                     });
                                                                  }
                                                               </script>

                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <div class="form-group">
                                                            <input type="checkbox" value="TSGP" id="TSGP-check" name="TSGP" onclick="enableBox3_check()">
                                                            <label for="TSGP">
                                                               TSGP <label style="color: red;">*</label>
                                                            </label>

                                                            <select class="form-control" id="TSGP" name="TSGP_plant_name" hidden>
                                                               <option value="">--Select Plant--</option>

                                                               <?php $query_status = "SELECT * FROM vw_CompanyPlant where PlantNameTH LIKE '%TSGP%'";
                                                               $returnedValue_status = sqlsrv_query($conn, $query_status);
                                                               $row_status = sqlsrv_fetch_array($returnedValue_status, SQLSRV_FETCH_ASSOC);

                                                               if ($row_status === false) {

                                                                  die(print_r(sqlsrv_errors(), true));
                                                               } else if ($row_status === null) {
                                                                  echo "No results were found.\n";
                                                               } else {
                                                                  do { ?>

                                                                     <option value="<?php echo $row_status["PlantNameTH"] ?>"><?php echo $row_status["PlantNameTH"] ?></option>

                                                               <?php } while ($row_status = sqlsrv_fetch_array($returnedValue_status, SQLSRV_FETCH_ASSOC));
                                                               }  ?>

                                                               <script>
                                                                  function enableBox3_check() {


                                                                     $("#TSGP-check").on('change', function() {
                                                                        if ($(this).is(':checked')) {

                                                                           document.getElementById("TSGP").hidden = false;
                                                                        } else {
                                                                           document.getElementById('TSGP').value = "";

                                                                           document.getElementById("TSGP").hidden = true;

                                                                        }

                                                                     });
                                                                  }
                                                               </script>

                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>


                                                </div>
                                             </div>






                                             <div class="row">
                                                <div class="col-12">
                                                   <div class="form-group">
                                                      <input type="checkbox" value="อื่นๆ" id="order_for_company_check" onclick="enableBox4_check()">
                                                      <label for="order_for_company_check">อื่นๆ <label style="color: red;">*</label></label>
                                                      <input class="form-control" id="For_company_other" name="For_company_other" placeholder="กรุณากรอกข้อความ" disabled hidden>

                                                      <script type="text/javascript">
                                                         function enableBox4_check() {


                                                            $("#order_for_company_check").on('change', function() {
                                                               if ($(this).is(':checked')) {
                                                                  document.getElementById("For_company_other").disabled = false;
                                                                  document.getElementById("For_company_other").hidden = false;
                                                               } else {
                                                                  document.getElementById('For_company_other').value = "";
                                                                  document.getElementById("For_company_other").disabled = true;
                                                                  document.getElementById("For_company_other").hidden = true;

                                                               }

                                                            });


                                                         }
                                                      </script>

                                                   </div>
                                                </div>
                                             </div>


                                          </div>

                                       </div>

                                    </div>



                                 </div>
                              </div>



                              <div class="row">
                                 <div class="col-12">
                                    <div class="card">

                                       <div class="card-header"><strong class="title"><i class="fa fa-file-text" aria-hidden="true" style="margin-right: 10px;"></i> Job Description</strong>
                                       </div>
                                       <div class="card-body">

                                          <div class="row">
                                             <div class="col-md-7 col-sm-12">

                                                <div class="form-group">
                                                   <label for="datepicker">Due Date</label>

                                                   <div class="input-group">
                                                      <input class="datepicker form-control" data-provide="datepicker" id="datepicker" name="datepicker" autocomplete="off">

                                                      <div class="input-group-btn">
                                                         <span class="btn btn-secondary"><i class="fa fa-calendar"></i></span>

                                                      </div>
                                                   </div>

                                                </div>
                                             </div>


                                             <div class="col-md-5 col-sm-12">
                                                <div class="form-group">
                                                   <label for="Priority">Select Priority</label>
                                                   <select class="form-control" id="Priority" name="Priority">
                                                      <option value="Normal">Normal</option>
                                                      <option value="High">High</option>
                                                   </select>
                                                </div>

                                             </div>

                                          </div>

                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="Job_name">Job</label>
                                                   <input class="form-control" id="Job_name" name="Job_name" placeholder="กรุณากรอกชื่องาน">
                                                </div>
                                             </div>
                                          </div>


                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="Job_detail">Job Detail</label>
                                                   <textarea class="form-control" rows="5" id="Job_detail" name="Job_detail" placeholder="กรุณากรอกรายละเอียดงาน"></textarea>
                                                </div>
                                             </div>
                                          </div>

                                          <label for="budget">Budget</label>
                                          <div class="form-group form-control" id="budget">
                                             <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="Budget1" name="Budget" onclick="enableBox_Budget1()">

                                                <label class="custom-control-label" for="Budget1">Plan</label>
                                                <input class="form-control" id="Budget_plan" name="Budget_plan" placeholder="Costcenter" disabled hidden>
                                                <script type="text/javascript">
                                                   function enableBox_Budget1() {
                                                      document.getElementById('Budget_unplan').value = "";
                                                      document.getElementById('Budget_unplan').disabled = true;
                                                      document.getElementById('Budget_unplan').hidden = true;
                                                      document.getElementById("Budget_plan").disabled = false;
                                                      document.getElementById("Budget_plan").hidden = false;
                                                   }
                                                </script>

                                             </div>

                                             <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="Budget2" name="Budget" onclick="enableBox_Budget2()">

                                                <label class="custom-control-label" for="Budget2">Unplan</label>
                                                <div> <input for="Budget2" class="form-control" id="Budget_unplan" name="Budget_unplan" placeholder="Remark" disabled hidden>
                                                </div>

                                                <script type="text/javascript">
                                                   function enableBox_Budget2() {
                                                      document.getElementById('Budget_plan').value = "";
                                                      document.getElementById('Budget_plan').disabled = true;
                                                      document.getElementById('Budget_plan').hidden = true;
                                                      document.getElementById("Budget_unplan").disabled = false;
                                                      document.getElementById("Budget_unplan").hidden = false;
                                                   }
                                                </script>

                                             </div>
                                          </div>

                                          <label for="input-id">Upload files (Multiple)</label>
                                          <div class="custom-file">
                                             <input type="file" style="height: auto;" class="custom-file-input" name="files[]" id="files" multiple>
                                             <label class="custom-file-label" style="height: auto;" for="inputGroupFile02">Choose file</label>
                                          </div>

                                          <script type="text/javascript">
                                             $('.custom-file input').change(function(e) {
                                                var files = [];
                                                for (var i = 0; i < $(this)[0].files.length; i++) {
                                                   files.push($(this)[0].files[i].name);
                                                }
                                                $(this).next('.custom-file-label').html(files.join(', '));
                                             });
                                          </script>



                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">


                                 <div class="col-md-4 col-sm-12 ">

                                    <div class="card">
                                       <div class="card-header">
                                          <strong class="card-title" style="font-size: smaller;">ผู้ขอใช้บริการ</strong>
                                       </div>
                                       <div class="card-body">
                                          <input class="form-control" type="text" value="<?php echo $resultT['ThFullName'] ?>" name="Requester" readonly="true">

                                    <?php
                                                } while ($resultT = sqlsrv_fetch_array($queryT, SQLSRV_FETCH_ASSOC));
                                             }
                                    ?>

                                       </div>
                                    </div>
                                 </div>

                                 <div class="col-md-4 col-sm-12">
                                    <div class="card">
                                       <div class="card-header">
                                          <strong class="card-title" style="font-size: smaller;">อนุมัติโดย (ระดับจัดการ)</strong>
                                       </div>
                                       <div class="card-body">
                                          <select class="form-control" id="Approver1" name="Approver1">
                                             <option value="">Select Approver 1</option>

                                             <?php $query_approver1 = "SELECT * FROM vw_Employee where DepartmentCode = '$DepartmentCode' and EmployeeStatusCode = '01' AND Level like 'M' ";
                                             $returnedValue_approver1 = sqlsrv_query($conn, $query_approver1);
                                             $row_approver1 = sqlsrv_fetch_array($returnedValue_approver1, SQLSRV_FETCH_ASSOC);


                                             if ($row_approver1 === false) {

                                                die(print_r(sqlsrv_errors(), true));
                                             } else if ($row_approver1 === null) {
                                                echo "No results were found.\n";
                                             } else {
                                                do { ?>

                                                   <option value="<?php echo $row_approver1["ThFullName"] ?>"><?php echo $row_approver1["ThFullName"] ?></option>


                                             <?php } while ($row_approver1 = sqlsrv_fetch_array($returnedValue_approver1, SQLSRV_FETCH_ASSOC));
                                             }  ?>



                                          </select>


                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-12">
                                    <div class="card">
                                       <div class="card-header">
                                          <strong class="card-title" style="font-size: smaller;">อนุมัติโดย (ระดับผู้จัดการทั่วไป)</strong>
                                       </div>
                                       <div class="card-body">
                                          <select class="form-control" id="Approver2" name="Approver2">
                                             <option value="">Select Approver 2</option>

                                             <?php $query_approver2 = "SELECT * FROM vw_Employee where DepartmentCode = '$DepartmentCode' and EmployeeStatusCode = '01' AND Level like 'G' ";
                                             $returnedValue_approver2 = sqlsrv_query($conn, $query_approver2);
                                             $row_approver2 = sqlsrv_fetch_array($returnedValue_approver2, SQLSRV_FETCH_ASSOC);

                                             if ($row_approver2 === false) {

                                                die(print_r(sqlsrv_errors(), true));
                                             } else if ($row_approver2 === null) {
                                                echo "No results were found.\n";
                                             } else {
                                                do { ?>

                                                   <option value="<?php echo $row_approver2["ThFullName"] ?>"><?php echo $row_approver2["ThFullName"] ?></option>

                                             <?php } while ($row_approver2 = sqlsrv_fetch_array($returnedValue_approver2, SQLSRV_FETCH_ASSOC));
                                             }  ?>



                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <div class="row">
                                 <div class="col-12">
                                    <button class="btn btn-block btn-success" type="submit" value="submit" style="width-max: auto;">Submit <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></button>
                                 </div>
                              </div>
                           </div>





                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>


   </div>
   <!-- </div> -->
   </div>
   <!-- END MAIN CONTENT-->
   <!-- END PAGE CONTAINER-->
   </div>


   <!-- </div>

   </div> -->







   <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel </button>
               <button type="submit" id="submit" class="btn btn-success">Submit <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
               </button>
            </div>
         </div>
      </div>
   </div>



   <script>
      $(function() {
         $('#Employee_request').keyup(function() {
            if ($(this).val().length >= 1) {
               $.post('autocomplete_employee.php', {
                  keyword: $('#Employee_request').val()
               }, function(data) {
                  $('#Employee_list').show();
                  $('#Employee_list').html(data);
               });
            } else {
               $('#Employee_list').hide();
            }

         });

      });

      function putValue(Employee_request_code, Company_request, FName_request, LName_request, Department_request, Telephone_request, Email_request) {
         $('#Employee_request').val(Employee_request_code);
         $('#Company_request').val(Company_request);
         $('#FName_request').val(FName_request);
         $('#LName_request').val(LName_request);
         $('#Department_request').val(Department_request);
         $('#Telephone_request').val(Telephone_request);
         $('#Email_request').val(Email_request);

         $('#Employee_list').hide();
      }



      $('.datepicker').datepicker({
         format: 'dd-mm-yyyy',

         autoclose: true

      }).datepicker("setDate", 'now');
   </script>


   <!-- Jquery JS-->

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


   <script src="js/swallow.js"></script>

   </div>

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

</body>

</html>



<!-- end document-->
<?php sqlsrv_close($conn); ?>