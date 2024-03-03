<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';
$title = $_POST['title'];
$queryResult=$connect->query("SELECT tbl_question.ID, tbl_question.content, tbl_question.answer_a, tbl_question.answer_b, tbl_question.answer_c, tbl_question.answer_d, tbl_question.answer_index FROM tbl_question INNER JOIN tbl_course ON tbl_question.courseID = tbl_course.ID WHERE tbl_course.title = '".$title."'");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>


