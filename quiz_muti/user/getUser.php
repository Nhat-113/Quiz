<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';
$username = $_POST['username'];

$queryResult=$connect->query("SELECT * FROM tbl_user WHERE username = '".$username."'");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>

