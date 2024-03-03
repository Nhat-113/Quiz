<?php
header('Access-Control-Allow-Origin', '*');
include '../db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$queryResult=$connect->query("UPDATE tbl_admin SET password = '".$password."' WHERE username = '".$username."'");


?>