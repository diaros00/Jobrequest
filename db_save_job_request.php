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
include("connect.php");

$sql = "SELECT * FROM vw_Employee where EmployeeUsername = '$Username' ";
$query = sqlsrv_query($conn, $sql);
$result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
$Employee_code_request = $result["EmployeeCode"];
$Employee_fullname_request = $result["ThFullName"];



$Hardware_objective = $_POST["Hardware_objective"];
$Hardware_other = $_POST["Hardware_other"];
$Hardware_type = $_POST["Hardware_type"];
$Hardware_type_other = $_POST["Hardware_type_other"];
$Software_objective = $_POST["Software_objective"];
$Software_other = $_POST["Software_other"];
$Intranet = $_POST["Intranet"];

$TSG = $_POST['TSG'];
$TSA = $_POST['TSA'];
$TSIS = $_POST['TSIS'];
$TCT = $_POST['TCT'];
$TSVT = $_POST['TSVT'];
$TSBP = $_POST['TSBP'];
$TSESA = $_POST['TSESA'];
$TSRA = $_POST['TSRA'];
$TSLA = $_POST['TSLA'];
$TSAP = $_POST['TSAP'];
$TSAT = $_POST['TSAT'];
$TSAT_plant_name = $_POST['TSAT_plant_name'];
$TSPT = $_POST['TSPT'];
$TSPT_plant_name = $_POST['TSPT_plant_name'];
$TSGP = $_POST['TSGP'];
$TSGP_plant_name = $_POST['TSGP_plant_name'];
$For_company_other = $_POST['For_company_other'];

$Budget_plan = $_POST['Budget_plan'];
$Budget_unplan = $_POST['Budget_unplan'];
$Requester = $_POST['Requester'];
$Approver1 = $_POST['Approver1'];

$sqlT = "SELECT * FROM vw_Employee where ThFullName = '$Approver1' ";
$queryT = sqlsrv_query($conn, $sqlT);
$resultT = sqlsrv_fetch_array($queryT, SQLSRV_FETCH_ASSOC);
$Approver1_code = $resultT["EmployeeCode"];

$Approver2 = $_POST['Approver2'];

$sqlT1 = "SELECT * FROM vw_Employee where ThFullName = '$Approver2' ";
$queryT1 = sqlsrv_query($conn, $sqlT1);
$resultT1 = sqlsrv_fetch_array($queryT1, SQLSRV_FETCH_ASSOC);
$Approver2_code = $resultT1["EmployeeCode"];




// ,'$TSA','$TSIS','$TCT','$TSVT','$TSBP','$TSESA',
// '$TSRA','$TSLA','$TSAP','$TSAT','$TSAT_plant_name',
// '$TSPT','$TSPT_Plant_name','$TSGP','$TSGP_Plant_name',
// '$For_company_other','$Budget_plan','$Budget_unplan',
// '$Requester','$Approver1','$Approver2'

// ,['Approver1_actiondate'];

// ,['Approver2_actiondate'];


$date = $_POST["datepicker"];
$time = strtotime($date);
$datepicker = date('Y/m/d', $time);

$Priority = $_POST["Priority"];
$Job_name = $_POST["Job_name"];
$Job_detail = $_POST["Job_detail"];

$Num_req = $_POST['Num_req'];

$sql1 = "INSERT INTO Job_desc 
(Employee_code_request,Employee_fullname_request,Job_name,Job_detail,Date_desire,
Date_create,Date_modified,Num_req,Status,Priority,
Hardware_objective,Hardware_other,Hardware_type,Hardware_type_other,Software_objective,Software_other,Intranet,TSG
,TSA,TSIS,TCT,TSVT,TSBP,TSESA,TSRA
,TSLA,TSAP,TSAT,TSAT_plant_name,TSPT,TSPT_plant_name
,TSGP,TSGP_plant_name,For_company_other,Budget_plan,Budget_unplan
,Requester,Approver1,Approver1_code,Approver2,Approver2_code) 
VALUES 
('$Employee_code_request','$Employee_fullname_request','$Job_name','$Job_detail','$datepicker',
GETDATE(),GETDATE(),'$Num_req',1,'$Priority','$Hardware_objective','$Hardware_other',
'$Hardware_type','$Hardware_type_other','$Software_objective',
'$Software_other','$Intranet','$TSG',
'$TSA','$TSIS','$TCT','$TSVT','$TSBP','$TSESA',
'$TSRA','$TSLA','$TSAP','$TSAT','$TSAT_plant_name',
'$TSPT','$TSPT_plant_name','$TSGP','$TSGP_plant_name',
'$For_company_other','$Budget_plan','$Budget_unplan',
'$Requester','$Approver1','$Approver1_code','$Approver2','$Approver2_code')";


sqlsrv_query($conn, "SET NAMES UTF8");
$query1 = sqlsrv_query($conn, $sql1);

$target_dir = "upload/";



if (isset($_FILES["files"]["tmp_name"])) {
    foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {
        $temp = $_FILES["files"]["tmp_name"][$key];
        $name = $_FILES["files"]["name"][$key];
        $type = $_FILES["files"]["type"][$key];
        if (empty($temp)) {
            break;
        }

        move_uploaded_file($temp, $target_dir . $name);
        $sql2 = "INSERT INTO Job_file 
    (Num_req,File_name,Type,Date_create) 
    VALUES 
    ('$Num_req','$name','$type',GETDATE())";
        sqlsrv_query($conn, "SET NAMES UTF8");
        $query2 = sqlsrv_query($conn, $sql2);
    }
}




if ($query1) {
    if (isset($query2)) {
        session_start();
        // $_SESSION['plan'] = "Add New Job Successfully ! " . gettype($Email_request) . "--- " . gettype($datepicker) . "<<<<<  " . $datepicker . "  <<<datepicker  time>>>" . $time . ">>>>>>>" . $date;
        $_SESSION['plan'] = "Add New Job and Upload files Successfully ! ";
        header("Location: job_add.php");
    } else {
        session_start();
        $_SESSION['plan'] = "Add New Job Successfully ! ";
        // $_SESSION['plan'] = "Add New Job Successfully ! " . gettype($Email_request) . "--- " . gettype($datepicker) . "<<<<<  " . $datepicker . "  <<<datepicker  time>>>" . $time . ">>>>>>>" . $date;
        header("Location: job_add.php");
    }
} else {

    echo "Error: " . $sql1 . "<br>" . sqlsrv_errors($conn);


    //save_logfile($con,'ADD','Error ADD Contact Person ['.$sql_add_cp.']',$name);
}
sqlsrv_close($conn);




exit;
