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
$sqlT = "SELECT * FROM vw_Employee where EmployeeUsername = '$Username' ";
$queryT = sqlsrv_query($conn, $sqlT);
$resultT = sqlsrv_fetch_array($queryT, SQLSRV_FETCH_ASSOC);

$Update_by = $resultT["ThFirstName"] . " " . $resultT["ThLastName"];


$Job_ID = $_POST["Job_ID"];
$Employee_request = $_POST["Employee_request"];
$Company_request = $_POST["Company_request"];
$FName_request = $_POST["FName_request"];
$LName_request = $_POST["LName_request"];
$Department_request = $_POST["Department_request"];
$Telephone_request = $_POST["Telephone_request"];
$Email_request = $_POST["Email_request"];

// $date = $_POST["datepicker"];
// $time = strtotime($date);
// $datepicker = date('Y/m/d', $time);

$Priority = $_POST["Priority"];
$Job_name = $_POST["Job_name"];
$Job_detail = $_POST["Job_detail"];

$Num_req = $_POST['Num_req'];



// $sql = "UPDATE Job_desc SET Employee_request ='$Employee_request',Company_request = '$Company_request',FName_request = '$FName_request',LName_request = '$LName_request',Department_request = '$Department_request',Telephone_request = '$Telephone_request',Email_request = '$Email_request',Telephone_request = '$Telephone_request',Priority = '$Priority',Job_name = '$Job_name',Job_detail = '$Job_detail',Date_modified = GETDATE(),Update_by = '$Update_by' WHERE Job_ID='$Job_ID' ";
$sql = "UPDATE Job_desc SET Update_by = '$Update_by' , 
Employee_request ='$Employee_request',
Company_request = '$Company_request',
FName_request = '$FName_request',
LName_request = '$LName_request',
Department_request = '$Department_request',
Telephone_request = '$Telephone_request',
Email_request = '$Email_request',
Priority = '$Priority',
Job_name = '$Job_name',
Job_detail ='$Job_detail' 
WHERE Job_ID='$Job_ID' ";

sqlsrv_query($conn, "SET NAMES UTF8");
$query1 = sqlsrv_query($conn, $sql);



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
        if ($query2) {
            session_start();
            // $_SESSION['plan'] = "Add New Job Successfully ! " . gettype($Email_request) . "--- " . gettype($datepicker) . "<<<<<  " . $datepicker . "  <<<datepicker  time>>>" . $time . ">>>>>>>" . $date;
            $_SESSION['plan'] = "Add New Job and Upload files Successfully ! ";
            header("Location: job_add.php");
        } else {

            echo "Error: " . $sql1 . "<br>" . sqlsrv_errors($conn);
        }
    } else {
        session_start();
        $_SESSION['plan'] = "Add New Job Successfully ! ";
        // $_SESSION['plan'] = "Add New Job Successfully ! " . gettype($Email_request) . "--- " . gettype($datepicker) . "<<<<<  " . $datepicker . "  <<<datepicker  time>>>" . $time . ">>>>>>>" . $date;
        header("Location: job_edit.php?Job_ID=" . $Job_ID);
    }
} else {

    echo "Error: " . $sql . "<br>" . sqlsrv_errors($conn);


    //save_logfile($con,'ADD','Error ADD Contact Person ['.$sql_add_cp.']',$name);
}
sqlsrv_close($conn);




exit;
