<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';

$contentOld = $_POST['contentOld'];
$content = $_POST['content'];
$answer_a = $_POST['answer_a'];
$answer_b = $_POST['answer_b'];
$answer_c = $_POST['answer_c'];
$answer_d = $_POST['answer_d'];
$answer_index = $_POST['answer_index'];

$queryResult=$connect->query("UPDATE tbl_question SET content = '".$content."',answer_a = '".$answer_a."',answer_b = '".$answer_b."',answer_c = '".$answer_c."',answer_d = '".$answer_d."',answer_index = '".$answer_index."' WHERE content = '".$contentOld."'");


?>
