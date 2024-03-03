<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';
$title = $_POST['title'];
$queryResult=$connect->query("SELECT tbl_rank.ID, tbl_user.full_name, tbl_user.username, tbl_rank.score FROM tbl_rank INNER JOIN tbl_course ON tbl_rank.courseID = tbl_course.ID INNER JOIN tbl_user ON tbl_rank.userID = tbl_user.ID WHERE tbl_course.title = '".$title."' LIMIT 9");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>


