<?php
	header('Access-Control-Allow-Origin', '*');
	include '../db.php';
    $title = $_POST['title'];
	$queryResult=$connect->query("DELETE FROM tbl_course WHERE title = '".$title."'");

?>