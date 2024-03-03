<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';


$queryAdmin=$connect->query("SELECT * FROM tbl_admin WHERE role = 1");
$countAdmin = mysqli_num_rows($queryAdmin);

$queryUser=$connect->query("SELECT * FROM tbl_user");
$countUser = mysqli_num_rows($queryUser);

$queryQuestion=$connect->query("SELECT * FROM tbl_question");
$countQuestion = mysqli_num_rows($queryQuestion);

$queryCourse=$connect->query("SELECT * FROM tbl_course");
$countCourse = mysqli_num_rows($queryCourse);

$queryRank=$connect->query("SELECT tbl_course.title FROM  tbl_rank INNER JOIN tbl_course ON tbl_rank.courseID = tbl_course.ID GROUP BY tbl_rank.courseID ORDER BY count(*) DESC LIMIT 1");
$result1=array();
$title = '';
while($fetchData=$queryRank->fetch_assoc()){
	$title = $fetchData['title'];
}


$result=array();

$result = [(string)$countAdmin, (string)$countUser, (string)$countCourse, (string)$countQuestion, (string)$title];

echo json_encode($result);

?>

	

