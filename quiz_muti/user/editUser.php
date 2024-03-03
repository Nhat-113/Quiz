<?php
	header('Access-Control-Allow-Origin', '*');
	include '../db.php';
    $username = $_POST['username'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$bod = $_POST['bod'];



	$queryResult=$connect->query("UPDATE tbl_user SET tbl_user.password = '".$password."', phone = '".$phone."', bod = '".$bod."' WHERE  username = '".$username."'");

?>