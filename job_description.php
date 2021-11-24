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

   <script src="js/swallow.js"></script>




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


</head>

<body>
   <!-- <body class="animsition"> -->

   <div class="page-wrapper">
      <!-- HEADER MOBILE-->
      <header class="header-mobile d-block d-lg-none">
         <div class="header-mobile__bar">
            <div class="container-fluid">
               <div class="header-mobile-inner">
                  <a class="logo" href="index.html">
                     <h1>Job Request</h1> <!-- <img src="images/icon/logo.png" alt="CoolAdmin" /> -->
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
                  <li>
                     <a href="Home.php">
                        <i class="fas fa-home"></i>Dashboard</a>
                  </li>
                  <li class="active has-sub">
                     <a href="#">
                        <i class="fas fa-align-justify"></i>All Job</a>
                  </li>
                  <li>
                     <a href="logout.php">
                        <i class="fas fa-power-off"></i>Log Out</a>
                  </li>

               </ul>
            </div>
         </nav>
      </header>
      <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar d-none d-lg-block">
         <div class="logo">
            <a href="#">
               <h3>Job Request</h3> <!-- <img src="images/icon/logo.png" alt="Cool Admin" /> -->
            </a>
         </div>
         <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
               <ul class="list-unstyled navbar__list">
                  <li>
                     <a href="Home.php">
                        <i class="fas fa-home"></i>Dashboard</a>
                  </li>
                  <li class="active has-sub">
                     <a href="#">
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
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container">
         <!-- MAIN CONTENT-->
         <div class="main-content" style="    padding-top: 20px;">
            <div class="section__content section__content--p30">
               <div class="container-fluid">




                  <div class="row">
                     <div class="col-lg-12">
                        <div id="snoAlertBox" class="sufee-alert alert with-close alert-primary alert-dismissible fade show " style=" position:fixed; z-index: 999; width:60%; margin-left: 10px ; margin-top: auto; display: none;">
                           <span class="badge badge-pill badge-primary">Success</span>
                           You successfully read this important alert.
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <h2 class="title-1 m-b-25">Job Description</h2>
                        <div class="top-campaign">

                           <div class="row">


                              <div class="col-lg-12">



                                 <div class="card">




                                    <div class="card-header">Job Description</div>
                                    <div class="card-body">
                                       <div class="card-title">
                                          <div class="row">
                                             <div class="col-3"></div>
                                             <div class="col-6">
                                                <h3 class="text-center title-2">ใบแจ้งงาน</h3>
                                             </div>

                                             <?php
                                             include("connect.php");
                                             $month = date('m');
                                             $x = "001";
                                             $fisrt_numRequire = 'REQ';
                                             $x_str = substr("$x", 0);






                                             if ($conn) {

                                                // $sqlP3 = "SELECT GasolineTypeName,(SELECT GasolinePrice FROM GasolinePrice as b WHERE Date ='" . $ldate . "'and b.GasolineTypeID=a.GasolineTypeID) as GasolinePriceldate,GasolinePrice,LastUpdate FROM GasolinePrice as a WHERE GasolineTypeID='3' and Date = '" . $adate . "'";
                                                // $queryP3 = sqlsrv_query($conn, $sqlP3);
                                                // while ($resultP3 = sqlsrv_fetch_array($queryP3, SQLSRV_FETCH_ASSOC)) {
                                                //    $GasolineTypeNameN = $resultP3["GasolineTypeName"];
                                                //    // $GasolinePriceN = $resultP3["GasolinePrice"];
                                                //    // $GasolinePriceldateN = $resultP3["GasolinePriceldate"];
                                                //    // $LastUpdateN = date_format($resultP3["LastUpdate"], 'Y-m-d h:i:s');
                                                //    // $differentN = $GasolinePriceN - $GasolinePriceldateN;
                                                // }
                                                // echo "aaaaaaaaaasdaasdasdasdasdasdasdaaaaaa";

                                                $query = "SELECT TOP 1 * FROM quatation ORDER BY quatation_ID DESC";
                                                $returnedValue = sqlsrv_query($conn, $query);
                                                $row = sqlsrv_fetch_array($returnedValue, SQLSRV_FETCH_ASSOC);

                                                if ($row === false) {
                                                   // echo "Error while fetching array.\n";
                                                   die(print_r(sqlsrv_errors(), true));
                                                } else if ($row === null) {
                                                   // echo "No results were found.\n";
                                                   $numRequire = $fisrt_numRequire . "-" . $month . "-" . $x_str;
                                                } else {
                                                   do {
                                                      // echo "Inside loop!";
                                                      $mymonth = date_format($row["date_time_stamp"], "m");
                                                      // echo ">>>>$mymonth.\n";
                                                      if ($mymonth == $month) {
                                                         // echo "mymonth == month.\n";
                                                         // echo "====";
                                                         $y = substr($row["num_req"], 9, 1);
                                                         $z =  (int)$y + 1;
                                                         $x_str = substr("000" . $z, -3, 3);

                                                         $numRequire = $fisrt_numRequire . "-" . $month . "-" . $x_str;
                                                      } else {
                                                         // echo "else.\n";
                                                         // echo "else";
                                                         $y = "000";
                                                         $z =  (int)$y + 1;
                                                         $x_str = substr("000" . $z, -3, 3);
                                                         $numRequire = $fisrt_numRequire . "-" . $month . "-" . $x_str;
                                                      }
                                                   } while ($row = sqlsrv_fetch_array($returnedValue, SQLSRV_FETCH_ASSOC));
                                                }



                                                //    if (($result = sqlsrv_query($conn, "SELECT TOP 1 * FROM quatation ORDER BY quatation_ID DESC
                                                //    ")) !== false) {
                                                //       while ($obj = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {

                                                //          echo "aaaaaaaaaasdasdaaaaaa";

                                                //          if (!$result) {
                                                //             echo "aaaaaaaaaaaaaa";

                                                //             $numRequire = $fisrt_numRequire . "-" . $month . "-" . $x_str;
                                                //          } else {
                                                //             $mymonth = date_format($obj["date_time_stamp"], "m");


                                                //             if ($mymonth == $month) {
                                                //                // echo "====";
                                                //                $y = substr($obj["num_req"], 9, 1);
                                                //                $z =  (int)$y + 1;
                                                //                $x_str = substr("000" . $z, -3, 3);

                                                //                $numRequire = $fisrt_numRequire . "-" . $month . "-" . $x_str;
                                                //             } else {
                                                //                // echo "else";
                                                //                $y = "000";
                                                //                $z =  (int)$y + 1;
                                                //                $x_str = substr("000" . $z, -3, 3);
                                                //                $numRequire = $fisrt_numRequire . "-" . $month . "-" . $x_str;
                                                //             }
                                                //          }
                                                //       }
                                                //    }
                                             } else {
                                                die(print_r(sqlsrv_errors(), true));
                                                echo "aaaa";
                                             }




                                             ?>

                                             <div class="col-3">
                                                <input type="text" class="form-control" value="<?php echo  "$numRequire" ?>" disabled>

                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <form action="" name=" save" id="save" method="post" ENCTYPE="multipart/form-data">
                                          <form>

                                             <input id="num_req" name="num_req" type="text" value="<?php echo  $numRequire ?>" hidden>
                                             <div class="row">
                                                <div class="col-6">
                                                   <div class="form-group">
                                                      <label for="name_request" class="control-label mb-1">ชื่อผู้ขอ</label>
                                                      <input id="name_request" name="name_request" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="form-group has-success">
                                                      <label for="department" class="control-label mb-1">หน่วยงาน</label>
                                                      <input id="department" name="department" type="text" class="form-control department valid" aria-required="true" aria-invalid="false" required>

                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-3">
                                                   <div class="form-group">
                                                      <label for="tel" class="control-label mb-1">เบอร์ติดต่อ</label>
                                                      <input id="tel" name="tel" type="tel" class="form-control tel" data-val="true" data-val-required="Please enter tel number" data-val-tel="Please enter a valid tel number" autocomplete="tel" required>

                                                   </div>
                                                </div>
                                                <div class="col-9">
                                                   <div class="form-group">
                                                      <label for="email" class="control-label mb-1">Email</label>
                                                      <input id="email" name="email" type="email" class="form-control email" value="" data-val="true" data-val-required="Please enter your email" data-email="Please enter email" autocomplete="email" required>
                                                      <span class="help-block" data-valmsg-for="email" data-valmsg-replace="true"></span>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row">
                                                <div class="col-6">


                                                   <div class="form-group">
                                                      <label for="date_picker" class="control-label mb-1">วันที่ต้องการ</label>
                                                      <input type="date" class="form-control" name="date_picker" id="date_picker" required>
                                                   </div>

                                                </div>



                                             </div>




                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label for="comment">รายละเอียดงาน :</label>
                                                      <textarea class="form-control" rows="5" id="comment"></textarea>
                                                   </div>
                                                </div>
                                             </div>


                                    </div>
                                 </div>




                                 <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx      UPLOAD PDF    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                                 <!-- <div class="row" style="margin-top:10px;">
                                    <div class="col-12">
                                       <label for="file_pdf" class="form-label">Upload File PDF : </label>
                                       <input type='file' name='file_pdf' id='file_pdf' />
                                    </div>
                                 </div> -->

                              </div>

                              </form>

                           </div>
                        </div>
                     </div>


                  </div>
               </div>


               <label for="input-folder-3">Select files/folders</label>
               <div class="file-loading">
                  <input id="input-folder-3" name="input-folder-3[]" type="file" multiple>
               </div>
               <script>
                  $(document).ready(function() {
                     $("#input-folder-3").fileinput({
                        uploadUrl: "/file-upload-batch/2",
                        hideThumbnailContent: true // hide image, pdf, text or other content in the thumbnail preview
                     });
                  });
               </script>













            </div>
         </div>
         <!-- </div> -->
      </div>
      <!-- END MAIN CONTENT-->
      <!-- END PAGE CONTAINER-->
   </div>




   </div>







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
         data: [313, 5, 2],

         backgroundColor: [
            'rgb(54, 162, 235)',
            'orange',
            'red',


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

   module.exports = {
      actions: [],
      config: config,
   };
</script>


<script>
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


            // 'copy',
            // {
            //    extend: 'csv',
            //    text: 'csv',

            //    // orientation: 'landscape'

            // },
            // {
            //    extend: 'excel',
            //    text: 'excel',
            //    // exportOptions: {
            //    //     columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
            //    // }
            //    // orientation: 'landscape'

            // },
            // {
            //    extend: 'pdf',
            //    footer: 'true',
            //    text: 'pdf',
            //    orientation: 'landscape'

            // },
            // {
            //    extend: 'print',
            //    footer: 'true',
            //    text: 'print',

            //    // orientation: 'landscape'

            // }
         ]
      });

   });
</script>


<!-- end document-->
<?php sqlsrv_close($conn); ?>