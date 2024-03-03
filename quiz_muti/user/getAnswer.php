<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';
$questionID = $_POST['questionID'];

$queryResult=$connect->query("SELECT * FROM tbl_answer WHERE questionID = '".$questionID."'");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
