<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Job Request</title>
   <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
   <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="css/fixedHeader.dataTables.min.css">

   <style>
      /* .dataTables_filter {
      float: left !important;
      } */


      form {
         margin: 20px 0;
      }

      form input,
      button {
         padding: 5px;
      }



      div.dt-button-collection {
         width: 20vh !important;
         height: auto !important;
         margin-top: 20px;


      }

      div.dt-button-collection button.dt-button {
         display: inline-block;
         /* width: 32%; */
         margin-top: 0px;
         margin-left: 0px;
         z-index: 999;


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
         z-index: 999;
         margin-top: 20px;
         margin-left: 20px;
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

      .tooltip {
         position: relative;
         display: inline-block;

         border-bottom: 1px black;


      }
   </style>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
   <script src="js/jquery-3.5.1.min.js"></script>



</head>

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


<body onload="myFunction()" style="margin:0;">
   <!-- <body class="animsition"> -->
   <div id="loader">
      <img id="loader-image" src="Infinity-1.1s-224px.gif" alt="Loading..." /><br />
   </div>

   <div id="myDiv" class="animate-bottom">
      <div class="page-wrapper">
         <!-- HEADER MOBILE-->
         <?php include("sidebar.php"); ?>
         <script>
            $('#AllJobNav').addClass('active has-sub');
            $("#AllJobNavA").attr("href", "#");
         </script>


         <!-- END MENU SIDEBAR-->

         <!-- PAGE CONTAINER-->
         <div class="page-container">


            <!-- MAIN CONTENT-->
            <div class="main-content" style="    padding-top: 20px;">
               <div class="section__content section__content--p30">
                  <!-- <div class="container-fluid"> -->


                  <!-- โชว์ alert -->
                  <?php
                  session_start();
                  if (isset($_SESSION['plan'])) {
                     echo '<div class="alert alert-success alert-dismissable" style="display:none; z-index:999;" id="flash-msg">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <i class="icon fa fa-check"></i> ' . $_SESSION['plan'] . '</div>';
                  }
                  unset($_SESSION['plan']);
                  ?>


                  <script>
                     $(document).ready(function() {
                        $("#flash-msg").fadeIn(800).delay(4000).fadeOut("slow");
                     });
                  </script>

                  <!-- END โชว์ alert -->

                  <div class="row">
                     <div class="col-lg-12">
                        <div id="snoAlertBox" class="sufee-alert alert with-close alert-primary alert-dismissible fade show " style=" position:fixed; z-index: 999; width:60%; margin-left: 10px ; margin-top: auto; display: none;">
                           <span class="badge badge-pill badge-primary">Success</span>
                           You successfully read this important alert.
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>


                        <div class="row">
                           <div class="col-md-4 col-sm-6">
                              <h2 class="title-1 m-b-25">All Job</h2>
                           </div>
                           <div class="col-md-5 col-sm-2"></div>
                           <div class="col-md-3 col-sm-4">

                              <a class="btn btn-success btn-block" href="job_add.php" data-toggle="tooltip" data-placement="right" title="เพิ่ม Job request ใหม่"><i class="fa fa-plus"></i> Add New Job</a>
                           </div>
                        </div>

                        <div class="top-campaign">

                           <div class="row">
                              <div class="col-lg-12">

                                 <div class="row">
                                    <div class="col-md-12">

                                       DATA TABLE
                                       <h3 class="title-5 m-b-10">All Job table</h3>



                                       <table id="example" class="table table-borderless table-hover nowrap table-condensed " style="width:100%">

                                          <!-- <table id="example" class="display nowrap" style="width:100%"> -->
                                          <thead>

                                             <tr>
                                                <th style="min-width:140px">Status</th>
                                                <th>Edit/Delete</th>
                                                <th>No.</th>
                                                <th>Job ID</th>

                                                <th>Num_req</th>


                                                <th>Emp_code</th>
                                                <th>Emp_FullName</th>
                                                </>
                                                <th style="min-width:300px">Job</th>
                                                <th style="min-width:600px">Job Details</th>
                                                <th>Priority</th>
                                                <th>Develop by</th>
                                                <th>Responsible by</th>
                                                <th>Approver 1</th>
                                                <th>Approver 2</th>
                                                <th>Due Date</th>
                                                <th>Date Create</th>
                                                <th>Date Modified</th>

                                             </tr>

                                          </thead>
                                          <tbody style="font-size: 0.8em;">

                                             <?php
                                             include("connect.php");
                                             // $strSQL = "SELECT * FROM quatation ORDER BY quatation_ID DESC";
                                             // $query = "SELECT * FROM quatation ORDER BY quatation_ID DESC";

                                             // JOINNNNNNNNNNNN  $query = "SELECT quatation.*,request_product.* FROM quatation LEFT JOIN request_product ON quatation.num_req = request_product.num_req";

                                             $query = "SELECT Job_desc.*,Job_status.* FROM Job_desc LEFT JOIN Job_status ON Job_desc.Status = Job_status.Status_ID ORDER BY Job_desc.Job_ID DESC";
                                             $returnedValue = sqlsrv_query($conn, $query);
                                             $row = sqlsrv_fetch_array($returnedValue, SQLSRV_FETCH_ASSOC);
                                             $count_record = 0;

                                             if ($row === false) {
                                                // echo "Error while fetching array.\n";
                                                die(print_r(sqlsrv_errors(), true));
                                             } else if ($row === null) {
                                                echo "No results were found.\n";
                                             } else {
                                                do {
                                                   $count_record++;


                                             ?>

                                                   <tr>
                                                      <td><?php if ($row["Status"] == 1) { ?>
                                                            <span class="btn btn-secondary btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i> <?php echo $row["Status_Detail"]; ?></span>
                                                         <?php } elseif ($row["Status"] == 6) { ?>
                                                            <span class="btn btn-success btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i> <?php echo $row["Status_Detail"]; ?></span>
                                                         <?php } elseif ($row["Status"] == 7) { ?>
                                                            <span class="btn btn-danger btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i> <?php echo $row["Status_Detail"]; ?></span>
                                                         <?php } else { ?>
                                                            <span class="btn btn-warning btn-block"><i class="fa fa-check-circle" aria-hidden="true"></i> <?php echo $row["Status_Detail"]; ?></span>
                                                         <?php } ?>
                                                      </td>
                                                      <td>
                                                         <a data-toggle="tooltip" data-placement="right" title="Edit Job request" href="job_edit.php?Job_ID=<?php echo $row["Job_ID"]; ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                         <a data-toggle="tooltip" data-placement="right" title="Delete Job request" href="db_delete_job_request.php?Job_ID=<?php echo $row["Job_ID"]; ?>&Num_req=<?php echo $row["Num_req"]; ?>" onclick="return confirm('Are you sure to delete JobRequest >> <?php echo $row['Num_req']; ?> << ?')" class="btn btn-danger  btn-xs"><i class="fa fa-trash" aria-hidden="true"></i></a>


                                                      </td>
                                                      <td><?php echo $count_record; ?></td>
                                                      <td><?php echo $row["Job_ID"]; ?></td>


                                                      <td><?php echo $row["Num_req"]; ?></tdstyle=>

                                                      <td><?php echo $row["Employee_code_request"]; ?></td>
                                                      <td><?php echo $row["Employee_fullname_request"]; ?></td>
                                                      <td><?php echo $row["Job_name"]; ?></td>
                                                      <td><?php echo $row["Job_detail"]; ?></td>
                                                      <td><?php echo $row["Priority"]; ?></td>
                                                      <td><?php echo $row["Developer_by"]; ?></td>
                                                      <td><?php echo $row["Handle_by"]; ?></td>
                                                      <td>
                                                         <?php if (isset($row["Approver1_actiondate"])) {
                                                         ?> <span class="btn btn-success"> <?php echo $row["Approver1"] . ">> Approved"; ?></span>
                                                         <?php } else {
                                                         ?> <span class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title=" รอคุณ <?php echo $row["Approver1"] . " approve ..."; ?>"> <?php echo "Pending"; ?></span>
                                                         <?php }
                                                         ?>
                                                      </td>
                                                      <td>
                                                         <?php if (isset($row["Approver2_actiondate"])) {
                                                         ?> <span class="btn btn-success"> <?php echo $row["Approver2"] . ">> Approved"; ?></span>
                                                         <?php } else {
                                                         ?> <span class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title=" รอคุณ <?php echo $row["Approver2"] . " approve ..."; ?>"> <?php echo "Pending"; ?></span>
                                                         <?php }
                                                         ?></td>

                                                      <td><?php echo date_format($row["Date_desire"], "d/m/Y"); ?></td>
                                                      <td><?php echo date_format($row["Date_create"], "d/m/Y H:i:s"); ?></td>
                                                      <td><?php echo date_format($row["Date_modified"], "d/m/Y H:i:s"); ?></td>



                                                   </tr>
                                             <?php
                                                } while ($row = sqlsrv_fetch_array($returnedValue, SQLSRV_FETCH_ASSOC));
                                             }
                                             ?>
                                          </tbody>

                                       </table>

                                       <!-- END DATA TABLE -->

                                    </div>
                                 </div>

                              </div>

                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>

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

   <!-- Main JS-->
   <script src="js/main.js"></script>


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








<script type="text/javascript">
   $(document).ready(function() {
      $('#example1').DataTable();
   });


   $(document).ready(function() {
      pdfMake.fonts = {

         Sarabun: {
            normal: 'THSarabun.ttf',
            bold: 'THSarabun-Bold.ttf'

         }
      }
      $('#example').DataTable({

         order: [
            [0, 'desc']
         ],

         dom: 'lfB<t>ip',
         buttons: [{

            extend: 'collection',
            text: 'Export  <i class="fa fa-files-o" style="margin-left:10px;"></i>',
            className: 'custom-html-collection',
            buttons: [
               '<h3>Export</h3>',
               {
                  extend: 'pdfHtml5',
                  orientation: 'landscape',
                  pageSize: 'A4',
                  customize: function(doc) { // ส่วนกำหนดเพิ่มเติม ส่วนนี้จะใช้จัดการกับ pdfmake
                     // กำหนด style หลัก
                     doc.defaultStyle = {
                        font: 'Sarabun',
                        fontSize: 12
                     };

                  },
                  download: 'open'
               },

               {
                  extend: 'csv',

               },
               'excel',

            ]
         }, ],

         info: false,

         // fixedHeader: true,
         scrollX: true,
         // responsive: true,


         'initComplete': function() {
            var btns = $('.dt-button');
            btns.addClass('btn btn-group waves-effect waves-light clr');

         }




      });
      // $('#example td').css('white-space', 'initial');


   });



   $('.dt-buttons').removeClass('dt-buttons').addClass("dt-buttons").css({
      "position": "fixed"
   });
</script>

<script script type="text/javascript" charset="utf8" src="js/jquery-3.5.1.js">
</script>
<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/jszip.min.js"></script>
<script script type="text/javascript" charset="utf8" src="js/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/buttons.print.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/buttons.colVis.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/dataTables.bootstrap4.min.js"></script>





<script src="js/swallow.js"></script>


<!-- end document-->
<?php sqlsrv_close($conn); ?>