<?php

session_start();

if ($_SESSION["Username"] == "") {
    echo "<script type=\"text/javascript\">alert(\"กรุณาเข้าสู่ระบบ\");</script>";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
    exit();
}

$Username = $_SESSION["Username"];

$DepartmentCode = $_SESSION["DepartmentCode"];

ini_set('display_errors', 1);
error_reporting(~0);
include("connect.php");

$sqlT = "SELECT * FROM vw_Employee WHERE EmployeeCode like '%" . $_POST['keyword'] . "%' and DepartmentCode = '$DepartmentCode' and EmployeeStatusCode = '01' ";
$queryT = sqlsrv_query($conn, $sqlT);
$resultT = sqlsrv_fetch_array($queryT, SQLSRV_FETCH_ASSOC);
if (!$resultT) {
    // echo "Error while fetching array.\n";
    die(print_r(sqlsrv_errors(), true));
} else if ($resultT === null) {
    echo "No results were found.\n";
} else {
    do {
        $name_search = str_replace($_POST['keyword'], '<b><font color="#417fe2">' . $_POST['keyword'] . '</font></b>', $resultT['EmployeeCode']);

        echo '<li onclick="putValue(\'' . str_replace("'", "\'", $resultT['EmployeeCode']) . '\',
        \'' . str_replace("'", "\'", $resultT['PlantNameTH']) . '\',
        \'' . str_replace("'", "\'", $resultT['ThFirstName']) . '\',
        \'' . str_replace("'", "\'", $resultT['ThLastName']) . '\',
        \'' . str_replace("'", "\'", $resultT['DepartmentName']) . '\',
        \'' . str_replace("'", "\'", $resultT['MobilePhone']) . '\' ,
        \'' . str_replace("'", "\'", $resultT['Email']) . '\')">' . $name_search . '</li>';
    } while ($resultT = sqlsrv_fetch_array($queryT, SQLSRV_FETCH_ASSOC));
}
