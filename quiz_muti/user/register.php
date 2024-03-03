<?php
	header('Access-Control-Allow-Origin', '*');
	include '../db.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$question_security = $_POST['question_security'];
	$bod = $_POST['bod'];
	$full_name = $_POST['full_name'];


	$queryResult=$connect->query("SELECT username FROM tbl_user WHERE username = '".$username."'");
	$count = mysqli_num_rows($queryResult);

	if ($count == 1) {
		echo json_encode("Error");
	}else{
		$connect->query("INSERT INTO tbl_user(username,password, phone, question_security, bod, full_name)
		VALUES('".$username."','".$password."','".$phone."','".$question_security."','".$bod."','".$full_name."')");
		echo json_encode("Success");
	}
?>