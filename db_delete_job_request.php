<?php
include("connect.php");
if (isset($_GET["Job_ID"])) {

	$Job_ID = $_GET['Job_ID'];
	$Num_req = $_GET['Num_req'];

	$query = "SELECT * FROM Job_file WHERE Num_req = '$Num_req'";
	$returnedValue = sqlsrv_query($conn, $query);
	$row = sqlsrv_fetch_array($returnedValue, SQLSRV_FETCH_ASSOC);

	if ($row === false) {
		die(print_r(sqlsrv_errors(), true));
	} else if ($row === null) {
		$sql = "DELETE FROM Job_desc where Job_ID ='$Job_ID'";
		sqlsrv_query($conn, "SET NAMES UTF8");
		$query = sqlsrv_query($conn, $sql);
	} else {
		$sql = "DELETE FROM Job_desc where Job_ID ='$Job_ID'";
		$sql1 = "DELETE FROM Job_file where Num_req ='$Num_req'";

		sqlsrv_query($conn, "SET NAMES UTF8");
		$query = sqlsrv_query($conn, $sql);
		$query1 = sqlsrv_query($conn, $sql1);
	}


	if ($query) {
		if (isset($query1)) {
			session_start();
			$_SESSION['plan'] = " Delete Job and Files Successfully !";
			header("Location: job_all.php");
		} else {
			session_start();
			$_SESSION['plan'] = " Delete Job Successfully !";
			header("Location: job_all.php");
		}
	} else {
		echo "Error: " . $sql . "<br>" . sqlsrv_errors($conn);
	}
}
exit;
sqlsrv_close($conn);
