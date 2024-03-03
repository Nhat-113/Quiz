<?php
	header('Access-Control-Allow-Origin', '*');
	include '../db.php';
    $username = $_POST['username'];
	$queryResult=$connect->query("DELETE FROM tbl_admin WHERE username = '".$username."'");

?>