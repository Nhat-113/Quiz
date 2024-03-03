<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';


$queryResult=$connect->query("SELECT * FROM tbl_admin WHERE role = 1");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>

