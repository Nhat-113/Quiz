<?php
	header('Access-Control-Allow-Origin', '*');
	include '../db.php';
	$username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];


    $queryResult=$connect->query("SELECT username FROM tbl_admin WHERE username = '".$username."'");
	$count = mysqli_num_rows($queryResult);

	if ($count == 1) {
		echo json_encode("Error");
	}else{
	    $queryResult1=$connect->query("INSERT INTO tbl_admin( username, password, name)	VALUES('".$username."','".$password."','".$name."')");
     	echo json_encode("Success");
	}

	

?>

