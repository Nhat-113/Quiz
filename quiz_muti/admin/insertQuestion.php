
<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';
$title = $_POST['title'];
$content = $_POST['content'];
$answer_a = $_POST['answer_a'];
$answer_b = $_POST['answer_b'];
$answer_c = $_POST['answer_c'];
$answer_d = $_POST['answer_d'];
$answer_index = $_POST['answer_index'];



$queryResult=$connect->query("SELECT ID FROM tbl_course WHERE title = '".$title."'");
$result=array();
while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}
$test= json_encode($result);
$str = '(111) 111-1111';
$str = preg_replace('/\D/', '', $test);

$queryResult1=$connect->query("INSERT INTO tbl_question(content,courseID, answer_a, answer_b, answer_c, answer_d, answer_index)	VALUES('".$content."','".$str."','".$answer_a."','".$answer_b."','".$answer_c."','".$answer_d."','".$answer_index."')");


?>


