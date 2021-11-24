<?php
include("connect.php");
if (isset($_GET["request_ID"])) {

	$request_ID = $_GET['request_ID'];


	$sql = "DELETE FROM request_product where request_ID ='$request_ID'";

	sqlsrv_query($conn, "SET NAMES UTF8");
	$query = sqlsrv_query($conn, $sql);


	if ($query) {
		echo '<script type="text/javascript">alert("Delete Successfully")</script>';
		// echo '<div class="alert alert-success" ><h4><i class="icon fa fa-check"></i>Success!</h4></div>';
		// header('Location: ' . $_SERVER['HTTP_REFERER']);
		header("location: ReportGroup.php");
		// echo 'window.location = "ReportGroup.php"; ';

	} else {
		echo "Error: " . $sql . "<br>" . sqlsrv_errors($conn);
	}
}
exit;
sqlsrv_close($conn);
