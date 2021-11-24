<?php
include("connect.php");
if (isset($_GET["Job_File_ID"])) {

	$Job_File_ID = $_GET['Job_File_ID'];
	$File_name = $_GET['File_name'];
	$Job_ID = $_GET['Job_ID'];


	$sql = "DELETE FROM Job_file where Job_File_ID ='$Job_File_ID'";
	unlink("upload/" . $File_name);

	sqlsrv_query($conn, "SET NAMES UTF8");
	$query = sqlsrv_query($conn, $sql);


	if ($query) {

		session_start();
		$_SESSION['plan'] = " Delete Job Successfully !";
		header("Location: job_edit.php?Job_ID=" . $Job_ID);
	} else {
		echo "Error: " . $sql . "<br>" . sqlsrv_errors($conn);
	}
}
exit;
sqlsrv_close($conn);
