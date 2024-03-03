<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';
$titleOld = $_POST['titleOld'];
$title = $_POST['title'];
$active = $_POST['active'];

$queryResult=$connect->query("UPDATE tbl_course SET title = '".$title."', active = '".$active."' WHERE title = '".$titleOld."'");


?>

