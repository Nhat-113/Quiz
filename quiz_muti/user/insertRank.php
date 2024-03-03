<?php
	header('Access-Control-Allow-Origin', '*');
	include '../db.php';
	$courseID = $_POST['courseID'];
    $userID = $_POST['userID'];
    $score = $_POST['score'];

    	$queryResult=$connect->query("SELECT score FROM tbl_rank WHERE courseID = '".$courseID."' AND userID = '".$userID."'");
	    $count = mysqli_num_rows($queryResult);

        if($count == 1){
            $queryResult=$connect->query("UPDATE tbl_rank SET score = '".$score."' WHERE courseID = '".$courseID."' AND userID = '".$userID."'");
            echo 'Đã update';
        }else{
            $queryResult2=$connect->query("INSERT INTO tbl_rank(courseID, userID, score) VALUES('".$courseID."','".$userID."','".$score."')");
            echo 'Đã insert';
        }

?>


