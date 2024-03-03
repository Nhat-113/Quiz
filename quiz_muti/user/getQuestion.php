<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';
$courseID = $_POST['courseID'];

$queryResult=$connect->query("SELECT * FROM tbl_question WHERE courseID = '".$courseID."'");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
