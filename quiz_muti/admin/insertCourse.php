<?php
	header('Access-Control-Allow-Origin', '*');
	include '../db.php';
	$title = $_POST['title'];
    

	$queryResult=$connect->query("INSERT INTO tbl_course(title, active)	VALUES('".$title."', '0')");

?>