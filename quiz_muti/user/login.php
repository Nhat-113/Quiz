<?php
	header('Access-Control-Allow-Origin', '*');
	include '../db.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$queryResult=$connect->query("SELECT username FROM tbl_user WHERE username = '".$username."' AND password = '".$password."'");
	$count = mysqli_num_rows($queryResult);

    if ($count == 1) {
		echo json_encode("Success");
	}else{
		echo json_encode("Error");
	}
?>