<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$role = $_POST['role'];
$queryResult=$connect->query("UPDATE tbl_admin SET password = '".$password."', role = '".$role."', name = '".$fullname."' WHERE username = '".$username."'");


?>