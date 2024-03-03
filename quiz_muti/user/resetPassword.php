<?php
	header('Access-Control-Allow-Origin', '*');
	include '../db.php';
	$username = $_POST['username'];
	$question_security = $_POST['question_security'];
    $password = $_POST['password'];

    $queryResult1= $connect->query("SELECT * FROM tbl_user WHERE username = '".$username."' AND question_security = '".$question_security."'");
    $count = mysqli_num_rows($queryResult1);
	

  
	if ($count == 1) {
        $queryResult=$connect->query("UPDATE tbl_user SET password = '".$password."' WHERE username = '".$username."' AND question_security = '".$question_security."'");
		echo json_encode("Success");
	}else{
		echo json_encode("Error");
	}
?>

