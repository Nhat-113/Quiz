<?php
	header('Access-Control-Allow-Origin', '*');
	include '../db.php';
    $content = $_POST['content'];
	$queryResult=$connect->query("DELETE FROM tbl_question WHERE content = '".$content."'");

?>